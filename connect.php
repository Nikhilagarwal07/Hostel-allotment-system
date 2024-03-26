<!DOCTYPE html>
<html>

<head>
  <title>WING LEADER Registration</title>
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
    $year = $_POST["year"];
    $preference_of_hostel = $_POST["hostel"];

    // connect to database
    $conn = new mysqli('localhost', 'root', '', 'hostel_db');

    // check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
      // check if all wings in the hostel are occupied
      $stmt = $conn->prepare("SELECT COUNT(*) FROM StudentWing WHERE preference_of_hostel = ?");
      $stmt->bind_param("s", $preference_of_hostel);
      $stmt->execute();
      $stmt->bind_result($count);
      $stmt->fetch();
      $stmt->close();
      // check if all wings in the hostel are occupied
      if ($count >= 10) {
        echo "<h2>Sorry, all wings in this hostel are currently occupied. Please try another hostel.</h2>\n";
        echo "<button onclick=\"location.href='wingleader_login.php'\">Go to Login</button>";
        exit();
      }

      // generate a unique student wing ID
      $student_wingId = rand(1, 10);
      $stmt = $conn->prepare("SELECT COUNT(*) FROM StudentWing WHERE student_wingId = ?  AND preference_of_hostel = ?");
      $stmt->bind_param("is", $student_wingId, $preference_of_hostel);
      $stmt->execute();
      $stmt->bind_result($count);
      $stmt->fetch();
      $stmt->close();



      while ($count > 0 && $count < 10) {
        $student_wingId = rand(1, 10);
        $stmt = $conn->prepare("SELECT COUNT(*) FROM StudentWing WHERE student_wingId = ? AND preference_of_hostel = ?");
        $stmt->bind_param("is", $student_wingId, $preference_of_hostel);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
      }



      // prepare and bind data to insert into database
      $stmt = $conn->prepare("INSERT INTO StudentWing(student_id, student_name, student_wingId, Year_of_study, preference_of_hostel) VALUES (?, ?, ?, ?, ?)");
      $stmt->bind_param("ssiss", $student_id, $student_name, $student_wingId, $year, $preference_of_hostel);
      $stmt->execute();

      // print succesful message and student wing ID
      echo "<h1>Registration successful!</h1>\n";
      echo "<p>Your Wing ID is: " . $student_wingId . "</p>\n";
      echo "<p>Please save this for future reference</p>";
      $stmt->close();

      // close connection
      $conn->close();

      exit();
    }
  }
  ?>

</body>

</html>