<?php
/**
 * @var $this \App\Core\View
 * @var $model \App\Models\ContactForm
 */

use App\Core\Form\TextareaField;

$this->title = 'Contact';
?>
<h1>Contact Us</h1>

<?php $form = \App\Core\Form\Form::begin('', 'post'); ?>
    <?php echo $form->inputField($model, 'subject'); ?>
    <?php echo $form->inputField($model, 'email'); ?>
    <?php echo $form->textareaField($model, 'body'); ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php \App\Core\Form\Form::end(); ?>