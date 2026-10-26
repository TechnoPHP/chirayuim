<?php
/**
 * "How I can help" cards followed by the contact call to action.
 * Shared by the Home and About pages.
 *
 * @var \App\View\AppView $this
 * @var array<array{string, string, string}> $cards [icon, title, text]
 */
?>
<section class="section section-soft">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">How I Can Help</h2>
        </div>
        <div class="row g-4">
            <?php foreach ($cards as [$icon, $title, $text]) : ?>
            <div class="col-md-4">
                <div class="service-card">
                    <span class="icon"><i class="<?= h($icon) ?>"></i></span>
                    <h3><?= h($title) ?></h3>
                    <p><?= h($text) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-3">
        <h2>I can deliver these in user friendly way</h2>
        <a href="mailto:contact@chirayu.im" class="btn btn-light btn-lg">Give me a buzz here</a>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-title">Ease With</h2>
        </div>
        <?= $this->element('tech_strip') ?>
    </div>
</section>
