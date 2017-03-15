<?php
/* Smarty version 3.1.29, created on 2017-03-15 10:27:10
  from "C:\wamp64\www\Hospital\tpl\edit.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c908eecc2b23_20671376',
  'file_dependency' => 
  array (
    'a75e4331d9449de8ee01d5615faa306bb96d516f' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\edit.html.tpl',
      1 => 1489570000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c908eecc2b23_20671376 ($_smarty_tpl) {
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
	<li><a href="patient.php"> Go back </a></li>
</ul>
<form action="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
<?php
$_from = $_smarty_tpl->tpl_vars['files']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_patient_0_saved_item = isset($_smarty_tpl->tpl_vars['patient']) ? $_smarty_tpl->tpl_vars['patient'] : false;
$_smarty_tpl->tpl_vars['patient'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['patient']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->_loop = true;
$__foreach_patient_0_saved_local_item = $_smarty_tpl->tpl_vars['patient'];
?>
	Name: <br>
	<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
"> <br>
    Species: <br>
	<select name="species">
		<?php
$_from = $_smarty_tpl->tpl_vars['species']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_specie_1_saved_item = isset($_smarty_tpl->tpl_vars['specie']) ? $_smarty_tpl->tpl_vars['specie'] : false;
$_smarty_tpl->tpl_vars['specie'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['specie']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['specie']->value) {
$_smarty_tpl->tpl_vars['specie']->_loop = true;
$__foreach_specie_1_saved_local_item = $_smarty_tpl->tpl_vars['specie'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['specie']->value['sort'];?>
"><?php echo $_smarty_tpl->tpl_vars['specie']->value['sort'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['specie'] = $__foreach_specie_1_saved_local_item;
}
if ($__foreach_specie_1_saved_item) {
$_smarty_tpl->tpl_vars['specie'] = $__foreach_specie_1_saved_item;
}
?>
	</select><br>
	<!-- <input type="text" name="species" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['species'];?>
"> <br> -->
	Status: <br>
	<textarea type="text" name="status" rows="5" cols="30"><?php echo $_smarty_tpl->tpl_vars['patient']->value['status'];?>
</textarea><br>
	Gender:<br>
    <input type="radio" name="male" value="male"> Male<br>
    <input type="radio" name="female" value="female"> Female<br>
    <input type="radio" name="unkown" value="unkown"> Unkown<br>
	<input type="submit" name="submit" value="Save">
<?php
$_smarty_tpl->tpl_vars['patient'] = $__foreach_patient_0_saved_local_item;
}
if ($__foreach_patient_0_saved_item) {
$_smarty_tpl->tpl_vars['patient'] = $__foreach_patient_0_saved_item;
}
?>
</form>
</body>
</html><?php }
}
