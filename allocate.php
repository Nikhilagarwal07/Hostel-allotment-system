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

// Select students who are not already allotted a room
$sql = "SELECT * FROM StudentWing WHERE student_id NOT IN (SELECT student_id FROM Allotment)";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {
    $student_id = $row['student_id'];
    $student_name = $row['student_name'];
    $year = $row['Year_of_study'];
    $preference_of_hostel = $row['preference_of_hostel'];
    $student_wingId = $row['student_wingId'];

    // Select a room that is unoccupied
    $room_sql = "SELECT * FROM Hostel WHERE Hostel_name = '$preference_of_hostel' AND hostel_wingId = '$student_wingId' AND no_of_unoccupied_beds > 0 ORDER BY Room_no ASC LIMIT 1";
    $room_result = mysqli_query($conn, $room_sql);
    $room_row = mysqli_fetch_assoc($room_result);

    if ($room_row) {
        $hostel_name = $room_row['Hostel_name'];
        $room_no = $room_row['Room_no'];

        // Insert data into Allotment table and update Hostel table
        $insert_sql = "INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study)
                     VALUES ('$hostel_name', '$room_no', '$student_wingId', '$student_id', '$student_name', '$year')";
        $update_sql = "UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = '$hostel_name' AND Room_no = '$room_no'";
        mysqli_query($conn, $insert_sql);
        mysqli_query($conn, $update_sql);

        // Check if no_of_unoccupied_beds becomes zero and update Count table
        $check_sql = "SELECT no_of_unoccupied_beds FROM Hostel WHERE Hostel_name = '$hostel_name' AND Room_no = '$room_no'";
        $check_result = mysqli_query($conn, $check_sql);
        $check_row = mysqli_fetch_assoc($check_result);
        if ($check_row['no_of_unoccupied_beds'] == 0) {
            $increment_sql = "UPDATE Count SET count_of_rooms_occupied = count_of_rooms_occupied + 1 WHERE Hostel_name = '$hostel_name'";
            mysqli_query($conn, $increment_sql);
        }
    }
}

mysqli_close($conn);
// Redirect to success.php
header("Location: success.php");
exit(); // Make sure to call exit() after the header() function to prevent further script execution
