<?php
/* Smarty version 3.1.29, created on 2017-03-13 09:49:21
  from "C:\wamp64\www\Hospital\tpl\index.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c65d115c8ea4_92649405',
  'file_dependency' => 
  array (
    '6e1f27dc7ad582de6c153ee8c97ec3bcacc6870b' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\index.html.tpl',
      1 => 1489394843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c65d115c8ea4_92649405 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1> Welcome choose you`re option</h1>
<ul>
	<li><a href="patient/patient.php"> Patiënt </a></li>
	<li><a href="client/client.php"> Clients </a></li>
	<li><a href="species.php"> Species </li>
</ul>

</body>
</html><?php }
}
