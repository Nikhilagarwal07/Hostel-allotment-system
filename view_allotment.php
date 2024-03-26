<!DOCTYPE html>
<html>

<head>
    <title>Allotment Details</title>
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
    <h1>Allotment Details</h1>
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

    // Select all data from Allotment table
    $sql = "SELECT * FROM Allotment";
    $result = mysqli_query($conn, $sql);

    // Display data in a table
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Hostel Name</th><th>Room Number</th><th>Hostel Wing ID</th><th>Student ID</th><th>Student Name</th><th>Year_of_study</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["Hostel_name"] . "</td><td>" . $row["Room_no"] . "</td><td>" . $row["hostel_wingId"] . "</td><td>" . $row["student_id"] . "</td><td>" . $row["student_name"] . "</td><td>" . $row["Year_of_study"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }

    mysqli_close($conn);
    ?>
</body>

</html>