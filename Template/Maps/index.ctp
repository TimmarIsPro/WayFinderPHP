<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Map[]|\Cake\Collection\CollectionInterface $maps
 */
?>
<div class="grid-x large-3 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Map'), ['action' => 'add']) ?></li>
    </ul>
    <div class="grid-container maps index large-9 medium-8 cell content" id="body">
        <h3><?= __('Maps') ?></h3>
        <table cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($maps as $map): ?>
                <tr>
                    <td><?= $this->Number->format($map->id) ?></td>
                    <td><?= h($map->created) ?></td>
                    <td><?= h($map->modified) ?></td>
                    <td><?= h($map->filename) ?></td>
                    <td><?= h($map->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $map->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $map->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $map->id], ['confirm' => __('Are you sure you want to delete # {0}?', $map->id)]) ?>
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

