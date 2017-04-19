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
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('url');
            echo $this->Form->control('category_id', ['options' => $categorys]);           
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Post')) ?>
    <?= $this->Form->end() ?>
</div>