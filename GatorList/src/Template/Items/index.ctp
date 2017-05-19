<style>
   .input{
       display:inline-block;
   height:auto;
       position:relative;
       box-sizing:border-box;
      
   }
   
   #search{
       width: 100%;
   }
   
   

</style>
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
    
    <?php
$searchErr ="";
$search ="";


  if (empty($_POST["search"])) {
    $searchErr = "Name is required";
  } else {
    $search = test_input($_POST["search"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$search)) {
      $searchErr = "Only letters and white space allowed"; 
    }
  }
 


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   
}

  function email($check){
        $value = array_values($check);
        $value = $value[0];
        return !preg_match("/^[a-zA-Z ]*$/",$value);
    }
/**
  * @var \App\View\AppView $this
  */

 
 echo $this->Form->create();
    // You'll need to populate $authors in the template from your controller
   
    // Match the search param in your table configuration
  //echo $this->Form->input('category_id',);
 echo $this->Form->create();

  echo $this->Form->control('category_id', array('empty'=>'All',
      'options' => $categorys,
      'style'=> 'width:px;'));
   
   
  //trying to set rules for the input search here
  //like search filtering and making input alphaNumeric
  echo $this->Form->input('search',array(
      'div' => array(
        'id' => 'search',
        'title' => 'Div Title',
        'style' => 'display:block'
    ),
      'empty' => 'Search',
       'style'=> 'width:740px',
        'maxLength'=>'20',
      'name' => 'search',
      'type' => 'text',
      'search' => 'alphaNumeric',
      'options' => 'email'
      
    ));
  
 
 
   
    echo $this->Form->button('Search', ['type' => 'submit']);
    echo $this->Html->link('Reset', ['action' => 'index']);
    
    
    echo $this->Form->end();
 
?>
    
    <h3><?= __('Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
               
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
              <!--  <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>-->
                 <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            
            <!--this is where we loop through our index() that stores $items. notice photos are stored in file-dir but path in MySQL -->
            <?php foreach ($items as $item): ?>
            <tr>
                
                <td><?= h($item->title) ?></td>
                <td><?= h($item->description) ?></td>
                <td><!--<?= $item->photo ?> --><?= $item->photo ?><?php echo $this->Html->image('items/photo/file/'.'square_'.$item->photo); ?></a></td>
               
                
                <!-- <td><?= $item->photo ?><?php echo $this->Html->image('items/photo/file/'.'square_'.$item->photo); ?></a></td> -->
               
              <!--  <td><?= h($item->category_id) ?></td> -->
                <td>$ <?= h($item->price) ?></td> 
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                    <?= $this->Html->link(__('Send Message'), ['controller' => 'users', 'action' => 'send', $item->id]) ?>
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