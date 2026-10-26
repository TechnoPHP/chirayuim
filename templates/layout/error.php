<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('head') ?>
</head>
<body>
<?= $this->element('header') ?>
<main class="container error-box">
    <?= $this->fetch('content') ?>
    <p class="mt-4"><?= $this->Html->link('Back to home', '/', ['class' => 'btn btn-accent']) ?></p>
</main>
<?= $this->element('footer') ?>
<?= $this->Html->script('bootstrap.bundle.min') ?>
</body>
</html>
