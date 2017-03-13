<?php
/* Smarty version 3.1.29, created on 2017-03-13 16:47:35
  from "C:\wamp64\www\Hospital\tpl\client_edit.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c6bf17baa762_10924817',
  'file_dependency' => 
  array (
    '2700360db5bbd9561d90d691462cee4495d53dbb' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\client_edit.html.tpl',
      1 => 1489420051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6bf17baa762_10924817 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Welcome to the edit section for clients </h1>
<ul>
	<li><a href="client.php"> Go back </a></li>
</ul>
<form action="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
<?php
$_from = $_smarty_tpl->tpl_vars['files']->value;
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
	Name: <br>
	<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>
"> <br>
    Adress: <br>
	<input type="text" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['adress'];?>
"> <br>
	Age: <br>
	<input type="number" name="age" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['age'];?>
"> <br>
	Email:<br>
	<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
"><br>
	Pet-Name:<br>
	<input type="text" name="pet_name" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['pet_name'];?>
"><br>
	<input type="submit" name="submit" value="Save">
<?php
$_smarty_tpl->tpl_vars['client'] = $__foreach_client_0_saved_local_item;
}
if ($__foreach_client_0_saved_item) {
$_smarty_tpl->tpl_vars['client'] = $__foreach_client_0_saved_item;
}
?>
</form>
</body>
</html><?php }
}
