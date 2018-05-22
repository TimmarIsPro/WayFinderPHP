<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campusevent $campusevent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Campusevent'), ['action' => 'edit', $campusevent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Campusevent'), ['action' => 'delete', $campusevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campusevent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Campusevents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campusevent'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="campusevents view large-9 medium-8 columns content">
    <h3><?= h($campusevent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($campusevent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EventId') ?></th>
            <td><?= $this->Number->format($campusevent->eventId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CampusId') ?></th>
            <td><?= $this->Number->format($campusevent->campusId) ?></td>
        </tr>
    </table>
</div>
