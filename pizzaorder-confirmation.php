<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Pizza Order Confirmation™</title>
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<header>
		<div align="center">
			<h1>Golden Pizza</h1>
		</div>
		</header>
		<main>
			<h2>Order receipt</h2>

<?php

$fName = $_GET['fName'];
$lName = $_GET['lName'];

echo "<p>Hello, <strong>$fName</strong>!</p>";
echo('<p>We have received your order! Thank you for chose us!');

?>
<br>
<div align="center">
<p><a href="javascript:history.go(-1)">Back to last page</a></p>
</div>
		</main>
		<div align="right">
        <footer>
            <small>©All the content by Andreia Dourado (2023)</small>
        </footer>
    </div>
</body>
</html>