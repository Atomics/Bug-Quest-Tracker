<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_register') ?>" method="post">
  
  <p>
  	<?php echo $form['first_name']->render(array(
  	  'class'  => 'text-input',
  	  'value'  => __('First Name'),
  	)); ?>
  </p>
  
  <p>
  	<?php echo $form['last_name']->render(array(
  	  'class'  => 'text-input',
  	  'value'  => __('Last name'),
  	)); ?>
  </p>
  
  <p>
  	<?php echo $form['email_address']->render(array(
  	  'class'  => 'text-input',
  	  'value'  => __('Email address'),
  	)); ?>
  </p>
  
  <p>
  	<?php echo $form['username']->render(array(
  	  'class'  => 'text-input',
  	  'value'  => __('Username'),
  	)); ?>
  </p>
  
  <p>
  	<?php echo $form['password']->render(array(
  	  'class'  => 'text-input',
  	  'value'  => __('Password'),
  	)); ?>
  </p>
  
  <p>
  	<?php echo $form['password_again']->render(array(
  	  'class'  => 'text-input',
  	  'value'  => __('Password again'),
  	)); ?>
  </p>
  
  <?php echo $form['_csrf_token']; ?>
  
  <p class="formSubmit alignRight">
    <input type="submit" class="button" name="register" value="<?php echo __('Register', null, 'sf_guard') ?>" />
  </p>
  
</form>