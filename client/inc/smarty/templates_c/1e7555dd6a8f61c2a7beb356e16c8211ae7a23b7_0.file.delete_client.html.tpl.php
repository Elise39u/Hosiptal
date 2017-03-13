<?php
/* Smarty version 3.1.29, created on 2017-03-14 00:18:31
  from "C:\wamp64\www\Hospital\tpl\delete_client.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c728c7616103_17037742',
  'file_dependency' => 
  array (
    '1e7555dd6a8f61c2a7beb356e16c8211ae7a23b7' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\delete_client.html.tpl',
      1 => 1489447092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c728c7616103_17037742 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Do you want to delete this client </h1>
<ul>
	<li><a href="client.php"> Go back </a></li>
</ul>

<form action="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
<?php
$_from = $_smarty_tpl->tpl_vars['client']->value;
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
	Name: <br>
	<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
" readonly> <br>
	Adress: <br>
	<input type="text" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['adress'];?>
" readonly> <br>
	Age: <br>
	<input type="text" name="age" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['age'];?>
" readonly> <br>
	E-mail: <br>
	<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
" readonly> <br>
	pet_name: <br>
	<input type="text" name="pet_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pet_name'];?>
" readonly> <br>
	Cheked-in: <br>
	<input type="text" name="Cheked-in" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cheked_in'];?>
" readonly> <br>
	<input type="submit" name="yes" value="yes"><br>
	<input type="submit" name="no" value="no">
<?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_local_item;
}
if ($__foreach_info_0_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_item;
}
?>
</form>
</body>
</html><?php }
}
