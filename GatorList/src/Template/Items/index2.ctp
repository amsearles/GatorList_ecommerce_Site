<?php
 
/**
  * @var \App\View\AppView $this
  */
?>

<style>
.floating-box {
    border-radius: 25px;
    float: left;
    width:300px;
    height: 300px;
    margin: 5px;
    padding: 0;
    border: 3px solid #006666;  
}
</style>

<div>
    
    
    <!-- this is where we generate the search bar -->
    <!--<div class="search">
        <h3><?= __('Items') ?></h3>
        <form action="" method="post">
            <label> Search </label>
            <input type ="text" name="submit"/>
            <label> Categories </label>
             <select name="category" id="category">
  <option value="1" >Electronics</option>
  <option value="2">Furniture</option>
  <option value="3">Books</option>
  <option value="4">Apparel</option>
</select> 
            <button type="submit">Submit</button>
        </form>
        
    </div> -->
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
    <!--this is where we set up the structure for our results -->
    <h3> <center style="color:red;"> Hot <?= __('Items') ?></center></h3>
        <?php $x = 1; ?>
        <?php foreach ($items as $item): ?>
        
            <center class ="floating-box">
                <ul><?= h($item->title) ?></ul>
               <ul>$<?= h($item->price) ?></ul> 
                <ul style="height:50%; width:50%"><?php echo $this->Html->image('items/photo/file/'.'square_'.$item->photo); ?></ul>
        
                
                <ul class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                    <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>-->
                </ul>
       
            </center>
            <?php if($x++ == 8) break; ?>
         
            <?php endforeach; ?>
            
        
 
    
    
</div>
