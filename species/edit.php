<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/species_editlogic.php');

$pagetitle = 'Hosiptal';

if (isset($_POST['submit'])) {
	echo " Specie has been updated";
	$sort = $_POST['sort'];
    $update = $link->query("UPDATE species SET sort='$sort' WHERE id=$id");
}

$smarty->assign('id', $id);
$smarty->assign('info', $info);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/species_edit.html.tpl');