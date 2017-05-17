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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <select name="category_id" style="width: 100px;">
                    <option value="" >All</option>
                    <option value="1" >Electronics</option>
                    <option value="3" >Furniture</option>
                    <option value="2" >Books</option>
                    <option value="4" >Apparel</option>
                    
                    </select> </li>
             <li><input size="30" type ="text" name="search" /></li>
             <button type="submit">Search</button>
             
        </form>

<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $item->has('user') ? $this->Html->link($item->user->id, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
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
            <td><?= h($item->photo) ?></td>
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
