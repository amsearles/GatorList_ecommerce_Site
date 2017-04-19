<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Sell Item') ?></legend>
        <?php
            echo $this->Form->control('title', array('style'=> 'width:300px; height:35px'));
            echo $this->Form->control('url', array('style'=> 'width:300px; height:35px'));
            echo $this->Form->control('category_id', array('options' => $categorys, 'style'=> 'width:300px; height:35px'));           
            echo $this->Form->control('price', array('style'=> 'width:300px; height:35px'));
            echo $this->Form->control('description', array('style'=> 'width:300px; height:100px'));

        ?>
    </fieldset>
    
    <?= $this->Form->button(__('Post')) ?>
    <?= $this->Form->end() ?>
   <?php 
     echo $this->Html->link('CANCEL', '/items', array('class' => 'button')); 
   ?>
</div>
