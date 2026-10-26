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
<main>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</main>
<?= $this->element('footer') ?>
<?= $this->Html->script('bootstrap.bundle.min') ?>
<script>
    (function () {
        var header = document.getElementById('siteHeader');
        var onScroll = function () {
            header.classList.toggle('is-scrolled', window.scrollY > 50);
        };
        window.addEventListener('scroll', onScroll, {passive: true});
        onScroll();
    })();
</script>
<?= $this->fetch('script') ?>
</body>
</html>
