<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'TAFE WayFinder';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

	    <?= $this->Flash->render() ?>

	<div class="grid-x large-10 medium-5 cell" id="actions-sidebar">
		<ul class="side-nav">
		<?php if ($auth) { ?>
            <li>
            <?php echo $this->Html->link($auth['User']['username'], ['controller'=>'users', 'action'=>'view', $auth['User']['id']]); ?>
            </li>
            <li>
                <?php echo $this->Html->link('Log out', ['controller'=>'users', 'action'=>'logout']); ?>
            </li>
            <?php } else { ?>
            <li>
                <?php echo $this->Html->link('Log in', ['controller'=>'users', 'action'=>'login']); ?>
            </li>
        <?php } ?>

        <?php if ($auth) { ?>
            <li class="heading"<?= __('Admin') ?></li>
            <br>
            <li class="heading"><?php echo $this->Html->image('User.png', array('id' => 'icon'));?>Users</li>
            <li><?= $this->Html->link('Add New User', ['controller'=>'users', 'action'=>'add']); ?></li>
            <li><?= $this->Html->link('View Users', ['controller'=>'users']); ?> </li>


            <li class="heading"> <?php echo $this->Html->image('Events.png', array('id' => 'icon'));?><?= __(' Events') ?>
		    <li><?= $this->Html->link('Add New Event', ['controller'=>'events', 'action'=>'add']); ?></li>
        <li><?= $this->Html->link('View All Events', ['controller'=>'events']); ?></li>

        <li class="heading"> <?php echo $this->Html->image('campus.png', array('id' => 'icon'));?><?= __(' Campuses') ?>

        <li><?= $this->Html->link('View All Campuses', ['controller'=>'campuses']); ?> </li>

        <li class="heading"><?php echo $this->Html->image('building.png', array('id' => 'icon'));?><?= __(' Buildings') ?>
        <li><?= $this->Html->link('View All Buildings', ['controller'=>'buildings']); ?> </li>

        <li class="heading"><?php echo $this->Html->image('floor.png', array('id' => 'icon'));?><?= __(' Floors') ?>
        <li><?= $this->Html->link('View All Floors', ['controller'=>'floors']); ?> </li>

        <li class="heading"><?php echo $this->Html->image('room.png', array('id' => 'icon'));?><?= __(' Rooms') ?>
        <li><?= $this->Html->link('View All Rooms', ['controller'=>'rooms']); ?> </li>

    		<li class="heading"><?php echo $this->Html->image('map.png', array('id' => 'icon'));?><?= __('Room Maps') ?>
    		<li><?= $this->Html->link('View Maps', ['controller'=>'maps']); ?></li>

        </ul>
            <div class="grid-container large-10 medium-5 cell" id="body">
                <h3>Welcome to Admin Portal</h3>
                <div class="grid-x large-10 medium-1 cell" id="welcomebody">
                    
                </div>
    </div>
    <?php } ?>
</body>
</html>
