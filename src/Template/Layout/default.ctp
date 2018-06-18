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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        TAFE WayFinder Admin Portal:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('app.css') ?>
    <?= $this->Html->css('foundation.css') ?>
    <?= $this->Html->css('stylesheet.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<!-- Header or something here -->


<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area large-3 medium-4 columns">
        <li class="name">
            <!-- Below this should be a direct link back to the homepage? -->

            <?php if ($auth) { ?>
                <h1>
                    <a href="/pages/index">
                        <?php echo $this->Html->image('header.jpg', array('class' => 'Logo'));?>
                    </a>
                </h1>

            <?php } else { ?>
                <h1><a>WayFinder</a></h1>
            <?php } ?>

        </li>
    </ul>
    <div class="top-bar-section">
        <ul class="right">
            <!-- Topbar information? -->
        </ul>
    </div>
</nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
      <div class="ecommerce-footer">
 <div class="ecommerce-footer-links row">
   <div class="small-12 medium-12 large-6 columns">
     <div class="row ecommerce-footer-links-block">
     </div>
   </div>
 </div>
 <div class="ecommerce-footer-bottom-bar row">
   <div class="small-12 medium-5 columns">
     <div class="bottom-copyright">
       <span>©2018 Company Name. All rights reserved.</span>
     </div>
   </div>
 </div>
</div>
    </footer>


</body>
</html>
