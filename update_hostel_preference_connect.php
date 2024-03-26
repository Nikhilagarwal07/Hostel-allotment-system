<!DOCTYPE html>
<html>

<head>
    <title>update_hostel_preference</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="login.php">Home</a></li>
        </ul>
    </nav>
    <br></br>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hostel_db";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get input values from form
    $student_id = $_POST['student_id'];
    $year = $_POST['year'];
    $preference = $_POST['hostel'];

    // Prepare and execute query to update StudentWing table
    $sql = "UPDATE StudentWing SET preference_of_hostel = ? WHERE student_id = ? AND Year_of_study = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $preference, $student_id, $year);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo '<p style= "color: white"; > Hostel preference updated successfully for student ID: ' . $student_id . '</p>';
    } else {
        echo '<p style="color: red;background-transparency: 50%"> Error updating hostel preference ' . mysqli_error($conn) . '</p>';
    }

    // Close connection
    mysqli_close($conn);
    ?>



</body>

</html>