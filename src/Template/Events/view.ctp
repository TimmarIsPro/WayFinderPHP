<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
    </ul>
    <div class="grid-container events view large-9 medium-8 cell content" id="body">
        <h3><?= h($event->title) ?></h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Title') ?></th>
                <td><?= h($event->title) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Location') ?></th>
                <td><?= h($event->location) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Description') ?></th>
                <td><?= h($event->description) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Submitted') ?></th>
                <td><?= h($event->submitted) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('ContactEmail') ?></th>
                <td><?= h($event->contactEmail) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($event->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('SubmittedId') ?></th>
                <td><?= $this->Number->format($event->submittedId) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('DateStart') ?></th>
                <td><?= h($event->dateStart) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('DateEnd') ?></th>
                <td><?= h($event->dateEnd) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($event->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($event->modified) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Approved') ?></th>
                <td><?= $event->approved ? __('Yes') : __('No'); ?></td>
            </tr>
        </table>
    </div>
</div>
