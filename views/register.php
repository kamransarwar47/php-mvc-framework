<?php
/**
 * @var $this \App\Core\View
 */
$this->title = 'Register';
?>
<h1>Register</h1>

<?php
$form = \App\Core\Form\Form::begin('', 'post'); ?>
<div class="row">
    <div class="col">
        <?php echo $form->inputField($model, 'firstname'); ?>
    </div>
    <div class="col">
        <?php echo $form->inputField($model, 'lastname'); ?>
    </div>
</div>
<?php echo $form->inputField($model, 'email'); ?>
<?php echo $form->inputField($model, 'password')->passwordField(); ?>
<?php echo $form->inputField($model, 'confirmpassword')->passwordField(); ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo \App\Core\Form\Form::end(); ?>