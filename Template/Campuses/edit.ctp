<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campus $campus
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $campus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $campus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Campuses'), ['action' => 'index']) ?></li>
    </ul>
    <div class="grid-container campuses form large-9 medium-8 cell content" id="body">
        <?= $this->Form->create($campus) ?>
        <fieldset>
            <legend><?= __('Edit Campus') ?></legend>
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

</div>
