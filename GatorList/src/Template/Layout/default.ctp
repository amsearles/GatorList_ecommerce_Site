<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';

//$session = $this->request->session();
//$user_data = $session->read('Auth.User');
        
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

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
   <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 rows">
            <li class="name">
                <h1>
                <a href="http://sfsuse.com/~jscandly/">
                    <img src="http://sfsuse.com/~jscandly/img/homepageLogo.png" class="photos"  >
                </a>
                </h1>
            </li>
            <!--<li class="name">
               <h1><a href=""><?= $this->fetch('title') ?></a></h1> 
            </li>-->
            
           
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                
                <li><a href="http://sfsuse.com/~jscandly/items">Browse</a></li>
                <li><a href="http://sfsuse.com/~jscandly/items/add">Sell</a></li>
                <li><a href="http://sfsuse.com/~jscandly/about.php">About Us</a> </li>  
                
                <li>
                <form action="" method="post">
                    <select name="category" style="width: 100px;">
                    <option <?php foreach ($items as $item): ?> <?php $cat = $item->category_id ?> <?php if($cat == 4 ) echo 'selected' ; ?> <?php endforeach; ?> value="5" >All</option>
                    <option <?php foreach ($items as $item): ?> <?php $cat = $item->category_id ?> <?php if($cat == 1 ) echo 'selected' ; ?><?php endforeach; ?> value="1" >Electronics</option>
                    <option <?php foreach ($items as $item): ?> <?php $cat = $item->category_id ?> <?php if($cat == 2 ) echo 'selected' ; ?><?php endforeach; ?> value="2" >Furniture</option>
                    <option <?php foreach ($items as $item): ?> <?php $cat = $item->category_id ?> <?php if($cat == 3 ) echo 'selected' ; ?><?php endforeach; ?> value="3" >Books</option>
                    <option <?php foreach ($items as $item): ?> <?php $cat = $item->category_id ?> <?php if($cat == 4 ) echo 'selected' ; ?> <?php endforeach; ?> value="4" >Apparel</option>
                    
                    </select> </li>
             <li><input size="30" type ="text" name="submit"/></li>
             <button type="submit">Search</button>
        </form>
           
             <!-- 
           <form action="" method="post">
               <select name="category">
                   <?php foreach ($categories as $category): ?>
                   <option> <?= $category->category ?> </option>
                   <?php endforeach; ?>
                   <input class="button" type="submit" value="Submit"/>
               </select>
           </form>
           -->
           
           
            </ul>
            
            <ul class="right">
               	<?php if($loggedIn) : ?>
                
                <li><?= $this->Html->link('Dashboard',['controller' => 'users', 'action' => 'dashboard']); ?></li>
                <li> <a href = "" >Welcome, <?php $session = $this->request->session();
                                $user_data = $session->read('Auth.User');
                                    if(!empty($user_data)){
                                       print_r($user_data['username']);
                                       } ?>!</a></li>
                
		 <li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?></li>
                    <?php else : ?>
                        <li><?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login']); ?> </li>     
                        <li><?= $this->Html->link('Register', ['controller' => 'users', 'action' => 'register']); ?></li>
                <?php endif; ?>
		 
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    
    
</body>
</html>
