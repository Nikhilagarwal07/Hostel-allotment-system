<!DOCTYPE html>
<html>

<head>
    <title>Admin Login Page</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="login.php">Home</a></li>
        </ul>
    </nav>
    <h1>Admin Login</h1>
    <form action="" method="post">
        <link rel="stylesheet" href="style.css">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>


    <?php
    session_start(); // Start a PHP session

    // Check if the login form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the username and password from the form submission
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'hostel_db');

        // Check if the connection was successful
        if (!$conn) {
            die('Error connecting to the database.');
        }

        // Build the query to fetch the admin user by username
        $query = "SELECT * FROM admin_users WHERE username = '$username'";

        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check if a user was found
        if (mysqli_num_rows($result) == 1) {
            // Get the user data
            $user = mysqli_fetch_assoc($result);

            // Verify the password
            if ($password === $user['password']) {
                // Password is correct, set session variables and redirect to the dashboard
                $_SESSION['admin_id'] = $user['id'];
                $_SESSION['admin_username'] = $user['username'];
                header('Location: admin_dashboard.php');
                exit;
            } else {
                // Password is incorrect, show an error message
                $error = 'Incorrect password';
            }
        } else {
            // User not found, show an error message
            $error = 'User not found';
        }

        // Close the database connection
        mysqli_close($conn);
    }

    // Display an error message if there is one
    if (isset($error)) {
        echo '<p class="error">' . $error . '</p>';
    }
    ?>

</body>

</html>