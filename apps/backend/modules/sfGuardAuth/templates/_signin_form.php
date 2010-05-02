<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
	
	<?php if($form['username']->renderError()) { ?>
	<div class="notification information png_bg">
		<div>
			<?php echo $form['username']->renderError(); ?>
		</div>
	</div>
	<?php } ?>
	
	<p>
		<?php echo $form['username']->render(array(
		  'class'  => 'text-input',
		)); ?>
	</p>
	
	<p>
		<?php echo $form['password']->render(array(
		  'class'  => 'text-input',
		)); ?>
	</p>
	
	<p class="formSubmit alignRight">
	  <?php echo $form['remember']; ?><?php echo __('Remember me'); ?><br />
		<input type="submit" class="button" value="<?php echo __('Signin', null, 'sf_guard') ?>" />
	</p>

	<?php echo $form['_csrf_token']; ?>
 	
</form>