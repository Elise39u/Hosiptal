<!DOCTYPE html>
<html>
<head>
	<title>{$pagetitle}</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Do you want to delete this pet </h1>
<ul>
	<li><a href="species.php"> Go back </a></li>
</ul>

<form action="delete.php?id={$id}" method="post">
{foreach $specie as $info}
	Sort: <br>
	<input type="text" name="name" value="{$info['sort']}" readonly> <br>
	<input type="submit" name="yes" value="yes"><br>
	<input type="submit" name="no" value="no">
{/foreach}
</form>
</body>
</html>