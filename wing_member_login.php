<!DOCTYPE html>
<html>

<head>
  <title>WING MEMBER LOGIN PAGE</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <ul>
      <li><a href="login.php">Home</a></li>
    </ul>
  </nav>
  <div class="form-box">
    <h1>WING MEMBER Registration</h1>
    <form action="connect_two.php" method="post">

      <label for="student-id">Student ID:</label>
      <input type="text" id="student-id" name="student_id" required><br>

      <label for="student-name">Student Name:</label>
      <input type="text" id="student-name" name="student_name" required><br>
      <label for="wing-id">Wing ID:</label>
      <input type="text" id="wing-id" name="wing_id" required><br>
      <label for="wing-leader-student-id">Wing Leader Student ID:</label>
      <input type="text" id="wing-leader-student-id" name="wing_leader_student_id" required><br>
      <label for="year">Select Year:</label>
      <select id="year" name="year">
        <option value="1">First Year</option>
        <option value="2">Second Year</option>
        <option value="3">Third Year</option>
        <option value="4">Fourth Year</option>
      </select>

      <br><br>
      <input type="submit" value="Submit">
    </form>
  </div>

</body>

</html>