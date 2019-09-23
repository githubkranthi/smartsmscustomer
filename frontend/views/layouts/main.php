<?php
$strCurrentMethod = Yii::$app->controller->action->id;
$strCurrentMethod = strtolower($strCurrentMethod);
if ('login' == $strCurrentMethod) {
    echo $content;
} else {

    ?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php

    echo $this->render('metadata.php');
    echo $this->render('header_script.php');
    ?>

<!-- /theme JS files -->

</head>

<body>

<?php
    echo $this->render('header.php');
    ?>


	<!-- Page content -->
	<div class="page-content">

		<?php
    echo $this->render('left_side_menu.php');
    ?>
		<!-- Main content -->
		<div class="content-wrapper">

		       <?php
    echo $this->render('header_strip.php');
    ?>
        <div class="content">
        <?php
    echo $content;
    ?>
        </div>
        <?php echo $this->render('footer.php'); ?>
        
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	
	
	
	<?php echo $this->render('footer_script.php'); ?>

</body>
</html>
<?php
}
?>