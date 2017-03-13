<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/client_deletelogic.php');

$pagetitle = 'Hosiptal';

if(isset($_POST['yes'])) {
   echo "Client succesful deleted";
   $delete = $link->query("DELETE FROM client WHERE id=$id");
} elseif (isset($_POST['no'])) {
	echo "Okay press go back";
}

$smarty->assign('id', $id);
$smarty->assign('client', $client);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/delete_client.html.tpl');