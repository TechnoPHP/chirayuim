<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Html->charset() ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= h($this->fetch('title')) ?></title>
<?= $this->element('seo') ?>
<?= $this->Html->meta('icon') ?>
<?= $this->Html->css(['bootstrap.min', 'all.min', 'site']) ?>
<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
