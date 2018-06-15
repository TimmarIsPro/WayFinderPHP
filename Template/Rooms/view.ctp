<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
    </ul>
    <div class="grid-container rooms view large-9 medium-8 cell content" id="body">
        <h3><?= h($room->name) ?></h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($room->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($room->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('FloorId') ?></th>
                <td><?= $this->Number->format($room->floorId) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('MapId') ?></th>
                <td><?= $this->Number->format($room->mapId) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('GridPointA') ?></th>
                <td><?= $this->Number->format($room->gridPointA) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('GridPointB') ?></th>
                <td><?= $this->Number->format($room->gridPointB) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('GridPointC') ?></th>
                <td><?= $this->Number->format($room->gridPointC) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('GridPointD') ?></th>
                <td><?= $this->Number->format($room->gridPointD) ?></td>
            </tr>
        </table>
    </div>

</div>
