<?php
/* Smarty version 3.1.29, created on 2017-03-11 00:26:02
  from "C:\wamp64\www\Hospital\tpl\patient.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c3360a7cd364_60964656',
  'file_dependency' => 
  array (
    'aeae58a61de1efda8aa90a8c3412ab0f7c7c3417' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\patient.html.tpl',
      1 => 1489188277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c3360a7cd364_60964656 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1> Welcome to the patient section </h1>
<ul>
	<li><a href="index.php"> home </a></li>
	<li><a href="client.php"> Clients </a></li>
	<li><a href="species.php"> Species </a></li>
	<li><a href="create.php"> Create patient </a></li>
</ul>

<table>
	<tr class="head">
		<td>Name &nbsp;</td>
		<td>Species &nbsp;</td>
		<td>Stataus &nbsp;</td>
		<td></td>
		<td></td>
	</tr>

	<tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['patient']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_treaded_0_saved_item = isset($_smarty_tpl->tpl_vars['treaded']) ? $_smarty_tpl->tpl_vars['treaded'] : false;
$_smarty_tpl->tpl_vars['treaded'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['treaded']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['treaded']->value) {
$_smarty_tpl->tpl_vars['treaded']->_loop = true;
$__foreach_treaded_0_saved_local_item = $_smarty_tpl->tpl_vars['treaded'];
?>
		<td><?php echo $_smarty_tpl->tpl_vars['treaded']->value['name'];?>
 &nbsp; </td>
		<td><?php echo $_smarty_tpl->tpl_vars['treaded']->value['species'];?>
 &nbsp; </td>
		<td><?php echo $_smarty_tpl->tpl_vars['treaded']->value['status'];?>
 &nbsp; </td>
		<td><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['treaded']->value['id'];?>
"> Edit </a></td>
		<td><a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['treaded']->value['id'];?>
"> Delete</a></td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['treaded'] = $__foreach_treaded_0_saved_local_item;
}
if ($__foreach_treaded_0_saved_item) {
$_smarty_tpl->tpl_vars['treaded'] = $__foreach_treaded_0_saved_item;
}
?>
</table>

</body>
</html><?php }
}
