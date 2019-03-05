<?php
	include_once 'dbh.inc.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<nav class="infoBox">
		<h1 style="text-align: center">Registration Form</h1>
		<form action="submit.inc.php" method="post">
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="Name" > </td>
			</tr>
			<tr>
				<td>Phone No:</td>
				<td><input type="text" name="Phn" ></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="mail" ></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input type="text" name="Age" ></td>
			</tr>
		</table> 
		<button type="submit" name="Submit">Submit</button>
		</form>
		
		</nav>

	</body>
</html>