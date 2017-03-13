<?php
/* Smarty version 3.1.29, created on 2017-03-13 11:50:11
  from "C:\wamp64\www\Hospital\tpl\create_client.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c67963100851_82358112',
  'file_dependency' => 
  array (
    'ac7b9bddb50fdb8dbacb3fe55977a1d986934061' => 
    array (
      0 => 'C:\\wamp64\\www\\Hospital\\tpl\\create_client.html.tpl',
      1 => 1489402205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c67963100851_82358112 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
</head>
<body>

<h1> Make a client </h1>
<div id="createForm">
<a href="client.php"> Go back </a>
<form action="create.php" method="post">
	Name: <br>
	<input type="text" name="name"> <br>
    Adress: <br>
	<input type="text" name="adress"> <br>
	Age: <br>
	<input type="number" name="age"><br>
	Email: <br>
	<input type="text" name="email"><br>
	Pet-name: <br>
	<input type="text" name="pet_name"><br>
	<input type="submit" name="submit" value="Create client">
</form>

</div>
</body>
</html><?php }
}
