<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use Cake\Core\Configure;
use Cake\TestSuite\Constraint\Response\StatusCode;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

/**
 * PagesControllerTest class
 */
class PagesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * @return array<string, array{string, string}>
     */
    public static function pageProvider(): array
    {
        return [
            'home' => ['/', '<title>Chirayu Bhatt - Software Architect'],
            'profile summary' => ['/profilesummary', 'Technology Head'],
            'about' => ['/about', '<title>About Chirayu Bhatt - PHP, Agentic AI &amp; RAG Expert</title>'],
            'disclaimer' => ['/disclaimer', '<title>Disclaimer - Chirayu Bhatt</title>'],
        ];
    }

    /**
     * Each profile page renders inside the site layout.
     *
     * @param string $url Page URL.
     * @param string $expected Text the page must contain.
     * @return void
     */
    #[DataProvider('pageProvider')]
    public function testDisplay(string $url, string $expected): void
    {
        $this->get($url);
        $this->assertResponseOk();
        $this->assertResponseContains($expected);
        $this->assertResponseContains('<html lang="en">');
    }

    /**
     * Pages carry the SEO metadata crawlers rely on.
     *
     * @return void
     */
    public function testSeoMetadata(): void
    {
        $this->get('/profilesummary');
        $this->assertResponseOk();
        $this->assertResponseContains('<meta name="description"');
        $this->assertResponseContains('<link rel="canonical" href="https://chirayu.im/profilesummary">');
        $this->assertResponseContains('<meta property="og:type" content="profile">');

        $body = (string)$this->_response->getBody();
        preg_match('#<script type="application/ld\+json">(.*?)</script>#s', $body, $match);
        $schema = json_decode($match[1] ?? '', true);
        $this->assertIsArray($schema, 'JSON-LD must be valid JSON');
        $types = array_column($schema['@graph'], '@type');
        $this->assertSame(['WebSite', 'Person', 'ProfilePage'], $types);
        $this->assertContains('Agentic AI', $schema['@graph'][1]['knowsAbout']);
        $this->assertContains('Retrieval-Augmented Generation (RAG)', $schema['@graph'][1]['knowsAbout']);
    }

    /**
     * Error pages are kept out of search indexes.
     *
     * @return void
     */
    public function testErrorPageIsNoindex(): void
    {
        Configure::write('debug', false);
        $this->get('/does-not-exist');
        $this->assertResponseCode(404);
        $this->assertResponseContains('<meta name="robots" content="noindex, follow">');
        $this->assertResponseNotContains('rel="canonical"');
    }

    /**
     * Legacy URLs that were removed (articles, jobs, users, /pages/*) return 404.
     *
     * @return void
     */
    public function testRemovedUrlsAreNotFound(): void
    {
        Configure::write('debug', false);
        foreach (['/posts', '/articles', '/search-jobs', '/users/login', '/pages/home'] as $url) {
            $this->get($url);
            $this->assertResponseCode(404, $url);
        }
    }

    /**
     * Test that CSRF protection is applied to page rendering.
     *
     * @return void
     */
    public function testCsrfAppliedError(): void
    {
        $this->post('/', ['hello' => 'world']);

        $this->assertResponseCode(403);
        $this->assertResponseContains('CSRF');
    }

    /**
     * Test that CSRF protection is applied to page rendering.
     *
     * @return void
     */
    public function testCsrfAppliedOk(): void
    {
        $this->enableCsrfToken();
        $this->post('/', ['hello' => 'world']);

        $this->assertThat(403, $this->logicalNot(new StatusCode($this->_response)));
        $this->assertResponseNotContains('CSRF');
    }
}
