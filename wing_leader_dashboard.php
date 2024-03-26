<html>

<head>
    <title>Wing Leader Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="login.php">Home</a></li>

        </ul>
    </nav>
    <h1>Welcome Wing Leader!</h1>
    <form action="" method="post">
        <select name="user_type">
            <option value="register">Register First Time</option>
            <option value="update_preference">Update Hostel Preference</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $user_type = $_POST['user_type'];
        if ($user_type == 'register') {
            header("Location: wingleader_login.php");
            exit();
        } else if ($user_type == 'update_preference') {
            header("Location: update-hostel-preference.php");
            exit();
        }
    }

    ?>

</body>

</html>