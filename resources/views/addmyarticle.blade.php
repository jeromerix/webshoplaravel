@extends('layout')

@section('title','add a new article')

<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="stylesheet.css">
	</head>
<body>
<!--- form to insert articles ----------->
	<div class="form-group">
	<form action="insertinproducts.php" method="post">
	<label>Price:</label><br><input type="number" name="price" class="form-control"><br>
	<label>Article:</label><br><input type="text" name="articles" class="form-control"><br>
	<label>Description:</label><br><textarea name="info" value="info" class="form-control" rows="5" id="comment"></textarea><br>
<!--- submit or go back------------>
	<br>
	<input type="submit" value="Submit" class="btn btn-default">
	<a href="http://127.0.0.1:8000/">back to main</a>
	</form></div>
</body>
</html>
