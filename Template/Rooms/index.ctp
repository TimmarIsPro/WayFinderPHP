<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room[]|\Cake\Collection\CollectionInterface $rooms
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?></li>
    </ul>
    <div class="grid-container rooms index large-9 medium-8 cell content" id="body">
        <h3><?= __('Rooms') ?></h3>
        <table cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('floorId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mapId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gridPointA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gridPointB') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gridPointC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gridPointD') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($rooms as $room): ?>
                <tr>
                    <td><?= $this->Number->format($room->id) ?></td>
                    <td><?= h($room->name) ?></td>
                    <td><?= $this->Number->format($room->floorId) ?></td>
                    <td><?= $this->Number->format($room->mapId) ?></td>
                    <td><?= $this->Number->format($room->gridPointA) ?></td>
                    <td><?= $this->Number->format($room->gridPointB) ?></td>
                    <td><?= $this->Number->format($room->gridPointC) ?></td>
                    <td><?= $this->Number->format($room->gridPointD) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $room->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $room->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator text-center">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('First')) ?>
                <?= $this->Paginator->prev('< ' . __('Previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Next') . ' >>') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
        </div>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>

    </div>

</div>
