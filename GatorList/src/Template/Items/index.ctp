<?php

/**
  * @var \App\View\AppView $this
  */
?>

<div class="items index large-9 medium-8 columns content">
    
    
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
    <h3><?= __('Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
               
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <!--this is where we loop through our index() that stores $items. notice photos are stored in file-dir but path in MySQL -->
            <?php foreach ($items as $item): ?>
            <tr>
                <!--<td><?= $this->Number->format($item->id) ?></td>-->
                <td><?= h($item->title) ?></td>
                <td><?= h($item->description) ?></td>
               
                <td><?= $item->photo ?><?php echo $this->Html->image('items/photo/file/'.'square_'.$item->photo); ?></a></td>
               
                <td><?= h($item->category_id) ?></td> 
                <td>$<?= h($item->price) ?></td> 
                <td class="actions">
                   <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                    <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>-->
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
