<?php
/**
 * @var $this \App\Core\View
 */
$this->title = 'Login';
?>
<h1>Login</h1>

<?php
$form = \App\Core\Form\Form::begin('', 'post'); ?>
<?php
echo $form->inputField($model, 'email'); ?>
<?php echo $form->inputField($model, 'password')->passwordField(); ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo \App\Core\Form\Form::end(); ?>