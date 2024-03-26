<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>

            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>
    <div class="form-box">
        <h1>Admin Dashboard</h1>
        <form method="post">
            <label for="action">Select an Operation:</label> <br>
            <select id="action" name="action">
                <option value="populate">Populate Database</option>
                <option value="allocate">Allocate Rooms</option>
                <option value="delete">Delete Allotment</option>
                <option value="view_free_rooms">View Free Rooms</option>
                <option value="view_wingies">View Wingies</option>
                <option value="view_allotment">View Allotment</option>
                <option value="retrieve_database">Retrieve Database of Hostel</option>

            </select><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>


    <?php
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        if ($action == 'populate') {
            header("Location: populate.php");
            exit();
        } else if ($action == 'allocate') {
            header("Location: allocate.php");
            exit();
        } else if ($action == 'delete') {
            header("Location: delete.php");
            exit();
        } else if ($action == 'view_free_rooms') {
            header("Location: view_free_rooms.php");
            exit();
        } else if ($action == 'view_wingies') {
            header("Location: view_wingies.php");
            exit();
        } else if ($action == 'view_allotment') {
            header("Location: view_allotment.php");
            exit();
        } else if ($action == 'retrieve_database') {
            header("Location: retrieve_database.php");
            exit();
        }
    }
    ?>
</body>

</html>