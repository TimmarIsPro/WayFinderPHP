<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campusevent $campusevent
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $campusevent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $campusevent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Campusevents'), ['action' => 'index']) ?></li>
    </ul>
    <div class="grid-container campusevents form large-9 medium-8 cell content" id="body">
        <?= $this->Form->create($campusevent) ?>
        <fieldset>
            <legend><?= __('Edit Campusevent') ?></legend>
            <?php
            echo $this->Form->control('eventId');
            echo $this->Form->control('campusId');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

