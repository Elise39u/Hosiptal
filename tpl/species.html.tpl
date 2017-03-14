<!DOCTYPE html>
<html>
<head>
	<title>{$pagetitle}</title>
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
	{foreach $specie as $info}
		<td>{$info['sort']} &nbsp; </td>
		<td><a href="edit.php?id={$info['id']}"> Edit </a></td>
		<td><a href="delete.php?id={$info['id']}"> Delete</a></td>
	</tr>
	{/foreach}
</table>

</body>
</html>