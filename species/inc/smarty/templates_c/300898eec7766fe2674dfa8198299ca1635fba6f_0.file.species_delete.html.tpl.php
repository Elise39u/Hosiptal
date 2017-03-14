<?php
/* Smarty version 3.1.29, created on 2017-03-14 15:18:00
  from "C:\wamp64\www\Hospital\tpl\species_delete.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c7fb98cb33b4_12445495',
  'file_dependency' => 
  array (
    '300898eec7766fe2674dfa8198299ca1635fba6f' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\species_delete.html.tpl',
      1 => 1489501072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7fb98cb33b4_12445495 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Do you want to delete this pet </h1>
<ul>
	<li><a href="species.php"> Go back </a></li>
</ul>

<form action="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
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
	Sort: <br>
	<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
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
