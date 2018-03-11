<html>
	<head>
	</head>
	<body>
		HTTP Request Headers<br />
		<br />
		<?php
			foreach(getallheaders() as $name => $value) {
				echo "$nama: $value<br />"
			}
		?>
	</body>
</html>
