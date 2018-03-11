<html>
<head>
<title>HTTP Request Headers</title>
</head>
<body>
HTTP Request Headers<br />
<br />
<ul>
<li>TEST</li>
<?php
	foreach ($_SERVER as $name => $value) {
		echo "<li>$name: $value</li>";
	}
?>
</ul>
</body>
</html>
