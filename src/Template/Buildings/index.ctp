<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Building[]|\Cake\Collection\CollectionInterface $buildings
 */
?>
<div class="grid-x large-10 medium-4 cell" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Building'), ['action' => 'add']) ?></li>
    </ul>
    <div class="grid-container buildings index large-9 medium-8 cell content" id="body">
        <h3><?= __('Buildings') ?></h3>
        <table cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campusId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gridPointA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gridPointB') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gridPointC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gridPointD') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($buildings as $building): ?>
                <tr>
                    <td><?= $this->Number->format($building->id) ?></td>
                    <td><?= $this->Number->format($building->campusId) ?></td>
                    <td><?= h($building->address) ?></td>
                    <td><?= h($building->name) ?></td>
                    <td><?= $this->Number->format($building->gridPointA) ?></td>
                    <td><?= $this->Number->format($building->gridPointB) ?></td>
                    <td><?= $this->Number->format($building->gridPointC) ?></td>
                    <td><?= $this->Number->format($building->gridPointD) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $building->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $building->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $building->id], ['confirm' => __('Are you sure you want to delete # {0}?', $building->id)]) ?>
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
