<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/patient_logic.php');

$pagetitle = 'Hosiptal';
$treaded = array();
foreach ($patient as $patients) {
	array_push($treaded, $patients);
}

$smarty->assign('patients', $treaded);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/patient.html.tpl');