<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Floor $floor
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Floors'), ['action' => 'index']) ?></li>
    </ul>
    <div class="grid-container floors form large-9 medium-8 cell content" id="body">
        <?= $this->Form->create($floor) ?>
        <fieldset>
            <legend><?= __('Add Floor') ?></legend>
            <?php
            echo $this->Form->control('floor');
            echo $this->Form->control('buildingId');
            echo $this->Form->control('mapId');
            ?>
        </fieldset>
        <div class="text-right" id="button">
            <?= $this->Form->button(__('Submit')) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>

