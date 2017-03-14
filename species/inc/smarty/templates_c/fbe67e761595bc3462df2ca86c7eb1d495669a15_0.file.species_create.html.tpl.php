<?php
/* Smarty version 3.1.29, created on 2017-03-14 15:02:16
  from "C:\wamp64\www\Hospital\tpl\species_create.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c7f7e8a0d6b4_42634709',
  'file_dependency' => 
  array (
    'fbe67e761595bc3462df2ca86c7eb1d495669a15' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\species_create.html.tpl',
      1 => 1489500135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7f7e8a0d6b4_42634709 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Welcome to the patient section </h1>
<ul>
	<li><a href="species.php"> go back </a></li>
</ul>

<div id="createForm">
<form action="create.php" method="post">
	Sort: <br>
	<input type="text" name="sort"> <br>
	<input type="submit" name="submit" value="Create patient">
</form>
</div>

</body>
</html><?php }
}
