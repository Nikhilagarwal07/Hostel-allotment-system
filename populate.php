<?php
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

// Get list of hostels
$get_hostels_sql = "SELECT DISTINCT Hostel_name FROM Hostel";
$get_hostels_result = mysqli_query($conn, $get_hostels_sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Populate</title>
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
        <h1>Hostel Room Planner</h1>
        <form action="" method="post">
            <label for="hostel">Choose hostel:</label><br>
            <select id="hostel" name="hostel">
                <option value="BUDH">BUDH</option>
                <option value="RAM">RAM</option>
                <option value="KRISHNA">KRISHNA</option>
                <option value="GANDHI">GANDHI</option>
                <option value="SHANKAR">SHANKAR</option>
                <option value="VYAS">VYAS</option>
                <option value="ASHOK">ASHOK</option>
                <option value="SR">SR</option>
            </select><br><br>
            <button type="submit" style="padding: 10px; background-color: #f1c40f; color: #fff; font-size: 18px; border: none; border-radius: 5px; width: 100%; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>
        </form>


        <?php
        // Check if form submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get selected hostel
            $hostel_name = $_POST["hostel"];

            // Check if hostel is already populated
            $check_sql = "SELECT COUNT(*) AS count FROM Hostel WHERE Hostel_name='$hostel_name'";
            $check_result = mysqli_query($conn, $check_sql);
            $check_row = mysqli_fetch_assoc($check_result);
            if ($check_row['count'] > 0) {
                echo '<div style="text-align: center; color: white; padding: 10px;">' . $hostel_name . ' hostel already populated...</div>';
            } else {

                // Populate hostel
                $k = 1;
                for ($i = 1; $i <= 10; $i++) {
                    for ($j = 1; $j <= 8; $j++) {
                        $insert_sql = "INSERT INTO Hostel (Hostel_name, Room_no, hostel_wingId, no_of_unoccupied_beds)
                       VALUES ('$hostel_name', '$k', '$i', '2')";
                        mysqli_query($conn, $insert_sql);
                        $k++;
                    }
                }
                // Add the hostel name and count_of_rooms_occupied to the Count table
                $insert_count_sql = "INSERT INTO Count (Hostel_name, count_of_rooms_occupied) VALUES ('$hostel_name', '0')";
                mysqli_query($conn, $insert_count_sql);

                echo '<div style="text-align: center; color: white; padding: 10px;"> Congratulations! The hostel database has been successfully populated with rooms for ' . $hostel_name . ' hostel </div>';
            }
        }

        mysqli_close($conn);
        ?>
    </div>
</body>

</html>