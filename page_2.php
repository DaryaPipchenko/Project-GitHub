<?php
	require 'list.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LIST</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<center><a class="btn btn-outline-warning" href="index.php" role="button">MAIN</a>
		<a class="btn btn-outline-warning" href="page_1.php" role="button">Students</a>
		<button type="button" class="btn btn-warning">Coaches</button>
		<a class="btn btn-outline-warning" href="page_3.php" role="button">Admins</a></center>
		<h1 align="center">Coaches' Names List</h1>
		<table class="table">
			<tr class="table-warning">
				<th>Name</th>
				<th>Group</th>
				<th>E-mail</th>
				<th>Phone</th>
			</tr>
			<?php foreach ($list as $key): 
				if ($key['group'] == 'coach') {?>
				<tr>
					<td><?= $key['name'] ?></td>
					<td><?= $key['group'] ?></td>
					<td><?= $key['email'] ?></td>
					<td><?= $key['phone'] ?></td>
				</tr>
			<?php } endforeach ?>
		</table>
	</div>
</body>
</html>