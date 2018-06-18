<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Map $map
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
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
    <div class="grid-container maps form large-9 medium-8 cell content" id="body">
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

</div>
