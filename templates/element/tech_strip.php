<?php
/**
 * "Ease With" skill tiles, grouped by area. Each item is icon class => label.
 *
 * @var \App\View\AppView $this
 */
$groups = [
    'Web & Platforms' => [
        'class' => 'tech-group-web',
        'items' => [
            'fab fa-linux' => 'Linux',
            'fa fa-feather-alt' => 'Apache',
            'fa fa-database' => 'MySQL',
            'fab fa-php' => 'PHP',
            'fa fa-cloud' => 'Web Services',
            'fa fa-code' => 'JSON',
            'fa fa-network-wired' => 'Service Oriented Architecture',
        ],
    ],
    'AI & Machine Learning' => [
        'class' => 'tech-group-ai',
        'items' => [
            'fa fa-magic' => 'Generative AI',
            'fa fa-brain' => 'Large Language Models',
            'fa fa-terminal' => 'Prompt Engineering',
            'fa fa-robot' => 'AI Agents',
            'fa fa-search' => 'RAG',
            'fa fa-layer-group' => 'Vector Databases',
            'fa fa-plug' => 'LLM API Integration',
            'fa fa-project-diagram' => 'Model Context Protocol (MCP)',
        ],
    ],
];
?>
<?php foreach ($groups as $title => $group) : ?>
<div class="tech-group <?= h($group['class']) ?>">
    <h3 class="tech-group-title"><?= h($title) ?></h3>
    <div class="tech-strip">
        <?php foreach ($group['items'] as $icon => $label) : ?>
        <div class="tech"><i class="<?= h($icon) ?>" aria-hidden="true"></i><span><?= h($label) ?></span></div>
        <?php endforeach; ?>
    </div>
</div>
<?php endforeach; ?>
