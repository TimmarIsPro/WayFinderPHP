<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
    </ul>
    <div class="grid-container events form large-9 medium-8 cell content" id="body">
        <?= $this->Form->create($event) ?>
        <fieldset>
            <legend><?= __('Add Event') ?></legend>
            <?php
            echo $this->Form->control('title');
            echo $this->Form->control('dateStart', ['empty' => true]);
            echo $this->Form->control('dateEnd', ['empty' => true]);
            echo $this->Form->control('location');
            echo $this->Form->control('description');
            echo $this->Form->control('approved');
            echo $this->Form->control('submitted');
            echo $this->Form->control('submittedId');
            echo $this->Form->control('contactEmail');
            ?>
        </fieldset>
        <div class="text-right" id="button">
            <?= $this->Form->button(__('Submit')) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>

</div>
