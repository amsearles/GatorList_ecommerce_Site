<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
<div class="panel">
    
	<h2 class="text-center">Login</h2>
	
	<?= $this->Form->create(); ?>
	<fieldset>
	<?php
	echo $this->Form->control('email');
	echo $this->Form->control('password');
	?>
        <a href="">Forgot Password?</a>
	</fieldset>
        <div class="text-center"> <?= $this->Form->button('Login'); ?></div>
	<?= $this->Form->end(); ?>
</div>
</div>
