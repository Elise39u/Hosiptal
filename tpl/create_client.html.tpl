<!DOCTYPE html>
<html>
<head>
	<title>{$pagetitle}</title>
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
</html>