<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/client_logic.php');

$pagetitle = 'Hosiptal';

$smarty->assign('clients', $clients);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/client.html.tpl');