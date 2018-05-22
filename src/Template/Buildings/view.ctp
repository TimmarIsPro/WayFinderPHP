<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Building $building
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Building'), ['action' => 'edit', $building->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Building'), ['action' => 'delete', $building->id], ['confirm' => __('Are you sure you want to delete # {0}?', $building->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Buildings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Building'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="buildings view large-9 medium-8 columns content">
    <h3><?= h($building->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($building->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($building->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($building->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CampusId') ?></th>
            <td><?= $this->Number->format($building->campusId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GridPointA') ?></th>
            <td><?= $this->Number->format($building->gridPointA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GridPointB') ?></th>
            <td><?= $this->Number->format($building->gridPointB) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GridPointC') ?></th>
            <td><?= $this->Number->format($building->gridPointC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GridPointD') ?></th>
            <td><?= $this->Number->format($building->gridPointD) ?></td>
        </tr>
    </table>
</div>
