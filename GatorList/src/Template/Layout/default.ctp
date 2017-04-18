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
                <a href="http://sfsuse.com/~sp17g11/">
                    <img src="./img/homepageLogo.jpg" class="photos"  >
                </a>
                </h1>
            </li>
            
           
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                <li><a href="http://sfsuse.com/~sp17g11/items">Browse</a></li>
                <li><a href="http://sfsuse.com/~sp17g11/items/add">Sell</a></li>               
                 <!-- catagories -->
                 <li>
             <select name="category">
                 <option value="5"> Default </option>
                 <option value="4">Apparel</option>
                 <option value="3">Books</option>
                <option value="1">Electronics</option>
                <option value="2">Furniture</option>     
             </select>
                </li>
                <li>
                <div class="search">    
            <form action="" method="post">
            
                <input type ="text" name="submit"/>
                
            </form>
                    
            </li>
            <button>Search  </button>
            </ul>
            <ul class ="right">
                <li><a target="_blank" href="http://sfsuse.com/~sp17g11/login.php">Login</a></li>
                <li><a target="_blank" href="http://sfsuse.com/~sp17g11/register.php">Register</a></li>
                <li><a href="http://sfsuse.com/~sp17g11/about.php">About Us</a> </li> 
                 <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>    
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <ul class="left">
            <li> Copyright </li>
            <li></li>
        </ul>
    </footer>
</body>
</html>
