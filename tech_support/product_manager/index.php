<?php
require('../model/database.php');
//require('../model/product_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {?>
	<?php
		global $db;
		$query = 'SELECT * FROM products ORDER BY name';
		$products = $db->query($query);?>

	<?php include('../view/header.php'); ?>
	<?php include('../product_manager/product.php');?>
<?php } ?>
<?php include('../view/footer.php'); ?>