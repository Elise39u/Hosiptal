<!DOCTYPE html>
<html>
<head>
	<title>{$pagetitle}</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1> Welcome to the edit section for species </h1>
<ul>
	<li><a href="species.php"> Go back </a></li>
</ul>
<form action="edit.php?id={$id}" method="post">
{foreach $info as $specie}
	Sort: <br>
	<input type="text" name="sort" value="{$specie['sort']}"> <br>
	<input type="submit" name="submit" value="Save">
{/foreach}
</form>
</body>
</html>