<?php
require_once ('inc/loadsmarty.php');
require_once ('inc/db.php');

$pagetitle = 'Hosiptal';

$smarty->assign('pagetitle', $pagetitle);
$smarty->display('tpl/index.html.tpl');