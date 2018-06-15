<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="grid-container">
    <div class="users form large-9 medium-8 cell content">
        <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('Login') ?></legend>
            <?php
                echo $this->Form->control('username');
                echo $this->Form->control('password');
            ?>
        </fieldset>
        <div class="text-right" id="button">
            <?= $this->Form->button(__('Submit')) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
