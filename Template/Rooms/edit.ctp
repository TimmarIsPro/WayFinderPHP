<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $room->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?></li>
    </ul>
    <div class="grid-container rooms form large-9 medium-8 cell content" id="body">
        <?= $this->Form->create($room) ?>
        <fieldset>
            <legend><?= __('Edit Room') ?></legend>
            <?php
            echo $this->Form->control('name');
            echo $this->Form->control('floorId');
            echo $this->Form->control('mapId');
            echo $this->Form->control('gridPointA');
            echo $this->Form->control('gridPointB');
            echo $this->Form->control('gridPointC');
            echo $this->Form->control('gridPointD');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

