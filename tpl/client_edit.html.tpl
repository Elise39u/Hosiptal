<!DOCTYPE html>
<html>
<head>
	<title>{$pagetitle}</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Welcome to the edit section for clients </h1>
<ul>
	<li><a href="client.php"> Go back </a></li>
</ul>
<form action="edit.php?id={$id}" method="post">
{foreach $files as $client}
	Name: <br>
	<input type="text" name="name" value="{$client['name']}"> <br>
    Adress: <br>
	<input type="text" name="adress" value="{$client['adress']}"> <br>
	Age: <br>
	<input type="number" name="age" value="{$client['age']}"> <br>
	Email:<br>
	<input type="text" name="email" value="{$client['email']}"><br>
	Pet-Name:<br>
	<input type="text" name="pet_name" value="{$client['pet_name']}"><br>
	<input type="submit" name="submit" value="Save">
{/foreach}
</form>
</body>
</html>