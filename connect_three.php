<?php
// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // set parameters
    $student_id = $_POST["student_id"];
    $student_name = $_POST["student_name"];
    $year = $_POST["year"];
    $preference_of_hostel = $_POST["hostel"];

    // connect to database
    $conn = new mysqli('localhost', 'root', '', 'hostel_db');

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // generate a unique student wing ID
        $student_wingId = rand(1, 10);
        $stmt = $conn->prepare("SELECT COUNT(*) FROM StudentWing WHERE student_wingId = ?");
        $stmt->bind_param("i", $student_wingId);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        while ($count > 0) {
            $student_wingId = rand(1, 10);
            $stmt = $conn->prepare("SELECT COUNT(*) FROM StudentWing WHERE student_wingId = ?");
            $stmt->bind_param("i", $student_wingId);
            $stmt->execute();
            $stmt->bind_result($count);
            $stmt->fetch();
            $stmt->close();
        }

        // prepare and bind data to insert into database
        $stmt = $conn->prepare("INSERT INTO StudentWing(student_id, student_name, student_wingId, Year_of_study, preference_of_hostel) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $student_id, $student_name, $student_wingId, $year, $preference_of_hostel);
        $stmt->execute();
        $stmt->close();

        // close connection
        $conn->close();

        echo "<h2>Registration successful!</h2>\n";
        echo "Student Wing ID: " . $student_wingId;
        // redirect to success page

        //header("Location: success.php");
        exit();
    }
}
