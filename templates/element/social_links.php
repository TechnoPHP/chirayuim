<?php
/**
 * @var \App\View\AppView $this
 * @var string $class Extra classes for the wrapper.
 */
$links = [
    ['fab fa-facebook-f', 'https://facebook.com/TechnoPHB/', 'Facebook'],
    ['fab fa-twitter', 'https://twitter.com/TechnoPHP', 'Twitter'],
    ['fab fa-linkedin-in', 'https://linkedin.com/in/TechnoPHP', 'LinkedIn'],
];
?>
<div class="social-links <?= h($class ?? '') ?>">
    <?php foreach ($links as [$icon, $url, $label]) : ?>
    <a href="<?= h($url) ?>" target="_blank" rel="noopener" aria-label="<?= h($label) ?>"><i class="<?= h($icon) ?>"></i></a>
    <?php endforeach; ?>
</div>
