<!-- HTML form to get the input of hostel_wingId and hostel name from the user -->
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
        <h1>View Wing Members</h1>
        <form method="POST">
            <label for="hostel_wingId">Choose Hostel Wing ID:</label>
            <select id="hostel_wingId" name="hostel_wingId">
                <?php
                // Populate the drop-down menu with the hostel_wingId options
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
                ?>
            </select>
            <label for="hostel_name">Choose Hostel Name:</label>
            <select id="hostel_name" name="hostel_name">
                <option value="Ashok">Ashok</option>
                <option value="Budh">Budh</option>
                <option value="Ram">Ram</option>
                <option value="Krishna">Krishna</option>
                <option value="Vyas">Vyas</option>
                <option value="SR">SR</option>
                <option value="Gandhi">Gandhi</option>
                <option value="Shankar">Shankar</option>
            </select>
            <input type="submit" value="Show Details">
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
        if (isset($_POST['hostel_name'])) {

            // Get the selected hostel_wingId and hostel name from the form
            $hostel_wingId = $_POST['hostel_wingId'];
            $hostel_name = $_POST['hostel_name'];

            // Select the wing members with the same hostel_wingId and hostel name from the Allotment table
            $sql = "SELECT * FROM Allotment WHERE hostel_wingId='$hostel_wingId' AND Hostel_name='$hostel_name'";
            $result = mysqli_query($conn, $sql);

            // Check if any rows are returned
            if (mysqli_num_rows($result) > 0) {
                // Display the details of each wing member
                echo "<table>";
                echo "<tr><th>Student ID</th><th>Student Name</th><th>Year_of_study</th><th>Hostel Name</th><th>Room No</th><th>Hostel Wing ID</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["student_id"] . "</td><td>" . $row["student_name"] . "</td><td>" . $row["Year_of_study"] . "</td><td>" . $row["Hostel_name"] . "</td><td>" . $row["Room_no"] . "</td><td>" . $row["hostel_wingId"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo '<div style="text-align: center;">No wing members found with the selected Hostel Wing ID and Hostel Name.</div>';
            }
        }
        mysqli_close($conn);
        ?>