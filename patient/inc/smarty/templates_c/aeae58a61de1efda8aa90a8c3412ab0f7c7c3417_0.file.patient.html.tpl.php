<?php
/* Smarty version 3.1.29, created on 2017-03-15 10:15:46
  from "C:\wamp64\www\Hospital\tpl\patient.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c9064272cf24_56046340',
  'file_dependency' => 
  array (
    'aeae58a61de1efda8aa90a8c3412ab0f7c7c3417' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\patient.html.tpl',
      1 => 1489569182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c9064272cf24_56046340 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../Js/jquery-latest.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../Js/jquery.tablesorter.js"><?php echo '</script'; ?>
>
</head>
<body>
<h1> Welcome to the patient section </h1>
<ul>
	<li><a href="../index.php"> home </a></li>
	<li><a href="create.php"> Create patient </a></li>
</ul>

<table id="myTable">
<thead>
	<tr class="head">
		<th>Name &nbsp;</th>
		<th>Species &nbsp;</th>
		<th>Stataus &nbsp;</th>
		<th>Gender &nbsp;</th>
		<th></th>
		<th></th>
	</tr>
</thead>
<tbody> 
	<tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['patients']->value;
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
		<td><?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
 &nbsp; </td>
		<td><?php echo $_smarty_tpl->tpl_vars['patient']->value['species'];?>
 &nbsp; </td>
		<td><?php echo $_smarty_tpl->tpl_vars['patient']->value['status'];?>
 &nbsp; </td>
		<td><?php echo $_smarty_tpl->tpl_vars['patient']->value['gender'];?>
 &nbsp; </td>
		<td><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
"> Edit </a></td>
		<td><a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
"> Delete</a></td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['patient'] = $__foreach_patient_0_saved_local_item;
}
if ($__foreach_patient_0_saved_item) {
$_smarty_tpl->tpl_vars['patient'] = $__foreach_patient_0_saved_item;
}
?>
	</tbody>
</table>

</body>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
<?php echo '</script'; ?>
>
</html><?php }
}
