<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/create_client_logic.php');

$pagetitle = 'Hosiptal';

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$adress = $_POST['adress'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$pet_name = $_POST['pet_name'];

	$query = $link->query("INSERT INTO client(name, adress, age, email, pet_name) VALUES('$name', '$adress', '$age', '$email', '$pet_name')");
}

$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/create_client.html.tpl');