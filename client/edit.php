<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/client_editlogic.php');

$pagetitle = 'Hosiptal';

if (isset($_POST['submit'])) {
	echo " Client has been updated";
	$name = $_POST['name'];
	$adress = $_POST['adress'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$pet_name = $_POST['pet_name'];
    $update = $link->query("UPDATE client SET name='$name', adress='$adress', age='$age', email='$email', pet_name='$pet_name' WHERE id=$id");
}

$smarty->assign('id', $id);
$smarty->assign('files', $client);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/client_edit.html.tpl');