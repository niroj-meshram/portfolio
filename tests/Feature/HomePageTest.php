<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Guards the page's SEO metadata and the content rules in CLAUDE.md
 * (official job title in JSON-LD, no phone number, no session cookies on a static page).
 */
class HomePageTest extends TestCase
{
    private function html(): string
    {
        return $this->get('/')->assertOk()->getContent();
    }

    public function test_title_and_description_fit_search_result_limits(): void
    {
        $html = $this->html();

        $this->assertMatchesRegularExpression('#<title>(.+?)</title>#s', $html);
        preg_match('#<title>(.+?)</title>#s', $html, $title);
        preg_match('#<meta name="description" content="([^"]+)"#', $html, $description);

        $this->assertLessThanOrEqual(60, mb_strlen(html_entity_decode($title[1])));
        $this->assertNotEmpty($description[1] ?? null);
        $this->assertLessThanOrEqual(160, mb_strlen(html_entity_decode($description[1])));
    }

    public function test_canonical_and_social_urls_use_the_public_domain(): void
    {
        $html = $this->html();

        $this->assertStringContainsString('<link rel="canonical" href="https://nirojdev.in/">', $html);
        $this->assertStringContainsString('<meta property="og:url" content="https://nirojdev.in/">', $html);
        $this->assertStringContainsString('<meta name="robots" content="index, follow">', $html);
    }

    public function test_social_tags_reuse_the_page_title_and_reference_no_missing_image(): void
    {
        $html = $this->html();

        preg_match('#<title>(.+?)</title>#s', $html, $title);
        $this->assertStringContainsString('<meta property="og:title" content="'.$title[1].'">', $html);
        $this->assertStringContainsString('<meta name="twitter:title" content="'.$title[1].'">', $html);
        $this->assertStringContainsString('<meta name="twitter:card" content="summary">', $html);
        $this->assertStringNotContainsString('og:image', $html);
        $this->assertStringNotContainsString('twitter:image', $html);
    }

    public function test_json_ld_is_valid_and_uses_the_official_designation(): void
    {
        preg_match('#<script type="application/ld\+json">(.+?)</script>#s', $this->html(), $match);
        $data = json_decode($match[1] ?? '', true, flags: JSON_THROW_ON_ERROR);

        $byType = collect($data['@graph'])->keyBy('@type');
        $person = $byType['Person'];

        $this->assertSame('https://schema.org', $data['@context']);
        $this->assertSame('Software Engineer', $person['jobTitle']);
        $this->assertSame('Bacancy Software LLP', $person['worksFor']['name']);
        $this->assertSame('https://nirojdev.in/', $person['url']);
        $this->assertSame($person['@id'], $byType['ProfilePage']['mainEntity']['@id']);
        $this->assertArrayNotHasKey('telephone', $person);
    }

    public function test_positioning_features_the_primary_stack_and_not_symfony(): void
    {
        $html = $this->html();

        foreach (['Symfony', 'API Platform', 'Doctrine', 'Next.js', 'NextJS', 'suggests the implementation', 'generated code'] as $phrase) {
            $this->assertStringNotContainsString($phrase, $html);
        }

        preg_match('#aria-label="Core technologies">(.+?)</ul>#s', $html, $chips);
        foreach (['PHP', 'Laravel', 'MySQL', 'AWS', 'React', 'TypeScript'] as $tech) {
            $this->assertStringContainsString('>'.$tech.'<', $chips[1] ?? '', "Hero chip missing: {$tech}");
        }

        preg_match('#<script type="application/ld\+json">(.+?)</script>#s', $html, $match);
        $person = collect(json_decode($match[1], true)['@graph'])->firstWhere('@type', 'Person');
        $this->assertContains('React', $person['knowsAbout']);
        $this->assertContains('TypeScript', $person['knowsAbout']);
    }

    public function test_case_study_shows_the_laravel_backend_but_not_filament(): void
    {
        preg_match('#<section id="case-study".+?</section>#s', $this->html(), $section);

        // The enterprise SaaS platform has a Laravel backend and a React/TypeScript frontend.
        // Filament belongs to the separate Laravel/Filament workstream and must not be attributed to it.
        $this->assertNotEmpty($section[0] ?? null);
        foreach (['Laravel', 'React', 'TypeScript'] as $tech) {
            $this->assertStringContainsString($tech, $section[0]);
        }
        $this->assertStringNotContainsString('Filament', $section[0]);
    }

