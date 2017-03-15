<!DOCTYPE html>
<html>
<head>
	<title>{$pagetitle}</title>
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
	<input type="text" name="species"> <br>
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
</html>