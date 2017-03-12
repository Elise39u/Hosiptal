<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/patient_logic.php');

$pagetitle = 'Hosiptal';
$treaded = array();
foreach ($patients as $patient) {
	array_push($treaded, $patient);
}

$smarty->assign('patient', $treaded);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/patient.html.tpl');