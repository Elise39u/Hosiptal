<?php
/* Smarty version 3.1.29, created on 2017-03-15 10:26:20
  from "C:\wamp64\www\Hospital\tpl\create.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c908bc258d56_68792406',
  'file_dependency' => 
  array (
    '4a4f635c3909c4cf284b3977ef75cbfe564fc79c' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\create.html.tpl',
      1 => 1489569978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c908bc258d56_68792406 ($_smarty_tpl) {
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
	<li><a href="patient.php"> go back </a></li>
</ul>

<div id="createForm">
<form action="create.php" method="post">
	Name: <br>
	<input type="text" name="name"> <br>
	Species: <br>
	<select name="species">
		<?php
$_from = $_smarty_tpl->tpl_vars['species']->value;
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
			<option value="<?php echo $_smarty_tpl->tpl_vars['specie']->value['sort'];?>
"><?php echo $_smarty_tpl->tpl_vars['specie']->value['sort'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['specie'] = $__foreach_specie_0_saved_local_item;
}
if ($__foreach_specie_0_saved_item) {
$_smarty_tpl->tpl_vars['specie'] = $__foreach_specie_0_saved_item;
}
?>
	</select><br>
	Status: <br>
	<input type="text" name="status"><br>	
	Gender:<br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="unkown"> Unkown<br>
	<input type="submit" name="submit" value="Create patient">
</form>
</div>

</body>
</html><?php }
}
