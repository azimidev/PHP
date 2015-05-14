<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Continue</title>
	</head>
	<body>

		<?php
			for ($count=0; $count <= 10; $count++) {
				if ($count % 2 == 0) { continue; }
				echo $count . ", ";
			}
		?>
	</body>
</html>
