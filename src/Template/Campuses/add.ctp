<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campus $campus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Campuses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="campuses form large-9 medium-8 columns content">
    <?= $this->Form->create($campus) ?>
    <fieldset>
        <legend><?= __('Add Campus') ?></legend>
        <?php
            echo $this->Form->control('address');
            echo $this->Form->control('name');
            echo $this->Form->control('website');
            echo $this->Form->control('mapId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
