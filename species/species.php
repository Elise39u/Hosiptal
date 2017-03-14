<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/species_logic.php');

$pagetitle = 'Hosiptal';
$treaded = array();
foreach ($species as $specie) {
	array_push($treaded, $specie);
}

$smarty->assign('specie', $treaded);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/species.html.tpl');