<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Edit Item') ?></legend>
        <?php
        echo $this->Form->hidden('user_id', array('value'=>$user_id)) ;
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
  echo $this->Form->control('photo', ['type' => 'file']);
             echo $this->Form->control('photo_dir', array('type' => 'hidden'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Post')) ?>
    <?= $this->Form->end() ?>
</div>
