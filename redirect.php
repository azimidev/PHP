<?php
	// This is how you redirect to a new page
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}
	
	if (isset($_GET['logged_in'])) {
		$logged_in = $_GET['logged_in'];
	} else {
		$logged_in = 0;
	}
	if ($logged_in == "1") {
		redirect_to("basic.html");
	} else {
		redirect_to("http://www.parsclick.net/");
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Redirect</title>
	</head>
	<body>

	</body>
</html>
