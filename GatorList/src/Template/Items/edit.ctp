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
            //echo $this->Form->hidden('user_id', array('value'=>$authUser['id']));
            echo $this->Form->hidden('user_id', array('value'=>$user_id)) ;
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('photo');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Post')) ?>
    <?= $this->Form->end() ?>
</div>
