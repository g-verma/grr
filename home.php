<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title> Welcome user </title>
</head>

<body>
<h1>Welcome New User! <?php echo $_SESSION['user_email']; ?></h1>


</body>


</html>

