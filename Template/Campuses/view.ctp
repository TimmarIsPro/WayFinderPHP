<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campus $campus
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Campus'), ['action' => 'edit', $campus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Campus'), ['action' => 'delete', $campus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Campuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campus'), ['action' => 'add']) ?> </li>
    </ul>
    <div class="grid-container campuses view large-9 medium-8 cell content" id="body">
        <h3><?= h($campus->name) ?></h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Address') ?></th>
                <td><?= h($campus->address) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($campus->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Website') ?></th>
                <td><?= h($campus->website) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($campus->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('MapId') ?></th>
                <td><?= $this->Number->format($campus->mapId) ?></td>
            </tr>
        </table>
    </div>

</div>
