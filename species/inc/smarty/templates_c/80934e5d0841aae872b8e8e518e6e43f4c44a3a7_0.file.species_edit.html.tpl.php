<?php
/* Smarty version 3.1.29, created on 2017-03-14 15:08:31
  from "C:\wamp64\www\Hospital\tpl\species_edit.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c7f95f8511c4_83216843',
  'file_dependency' => 
  array (
    '80934e5d0841aae872b8e8e518e6e43f4c44a3a7' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\species_edit.html.tpl',
      1 => 1489500491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7f95f8511c4_83216843 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Welcome to the edit section for species </h1>
<ul>
	<li><a href="species.php"> Go back </a></li>
</ul>
<form action="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
<?php
$_from = $_smarty_tpl->tpl_vars['info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_specie_0_saved_item = isset($_smarty_tpl->tpl_vars['specie']) ? $_smarty_tpl->tpl_vars['specie'] : false;
$_smarty_tpl->tpl_vars['specie'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['specie']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['specie']->value) {
$_smarty_tpl->tpl_vars['specie']->_loop = true;
$__foreach_specie_0_saved_local_item = $_smarty_tpl->tpl_vars['specie'];
?>
	Sort: <br>
	<input type="text" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['specie']->value['sort'];?>
"> <br>
	<input type="submit" name="submit" value="Save">
<?php
$_smarty_tpl->tpl_vars['specie'] = $__foreach_specie_0_saved_local_item;
}
if ($__foreach_specie_0_saved_item) {
$_smarty_tpl->tpl_vars['specie'] = $__foreach_specie_0_saved_item;
}
?>
</form>
</body>
</html><?php }
}
