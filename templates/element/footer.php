<?php
/**
 * @var \App\View\AppView $this
 */
?>
<footer class="site-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <h2>Chirayu Bhatt</h2>
                <p class="mb-0">Collaborate, Communicate &amp; Connect</p>
            </div>
            <div class="col-6 col-lg-3">
                <ul class="footer-links">
                    <li><?= $this->Html->link('Home', '/') ?></li>
                    <li><?= $this->Html->link('Profile Summary', '/profilesummary') ?></li>
                    <li><?= $this->Html->link('About', '/about') ?></li>
                </ul>
            </div>
            <div class="col-6 col-lg-4">
                <ul class="footer-links">
                    <li><a href="mailto:contact@chirayu.im"><i class="fa fa-envelope me-2"></i>contact@chirayu.im</a></li>
                    <li><i class="fa fa-map-marker-alt me-2"></i>Vadodara, GJ, India</li>
                    <li><?= $this->Html->link('Disclaimer', '/disclaimer') ?></li>
                </ul>
            </div>
        </div>
        <div class="copyright d-flex flex-wrap justify-content-between align-items-center gap-3">
            <span>Copyright © <?= date('Y') ?>. All Rights Reserved</span>
            <?= $this->element('social_links', ['class' => 'd-flex gap-2']) ?>
        </div>
    </div>
</footer>
