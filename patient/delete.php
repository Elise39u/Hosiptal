<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/patient_deletelogic.php');

$pagetitle = 'Hosiptal';

if(isset($_POST['yes'])) {
   echo "Animal succesful deleted";
   $delete = $link->query("DELETE FROM patient WHERE id=$id");
} elseif (isset($_POST['no'])) {
	echo "Okay press go back";
}

$smarty->assign('id', $id);
$smarty->assign('patient', $patient);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/delete.html.tpl');