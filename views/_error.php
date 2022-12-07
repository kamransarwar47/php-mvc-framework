<?php
/**
 * @var $exception \Exception
 * @var $this \App\Core\View
 */
$this->title = $exception->getCode();

?>
<h3><?php echo $exception->getCode(); ?> - <?php echo $exception->getMessage(); ?></h3>