    public function test_client_project_shows_performance_gains_as_percentages_not_seconds(): void
    {
        // User decision: the enterprise SaaS figures are published, but performance gains are
        // percentages, never raw timings or before/after values.
        $html = $this->html();
        preg_match('#<section id="case-study".+?</section>#s', $html, $caseStudy);
        preg_match('#Enterprise SaaS platform <span.+?</ul>\s*</div>#s', $html, $experience);

        foreach ([$caseStudy[0] ?? '', $experience[0] ?? ''] as $block) {
            $this->assertNotEmpty($block);
            $text = strip_tags($block);
            $this->assertDoesNotMatchRegularExpression('/\d+(\.\d+)?\s?(ms|s|sec|seconds?)\b/', $text);
            $this->assertDoesNotMatchRegularExpression('/\b\d+(\.\d+)?\s?(→|->|to)\s?\d+/', $text);
            $this->assertStringContainsString('97%', $text);
            $this->assertStringContainsString('93%', $text);
        }
    }

    public function test_oopsie_is_a_labelled_personal_project_without_unverified_claims(): void
    {
        // Oopsie sits under "Personal projects", after the professional (Sofmen) projects.
        // It's a Chrome extension: a repository link, no live demo. Claims are checked against its README;
        // the repo has no licence (so not "open source") and Testing Library is installed there but unused.
        $html = $this->html();
        preg_match('#<section id="projects".+?</section>#s', $html, $section);
        preg_match('#<article id="oopsie".+?</article>#s', $html, $oopsie);

        $this->assertNotEmpty($section[0] ?? null);
        $this->assertNotEmpty($oopsie[0] ?? null);
        $this->assertGreaterThan(strpos($section[0], 'Wallaby Windows'), strpos($section[0], 'Personal projects'));
        $this->assertGreaterThan(strpos($section[0], 'Personal projects'), strpos($section[0], 'id="oopsie"'));

        $this->assertStringContainsString('href="https://github.com/niroj-meshram/oopsie"', $oopsie[0]);
        $this->assertStringContainsString('Personal project', $oopsie[0]);
        $this->assertStringContainsString('Built with an AI-Assisted Engineering Workflow', $oopsie[0]);
        foreach (['demo', 'open source', 'Open source', 'Testing Library', 'Claude Code suggests'] as $phrase) {
            $this->assertStringNotContainsString($phrase, $oopsie[0]);
        }
    }

    public function test_page_contains_no_phone_number(): void
    {
        $html = $this->html();

        $this->assertStringNotContainsString('tel:', $html);
        $this->assertDoesNotMatchRegularExpression('/\+91[\s-]?\d|\b\d{5}[\s-]?\d{5}\b/', $html);
    }

    public function test_static_page_starts_no_session_and_is_cacheable(): void
    {
        $response = $this->get('/')->assertOk();

        $this->assertSame([], $response->headers->getCookies());
        $this->assertStringContainsString('public', $response->headers->get('Cache-Control'));
        $this->assertStringContainsString('max-age=300', $response->headers->get('Cache-Control'));
    }

    public function test_static_seo_files_exist_and_point_at_the_public_domain(): void
    {
        $this->assertStringContainsString(
            'Sitemap: https://nirojdev.in/sitemap.xml',
            file_get_contents(public_path('robots.txt'))
        );

        $sitemap = simplexml_load_file(public_path('sitemap.xml'));
        $this->assertSame('https://nirojdev.in/', (string) $sitemap->url->loc);

        $this->assertGreaterThan(0, filesize(public_path('favicon.ico')));
        $this->assertFileExists(public_path('apple-touch-icon.png'));
        $this->assertFileExists(public_path('fonts/inter-v20-latin.woff2'));
        $this->assertFileExists(public_path('fonts/plus-jakarta-sans-v12-latin.woff2'));
    }
}
