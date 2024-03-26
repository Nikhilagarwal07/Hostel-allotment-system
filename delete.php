<!DOCTYPE html>
<html>

<head>
    <title>Delete Allotment</title>
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
        <h1>Delete Allotment</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="student_id">Student ID:</label>
            <input type="text" id="student_id" name="student_id" required><br>
            <label for="room_no">Room No:</label>
            <input type="text" id="room_no" name="room_no" required><br>
            <input type="submit" value="Delete Allotment">
        </form>
    </div>
</body>

</html>
<?php

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hostel_db";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the student ID and room number to delete
    $student_id = $_POST["student_id"];
    $room_no = $_POST["room_no"];

    // Get the hostel name and wing ID from the Allotment table
    $select_sql = "SELECT Hostel_name, hostel_wingId FROM Allotment WHERE student_id='$student_id' AND Room_no='$room_no'";
    $result = mysqli_query($conn, $select_sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hostel_name = $row["Hostel_name"];
        $hostel_wingId = $row["hostel_wingId"];

        // Delete the allotment
        $delete_sql = "DELETE FROM Allotment WHERE student_id='$student_id' AND Room_no='$room_no'";
        mysqli_query($conn, $delete_sql);

        // Update the no_of_unoccupied_beds in the Hostel table
        $update_sql = "UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds + 1 WHERE Hostel_name='$hostel_name' AND hostel_wingId='$hostel_wingId' AND Room_no='$room_no'";
        mysqli_query($conn, $update_sql);

        mysqli_close($conn);
        header("Location: deletesuccessful.php");
        exit();
    } else {
        mysqli_close($conn);
        header("Location: deleteunsuccessful.php");
        exit();
    }
}
?>