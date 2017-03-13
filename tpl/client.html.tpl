<!DOCTYPE html>
<html>
<head>
	<title>{$pagetitle}</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Welcome to the client side </h1>
<ul>
	<li><a href="../index.php"> home </a></li>
	<li><a href="create.php"> Create client </a></li>
</ul>

<table>
	<tr class="head">
		<td>Name&nbsp;</td>
		<td>Adress&nbsp;</td>
		<td>Age&nbsp;</td>
		<td>Email&nbsp;</td>
		<td>Pet-Name&nbsp;</td>
		<td>Cheked-in&nbsp;</td>
		<td>Cheked-out&nbsp;</td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		{foreach $clients as $client}
		<td>{$client['name']}&nbsp;</td> 
		<td>{$client['adress']}&nbsp;</td>
		<td>{$client['age']}&nbsp;</td>
		<td>{$client['email']}&nbsp;</td>
		<td>{$client['pet_name']}&nbsp;</td>
		<td>{$client['cheked_in']}&nbsp;</td>
		<td>{$client['cheked_out']}&nbsp;</td>
		<td><a href="edit.php?id={$client['id']}">Edit</a></td>
		<td><a href="delete.php?id={$client['id']}">Delete</a></td>
	</tr>
	{/foreach}
</table>
</body>
</html>