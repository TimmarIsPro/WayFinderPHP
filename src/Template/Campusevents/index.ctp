<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campusevent[]|\Cake\Collection\CollectionInterface $campusevents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Campusevent'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="campusevents index large-9 medium-8 columns content">
    <h3><?= __('Campusevents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eventId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campusId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($campusevents as $campusevent): ?>
            <tr>
                <td><?= $this->Number->format($campusevent->id) ?></td>
                <td><?= $this->Number->format($campusevent->eventId) ?></td>
                <td><?= $this->Number->format($campusevent->campusId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $campusevent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campusevent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campusevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campusevent->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
