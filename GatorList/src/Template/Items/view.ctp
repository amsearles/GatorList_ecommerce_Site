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
$name = "";
$nameErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
}
/**
  * @var \App\View\AppView $this
  */
   /*    
 echo $this->Form->create();   
 // You'll need to populate $authors in the template from your controller
    echo $this->Form->input('id');
    // Match the search param in your table configuration
       echo $this->Form->input('q');
       
   $items = $this->Form->control('title');
    echo $this->Form->button('Filter',['type' => 'submit']);
  
 
 echo $this->Form->input('q');
  echo $this->Form->button('Filter', ['type' => 'submit']);
  echo $this->Html->link('Reset', ['action' => '?q=']);
    echo $this->Form->end();
    * 
    */
?>


<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="items view large-9 medium-8 columns content">
    
    <?php

//echo


/**
  * @var \App\View\AppView $this
  */

    
 echo $this->Form->create('submit', array('url' => '/Items/'));

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
    echo $this->Html->link('Reset', ['action' => 'index']), "                ";
    echo ' &nbsp; ';
    echo $this->Html->link(__('Send Message'), ['controller' => 'users', 'action' => 'send', $item->id]);
    
    
    echo $this->Form->end();
 
    

?>
    <h3><?= h($item->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $item->has('user') ? $this->Html->link($item->user->username, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($item->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($item->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?php echo $this->Html->image('items/photo/file/'.$item->photo); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($item->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($item->modified) ?></td>
        </tr>
    </table>
</div>
