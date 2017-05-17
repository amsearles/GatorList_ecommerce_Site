<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($message) ?>
    <fieldset>
        <legend><?= __('Message') ?></legend>
        <?php
            $usersid = $item->user->id;
            $productid = $item->id;
            echo $item->user->username;
            echo "<br>";
            echo 'Item ID: ', $item->title;
            echo $this->Form->hidden('item_id', ['value' => $productid]);
            echo $this->Form->hidden('user_id', ['value' => $usersid] );
            echo $this->Form->hidden('sender_id', array('value'=>$user_id)) ;
            //echo $this->Form->control('sender_id');
            //echo $senders;
            echo $this->Form->control('message');
          
            ?>
    </fieldset>
    <?= $this->Form->button(__('Send Message')) ?>
    <?= $this->Form->end() ?>
</div>