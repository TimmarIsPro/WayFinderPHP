<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Building $building
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $building->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $building->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Buildings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="buildings form large-9 medium-8 columns content">
    <?= $this->Form->create($building) ?>
    <fieldset>
        <legend><?= __('Edit Building') ?></legend>
        <?php
            echo $this->Form->control('campusId');
            echo $this->Form->control('address');
            echo $this->Form->control('name');
            echo $this->Form->control('gridPointA');
            echo $this->Form->control('gridPointB');
            echo $this->Form->control('gridPointC');
            echo $this->Form->control('gridPointD');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
