<?php
/**
 * Search engine and AI crawler metadata: description, canonical URL,
 * Open Graph / Twitter tags and schema.org JSON-LD.
 *
 * Pages set `$this->assign('description', ...)` alongside their title.
 *
 * @var \App\View\AppView $this
 */
use Cake\Core\Configure;

$siteUrl = rtrim((string)Configure::read('Site.url'), '/');
$page = $this->request->getParam('pass.0');
$path = ($page === null || $page === 'home') ? '/' : '/' . $page;
$canonical = $siteUrl . $path;
$title = $this->fetch('title');
$description = $this->fetch('description');
$image = $siteUrl . '/img/profile-photo.png';

$person = [
    '@type' => 'Person',
    '@id' => $siteUrl . '/#person',
    'name' => 'Chirayu Bhatt',
    'url' => $siteUrl . '/',
    'image' => $image,
    'email' => 'mailto:contact@chirayu.im',
    'jobTitle' => 'Technology Head',
    'description' => 'Internet software professional with over 26 years of experience in PHP and LAMP application development, '
        . 'service oriented architectures, Agentic AI, Retrieval-Augmented Generation (RAG) and LLM integration.',
    'worksFor' => ['@type' => 'Organization', 'name' => 'CBbytes'],
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Vadodara',
        'addressRegion' => 'Gujarat',
        'addressCountry' => 'IN',
    ],
    'alumniOf' => [
        '@type' => 'CollegeOrUniversity',
        'name' => 'The Maharaja Sayajirao University of Baroda',
    ],
    'knowsAbout' => [
        'Agentic AI',
        'AI Agents',
        'Retrieval-Augmented Generation (RAG)',
        'Generative AI',
        'Large Language Models (LLM)',
        'LLM API Integration',
        'Prompt Engineering',
        'Vector Databases',
        'Model Context Protocol (MCP)',
        'Machine Learning',
        'Big Data Analytics',
        'PHP',
        'MySQL',
        'Apache',
        'Linux',
        'Service Oriented Architecture',
        'Web Services',
        'Software as a Service (SaaS)',
        'Software Architecture',
        'Project Management',
    ],
    'sameAs' => [
        'https://linkedin.com/in/TechnoPHP',
        'https://twitter.com/TechnoPHP',
        'https://facebook.com/TechnoPHB/',
    ],
];

$webPage = [
    '@type' => in_array($page, ['profilesummary', 'about'], true) ? 'ProfilePage' : 'WebPage',
    '@id' => $canonical . '#webpage',
    'url' => $canonical,
    'name' => $title,
    'description' => $description,
    'isPartOf' => ['@id' => $siteUrl . '/#website'],
    'about' => ['@id' => $siteUrl . '/#person'],
    'inLanguage' => 'en',
];
if ($webPage['@type'] === 'ProfilePage') {
    $webPage['mainEntity'] = ['@id' => $siteUrl . '/#person'];
}

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebSite',
            '@id' => $siteUrl . '/#website',
            'url' => $siteUrl . '/',
            'name' => Configure::read('Site.name'),
            'publisher' => ['@id' => $siteUrl . '/#person'],
            'inLanguage' => 'en',
        ],
        $person,
        $webPage,
    ],
];
?>
<?php if ($description) : ?>
<meta name="description" content="<?= h($description) ?>">
<?php endif; ?>
<meta name="author" content="Chirayu Bhatt">
<?php if ($this->getLayout() === 'error') : ?>
<meta name="robots" content="noindex, follow">
<?php return; ?>
<?php endif; ?>
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large">
<link rel="canonical" href="<?= h($canonical) ?>">
<link rel="sitemap" type="application/xml" href="<?= h($siteUrl) ?>/sitemap.xml">
<meta property="og:type" content="<?= $webPage['@type'] === 'ProfilePage' ? 'profile' : 'website' ?>">
<meta property="og:site_name" content="<?= h(Configure::read('Site.name')) ?>">
<meta property="og:title" content="<?= h($title) ?>">
<?php if ($description) : ?>
<meta property="og:description" content="<?= h($description) ?>">
<?php endif; ?>
<meta property="og:url" content="<?= h($canonical) ?>">
<meta property="og:image" content="<?= h($image) ?>">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@TechnoPHP">
<meta name="twitter:title" content="<?= h($title) ?>">
<?php if ($description) : ?>
<meta name="twitter:description" content="<?= h($description) ?>">
<?php endif; ?>
<meta name="twitter:image" content="<?= h($image) ?>">
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP) ?></script>
