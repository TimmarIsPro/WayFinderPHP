<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campus $campus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Campus'), ['action' => 'edit', $campus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Campus'), ['action' => 'delete', $campus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Campuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campus'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="campuses view large-9 medium-8 columns content">
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

<div class="related">
    <?php echo $this->Html->link(__('New Map'), ['controller' => 'Maps', 'action' => 'add', $map->id],  ['class' => 'right']) ?>
    <h3><?php echo __('Maps') ?></h3>
    <?php if (!empty($campus->maps)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th scope="col"><?php echo __('Filename') ?>
            <th scope="col"><?php echo __('Description') ?>
            <th scope="col"> class="actions"><?php echo __('Actions') ?>
        </tr>
        <?php foreach($campus->maps as $maps): ?>
        <tr>
            <td><?php echo $this->Html->link($maps->name, '/files/' . $maps->filename) ?>
            <td><?php echo h($maps->description) ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), '/files/' . $maps->filename) ?> |
                <?php echo $this->Html->link(__('Edit'), ['controller' => 'Maps', 'action' => 'edit', $maps->id]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </php endif; ?>
</div>
