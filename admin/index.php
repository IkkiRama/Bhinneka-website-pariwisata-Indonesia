<?php require"koneksi.php";?>
<?php

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bhinneka | Dashboard admin</title>
</head>
<body>
	<h1>Dashboard Bhinneka</h1>
	<?php require "layout/navbar.php" ?>
	
	<pre>
		<?php print_r($_SESSION['admin']) ?>
	</pre>


</body>
</html>