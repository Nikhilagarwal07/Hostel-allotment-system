<!DOCTYPE html>
<html>

<head>
    <title>Update Hostel Preference</title>
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
        <h1>Update Hostel Preference</h1>
        <form action="update_hostel_preference_connect.php" method="post">

            <label for="student-id">Student ID:</label>
            <input type="text" id="student-id" name="student_id" required><br>
            <label for="year">Select Year:</label>
            <select id="year" name="year">
                <option value="1">First Year</option>
                <option value="2">Second Year</option>
                <option value="3">Third Year</option>
                <option value="4">Fourth Year</option>
            </select>
            <label for="hostel">Select Prefered Hostel:</label>
            <select id="hostel" name="hostel">
                <!-- Default options for the hostel dropdown -->
                <option value="none">Select Hostel</option>
                <option value="ram">Ram Hostel</option>
                <option value="budh">Budh Hostel</option>
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
                option1.text = "Ram Hostel";
                option1.value = "ram";
                var option2 = document.createElement("option");
                option2.text = "Budh Hostel";
                option2.value = "budh";
                hostelDropdown.add(option1);
                hostelDropdown.add(option2);
            } else if (yearDropdown.value === "3") {
                // Third year options
                var option1 = document.createElement("option");
                option1.text = "Shankar Hostel";
                option1.value = "shankar";
                var option2 = document.createElement("option");
                option2.text = "Vyas Hostel";
                option2.value = "vyas";
                hostelDropdown.add(option1);
                hostelDropdown.add(option2);
            } else if (yearDropdown.value === "4") {
                // Third year options
                var option1 = document.createElement("option");
                option1.text = "Krishna Hostel";
                option1.value = "Krishna";
                var option2 = document.createElement("option");
                option2.text = "Gandhi Hostel";
                option2.value = "Gandhi";
                hostelDropdown.add(option1);
                hostelDropdown.add(option2);
            } else if (yearDropdown.value === "1") {
                // Third year options
                var option1 = document.createElement("option");
                option1.text = "SR Hostel";
                option1.value = "SR";
                var option2 = document.createElement("option");
                option2.text = "Ashok Hostel";
                option2.value = "Ashok";
                hostelDropdown.add(option1);
                hostelDropdown.add(option2);
            }
        });
    </script>

</body>

</html>