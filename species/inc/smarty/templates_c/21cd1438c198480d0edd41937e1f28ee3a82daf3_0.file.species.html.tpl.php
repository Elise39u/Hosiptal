<?php
/* Smarty version 3.1.29, created on 2017-03-14 13:49:08
  from "C:\wamp64\www\Hospital\tpl\species.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c7e6c48c13f0_35514426',
  'file_dependency' => 
  array (
    '21cd1438c198480d0edd41937e1f28ee3a82daf3' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\species.html.tpl',
      1 => 1489495745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7e6c48c13f0_35514426 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Welcome to the species section </h1>
<ul>
	<li><a href="../index.php"> home </a></li>
	<li><a href="create.php"> Add species </a></li>
</ul>

<table>
	<tr class="head">
		<td>Sort &nbsp;</td>
		<td></td>
		<td></td>
	</tr>

	<tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['specie']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_info_0_saved_item = isset($_smarty_tpl->tpl_vars['info']) ? $_smarty_tpl->tpl_vars['info'] : false;
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_0_saved_local_item = $_smarty_tpl->tpl_vars['info'];
?>
		<td><?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
 &nbsp; </td>
		<td><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"> Edit </a></td>
		<td><a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"> Delete</a></td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_local_item;
}
if ($__foreach_info_0_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_item;
}
?>
</table>

</body>
</html><?php }
}
