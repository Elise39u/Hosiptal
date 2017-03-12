<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/patient_editlogic.php');

$pagetitle = 'Hosiptal';

if (isset($_POST['submit'])) {
	echo " Patient has been updated";
	$name = $_POST['name'];
	$species = $_POST['species'];
	$status = $_POST['status'];
    $update = $link->query("UPDATE patient SET name='$name', species='$species', status='$status' WHERE id=$id");
}

$smarty->assign('id', $id);
$smarty->assign('files', $patient);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/edit.html.tpl');