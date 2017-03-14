<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/species_deletelogic.php');

$pagetitle = 'Hosiptal';

if(isset($_POST['yes'])) {
   echo "Specie succesful deleted";
   $delete = $link->query("DELETE FROM species WHERE id=$id");
} elseif (isset($_POST['no'])) {
	echo "Okay press go back";
}

$smarty->assign('id', $id);
$smarty->assign('specie', $specie);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/species_delete.html.tpl');