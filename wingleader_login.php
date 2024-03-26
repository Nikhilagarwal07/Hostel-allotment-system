<!DOCTYPE html>
<html>

<head>
    <title>WING LEADER LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="login.php">Home</a></li>
            <li><a href="wing_leader_dashboard.php">Back</a></li>
        </ul>
    </nav>
    <div class="form-box">
        <h1>WING LEADER Registration</h1>
        <form action="connect.php" method="post">

            <label for="student-id">Student ID:</label>
            <input type="text" id="student-id" name="student_id" required> <br>
            <label for="student-name">Student Name:</label>
            <input type="text" id="student-name" name="student_name" required><br>
            <label for="year">Select Year:</label><br>
            <select id="year" name="year">
                <option value="1">First Year</option>
                <option value="2">Second Year</option>
                <option value="3">Third Year</option>
                <option value="4">Fourth Year</option>
            </select>
            <label for="hostel">Select Prefered Hostel:</label><br>
            <select id="hostel" name="hostel">
                <!-- Default options for the hostel dropdown -->
                <option value="none">Select Hostel</option>
                <option value="RAM">RAM Hostel</option>
                <option value="BUDH">BUDH Hostel</option>
            </select><br><br>
            <input type="submit" value="Submit">

        </form>
    </div>

    <script type="text/javascript">
        // Get references to the year and hostel dropdowns
        var yearDropdown = document.getElementById("year");
        var hostelDropdown = document.getElementById("hostel");

        // Set up event listener for when the year dropdown changes
        yearDropdown.addEventListener("change", function() {
            // Clear existing options in the hostel dropdown
            hostelDropdown.innerHTML = "";

            // Add new options based on the selected year
            if (yearDropdown.value === "2") {
                // Second year options
                var option1 = document.createElement("option");
                option1.text = "RAM Hostel";
                option1.value = "RAM";
                var option2 = document.createElement("option");
                option2.text = "BUDH Hostel";
                option2.value = "BUDH";
                hostelDropdown.add(option1);
                hostelDropdown.add(option2);
            } else if (yearDropdown.value === "3") {
                // Third year options
                var option1 = document.createElement("option");
                option1.text = "SHANKAR Hostel";
                option1.value = "SHANKAR";
                var option2 = document.createElement("option");
                option2.text = "VYAS Hostel";
                option2.value = "VYAS";
                hostelDropdown.add(option1);
                hostelDropdown.add(option2);
            } else if (yearDropdown.value === "4") {
                // Third year options
                var option1 = document.createElement("option");
                option1.text = "KRISHNA Hostel";
                option1.value = "KRISHNA";
                var option2 = document.createElement("option");
                option2.text = "GANDHI Hostel";
                option2.value = "GANDHI";
                hostelDropdown.add(option1);
                hostelDropdown.add(option2);
            } else if (yearDropdown.value === "1") {
                // Third year options
                var option1 = document.createElement("option");
                option1.text = "SR Hostel";
                option1.value = "SR";
                var option2 = document.createElement("option");
                option2.text = "ASHOK Hostel";
                option2.value = "ASHOK";
                hostelDropdown.add(option1);
                hostelDropdown.add(option2);
            }
        });
    </script>

</body>

</html>