<?php
	session_start();
?>

<html>
	<?php
		if (isset($_SESSION["user"])){
			include 'stuInfo.php';
		} else {
			echo 'Log in to view info.';
			include 'login.php';
		}
	?>
</html>