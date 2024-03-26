<!DOCTYPE html>
<html>

<head>
    <title>Free Rooms List</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-image: url("bg2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        td {
            background-color: #f2f2f2;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            border: 2px solid #ddd;
        }

        tr:nth-child(even) td {
            background-color: #fff;
        }

        caption {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #4CAF50;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>


    <div class="form-box">
        <h1>Hostel Wise Student Details</h1>
        <form action="" method="post">
            <label for="hostel_name">Choose hostel:</label><br>
            <select id="hostel_name" name="hostel_name">
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

        // Check if a hostel is selected from the dropdown menu
        if (isset($_POST['hostel_name'])) {
            $selected_hostel = $_POST['hostel_name'];

            // Select allotment records for the selected hostel
            $sql = "SELECT * FROM Allotment WHERE Hostel_name = '$selected_hostel'";
            $result = mysqli_query($conn, $sql);

            // Check if there are any records for the selected hostel
            if (mysqli_num_rows($result) > 0) {
                // Display table header
                echo "<table>";
                echo "<tr><th>Hostel Name</th><th>Room Number</th><th>Wing ID</th><th>Student ID</th><th>Student Name</th><th>Year_of_study</th></tr>";

                // Display table rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['Hostel_name'] . "</td><td>" . $row['Room_no'] . "</td><td>" . $row['hostel_wingId'] . "</td><td>" . $row['student_id'] . "</td><td>" . $row['student_name'] . "</td><td>" . $row['Year_of_study'] . "</td></tr>";
                }

                // Display table footer
                echo "</table>";
            } else {
                // If no records found for the selected hostel
                echo '<div style="text-align: center; font-size: 20px;">No allotment records found for ' . $selected_hostel . ' hostel!</div>';
            }
        }

        mysqli_close($conn);
