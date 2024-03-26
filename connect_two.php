<!DOCTYPE html>
<html>

<head>
    <title>Wing Member Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="login.php">Home</a></li>
        </ul>
    </nav>

    <?php
    // check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // set parameters
        $student_id = $_POST["student_id"];
        $student_name = $_POST["student_name"];
        $student_wingId = intval($_POST["wing_id"]);
        $year = $_POST["year"];



        // connect to database
        $conn = new mysqli('localhost', 'root', '', 'database');

        // check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {


            $stmt = $conn->prepare("SELECT preference_of_hostel FROM StudentWing WHERE student_wingId = ?");
            $stmt->bind_param("i", $student_wingId);
            $stmt->execute();
            $stmt->bind_result($preference_of_hostel);
            $stmt->fetch();
            $stmt->close();

            // check if wing is full
            $stmt1 = $conn->prepare("SELECT COUNT(*) FROM StudentWing WHERE student_wingId = ?");
            $stmt1->bind_param("i", $student_wingId);
            $stmt1->execute();
            $stmt1->bind_result($num_members);
            $stmt1->fetch();
            $stmt1->close();

            if ($num_members >= 1) {
                // wing is full, display error message
                echo "<h1>Registration failed</h1>\n";
                echo "<p>The selected wing is already full. Please choose another wing.</p>\n";
            } else {
                // wing is not full, insert data into database
                $stmt2 = $conn->prepare("INSERT INTO StudentWing(student_id, student_name, student_wingId, Year_of_study, preference_of_hostel) VALUES (?, ?, ?, ?, ?)");
                $stmt2->bind_param("ssiss", $student_id, $student_name, $student_wingId, $year, $preference_of_hostel);
                $stmt2->execute();
                $stmt2->close();

                // print succesful message 
                echo "<h1>Registration successful!</h1>\n";
            }

            // close connection
            $conn->close();

            exit();
        }
    }
    ?>

</body>

</html>