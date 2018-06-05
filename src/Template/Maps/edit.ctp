<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Map $map
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $map->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $map->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Maps'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="maps form large-9 medium-8 columns content">
    <?= $this->Form->create($map) ?>
    <fieldset>
        <legend><?= __('Edit Map') ?></legend>
        <?php
            echo $this->Form->control('filename');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div class="documents form large-9 medium-8 columns content">
    <?php echo $this->Form->create($map, ['type' => 'file']) ?>
    <fieldset>
        <legend><?php echo __('Edit Map') ?></legend>
        <div><strong>Current Map</strong></div>
        <?php
            echo $this->Html->link($map->filename, '/files/' . $map->filename);
            echo $this->Form->input('file', ['type' => 'file']);
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?php echo $this->Form->button(__('Submit))' ?>
    <?php echo $this->Html->link(__('Cancel'), ['controller' => 'Maps', 'action' => 'view', $map->campus_Id], ['class' => 'button']); ?>
    <?php echo $this->Form->end() ?>
</div>