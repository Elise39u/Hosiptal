<?php
/* Smarty version 3.1.29, created on 2017-03-13 11:04:17
  from "C:\wamp64\www\Hospital\tpl\client.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c66ea1076f36_24124510',
  'file_dependency' => 
  array (
    'ff4da5c49c06d2aa2b0b3d0abf92d6c05a739746' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\client.html.tpl',
      1 => 1489399453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c66ea1076f36_24124510 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Welcome to the client side </h1>
<ul>
	<li><a href="../index.php"> home </a></li>
	<li><a href="create.php"> Create client </a></li>
</ul>

<table>
	<tr class="head">
		<td>Name&nbsp;</td>
		<td>Adress&nbsp;</td>
		<td>Age&nbsp;</td>
		<td>Email&nbsp;</td>
		<td>Pet-Name&nbsp;</td>
		<td>Cheked-in&nbsp;</td>
		<td>Cheked-out&nbsp;</td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<?php
$_from = $_smarty_tpl->tpl_vars['clients']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_client_0_saved_item = isset($_smarty_tpl->tpl_vars['client']) ? $_smarty_tpl->tpl_vars['client'] : false;
$_smarty_tpl->tpl_vars['client'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['client']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
$__foreach_client_0_saved_local_item = $_smarty_tpl->tpl_vars['client'];
?>
		<td><?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>
&nbsp;</td> 
		<td><?php echo $_smarty_tpl->tpl_vars['client']->value['adress'];?>
&nbsp;</td>
		<td><?php echo $_smarty_tpl->tpl_vars['client']->value['age'];?>
&nbsp;</td>
		<td><?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
&nbsp;</td>
		<td><?php echo $_smarty_tpl->tpl_vars['client']->value['pet_name'];?>
&nbsp;</td>
		<td><?php echo $_smarty_tpl->tpl_vars['client']->value['cheked_in'];?>
&nbsp;</td>
		<td><?php echo $_smarty_tpl->tpl_vars['client']->value['cheked_out'];?>
&nbsp;</td>
		<td><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">Edit</a></td>
		<td><a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">Delete</a></td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['client'] = $__foreach_client_0_saved_local_item;
}
if ($__foreach_client_0_saved_item) {
$_smarty_tpl->tpl_vars['client'] = $__foreach_client_0_saved_item;
}
?>
</table>
</body>
</html><?php }
}
