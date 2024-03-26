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
    <h1>List of Free Rooms</h1>

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

    // Retrieve the list of free rooms
    $select_sql = "SELECT Hostel_name, Room_no FROM Hostel WHERE no_of_unoccupied_beds > 0";
    $result = mysqli_query($conn, $select_sql);

    // Print the list of free rooms
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Hostel Name</th><th>Room No</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["Hostel_name"] . "</td><td>" . $row["Room_no"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No free rooms available.</p>";
    }

    mysqli_close($conn);
    ?>


</body>

</html>