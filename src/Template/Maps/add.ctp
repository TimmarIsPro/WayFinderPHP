<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Map $map
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Maps'), ['action' => 'index']) ?></li>
    </ul>
</nav>


<div class="maps form large-9 medium-8 columns content">
    <?= $this->Form->create($map) ?>
    <fieldset>
        <legend><?= __('Add Map') ?></legend>
        <?php
            echo $this->Form->control('filename');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


<div class="documents form large-9 medium-8 columns conent">
    <?php echo $this->Form->create($map, ['type' => 'file']) ?>
    <fieldset>
        <legend><?php echo __('Add Map') ?></legend>
        <?php
            echo $this->Form->input('campus', ['type' => 'text', 'default' => $map_id, 'disabled' => 'true']);
            echo $this->Form->input('name', ['autofocus' => 'true']);
            echo $this->Form->input('file', ['type' => 'file', 'required' => 'true']);
            echo $this->Form->input('description');
            echo $this->Form->input('campus_id', ['type' => 'hidden', 'value' => $campus_Id]);
        ?>
    </fieldset>
    <?php echo $this->Form->button(__('Submit')) ?>
    <?php echo $this->Html->link(__('Cancel'), ['controller' => 'Campuses', 'action' => 'view', $campus_Id], ['class' => 'button']); ?>
    <?php echo $this->Form->end() ?>
</div>