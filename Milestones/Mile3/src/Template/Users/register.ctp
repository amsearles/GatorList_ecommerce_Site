<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
<div class="panel">

	<h2 class="text-center">Please Register Here</h2>
	
	<?= $this->Form->create($user); ?>
	<fieldset>
	<?php
	echo $this->Form->control('username');
	echo $this->Form->control('email');
	echo $this->Form->control('password');
	echo $this->Form->control('create_time', array('type'=>'hidden', 'disabled' => 'disabled'));
	?> 
	</fieldset>
        <div class="text-center"><?= $this->Form->button('Register'); ?></div>
	<?= $this->Form->end(); ?>
</div>
</div>
