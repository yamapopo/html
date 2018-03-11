<html>
<head>
<title>HTTP Request Headers</title>
</head>
<body>
HTTP Request Headers<br />
<br />
<?php
	if (!function_exists('getallheaders')) {
		function getallheaders() {
			$headers = [];
			foreach ($_SERVER as $name => $value) {
			   $headers[$name] = $value;
			}
		}
		return $headers;
	}
?>
</body>
</html>
