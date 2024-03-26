<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<h2>Hostel Allotment Portal </h2>

	<form action="" method="post">
		<h3>Login as:</h3>
		<select name="user_type">
			<option value="admin">Admin</option>
			<option value="wing_leader">Wing Leader</option>
			<option value="wing_member">Wing Member</option>
		</select>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$user_type = $_POST['user_type'];
		if ($user_type == 'admin') {
			header("Location: admin_login.php");
			exit();
		} else if ($user_type == 'wing_leader') {
			header("Location: wing_leader_dashboard.php");
			exit();
		} else if ($user_type == 'wing_member') {
			header("Location: wing_member_login.php");
			exit();
		}
	}
	?>
</body>

</html>