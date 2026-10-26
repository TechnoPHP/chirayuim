<?php
/**
 * @var \App\View\AppView $this
 */
$currentPage = $this->request->getParam('pass.0');
$navItems = [
    'home' => ['Home', '/'],
    'profilesummary' => ['Profile Summary', '/profilesummary'],
    'about' => ['About', '/about'],
];
?>
<nav class="site-header navbar navbar-expand-lg fixed-top" id="siteHeader">
    <div class="container">
        <a class="navbar-brand" href="<?= $this->Url->build('/') ?>">
            <span class="brand-mark">CB</span>
            <span>Chirayu Bhatt<span class="brand-tag">Internet Software Professional</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <?php foreach ($navItems as $key => [$label, $url]) : ?>
                <li class="nav-item">
                    <?= $this->Html->link($label, $url, [
                        'class' => 'nav-link' . ($currentPage === $key ? ' active' : ''),
                        'aria-current' => $currentPage === $key ? 'page' : false,
                    ]) ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
