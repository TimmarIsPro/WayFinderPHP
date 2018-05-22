<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campus[]|\Cake\Collection\CollectionInterface $campuses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Campus'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="campuses index large-9 medium-8 columns content">
    <h3><?= __('Campuses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mapId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($campuses as $campus): ?>
            <tr>
                <td><?= $this->Number->format($campus->id) ?></td>
                <td><?= h($campus->address) ?></td>
                <td><?= h($campus->name) ?></td>
                <td><?= h($campus->website) ?></td>
                <td><?= $this->Number->format($campus->mapId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $campus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campus->id)]) ?>
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
