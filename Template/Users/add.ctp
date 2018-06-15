<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
    <div class="grid-container users form large-9 medium-8 cell content" id="body">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Add User') ?></legend>
            <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role');
            ?>
        </fieldset>
        <div class="text-right" id="button">
            <?= $this->Form->button(__('Submit')) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>

</div>
