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
            echo $this->Form->control('user_id', ['options' => $users] );
            echo $this->Form->control('sender_id');
            //echo $senders;
            echo $this->Form->control('message');
          
            ?>
    </fieldset>
    <?= $this->Form->button(__('Send Message')) ?>
    <?= $this->Form->end() ?>
</div>