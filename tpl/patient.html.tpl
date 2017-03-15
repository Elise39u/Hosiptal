<!DOCTYPE html>
<html>
<head>
	<title>{$pagetitle}</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Welcome to the patient section </h1>
<ul>
	<li><a href="../index.php"> home </a></li>
	<li><a href="create.php"> Create patient </a></li>
</ul>

<table>
	<tr class="head">
		<td>Name &nbsp;</td>
		<td>Species &nbsp;</td>
		<td>Stataus &nbsp;</td>
		<td>Gender &nbsp;</td>
		<td></td>
		<td></td>
	</tr>

	<tr>
	{foreach $patient as $treaded}
		<td>{$treaded['name']} &nbsp; </td>
		<td>{$treaded['species']} &nbsp; </td>
		<td>{$treaded['status']} &nbsp; </td>
		<td>{$treaded['gender']} &nbsp; </td>
		<td><a href="edit.php?id={$treaded['id']}"> Edit </a></td>
		<td><a href="delete.php?id={$treaded['id']}"> Delete</a></td>
	</tr>
	{/foreach}
</table>

</body>
</html>