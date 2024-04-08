<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="apple-touch-icon" sizes="180x180" href="static/icons/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="static/icons/favicon//favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="static/icons/favicon//favicon-16x16.png">
	<link rel="manifest" href="static/icons/favicon//site.webmanifest">
	<link rel="mask-icon" href="static/icons/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" href="/web/static/css/style.css">
    <link rel="stylesheet" href="/web/static/css/student.css">
    <link rel="stylesheet" href="/web/static/css/liststudent.css">
    <script src="/web/static/script/script.js"></script>
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/TableToExcel/1.0.0/tableToExcel.min.js"></script>

    <title>Responsive Side Navigation</title>
    <style>
        <?php 
        // include "static/css/style.css";
        // include "static/css/student.css";
        // include "/web/static/css/liststudent.css";
        ?>
        /* Style for search input */
        .search-div {
            overflow: hidden; /* Clear the float */
            background-color: rgba(255, 255, 255, 0.2); /* Set background color with opacity */
            backdrop-filter: blur(10px); /* Apply backdrop filter for blur effect */
            border-radius: 10px; /* Add border radius for rounded corners */
            padding: 10px; /* Add padding for spacing */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add box shadow for depth */
        }

        .search-div > div {
            float: left;  
            /* Float the divs to the left */ */
            margin-right: 500px; /* Add margin to create space between elements */

        }

        .search-div > div:last-child {
            float: right; /* Float the last div to the right */
            margin-right: 0; /* Remove margin for the last div */
        }
    </style>
</head>
<body>
<div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <hr>
        <a href="/web/dashboard.php">DashBoard</a>
        <hr>
        <a href="javascript:void(0)" onclick="showStudentSubnav()">Student Module</a>
        <div class="subnav hidden" id="student-module" >
        <a href="addstudent.php">Add Student</a>
            <a href="/web/student/updatestudent.php">Update Student</a>
            <a href="/web/student/deletestudent.php">Delete Student</a>
            <a href="/web/student/liststudents.php">List Students</a>
        </div>
        <hr>
        <a href="javascript:void(0)" onclick="showTeacherSubnav()">Teacher Module</a>
        <div class="subnav hidden" id="teacher-module">
            <a href="">Add Teacher</a>
            <a href="">Update Teacher</a>
            <a href="">Delete Teacher</a>
            <a href="">List Teacher</a>
        </div>
        <hr>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="#logout">Logout</a>
    </div>

    <div class="content" id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <!-- Display the page title -->
        <div id="head-div"><p>List Students</p></div>
        <button id="exportBtn">Export to Excel</button>

        <script>
            document.getElementById("exportBtn").addEventListener("click", function() {
    var table = document.getElementById("myTable");
    var rows = table.querySelectorAll("tbody tr");
    // var csvContent = "data:text/csv;charset=utf-8,";
    var csvContent = "";

    // Add column headers
    var headers = Array.from(table.querySelectorAll("thead th")).map(th => th.innerText);
    csvContent += headers.join(",") + "\n";

    // Add table rows
    rows.forEach(row => {
        var rowData = Array.from(row.querySelectorAll("td")).map(td => td.innerText);
        csvContent += rowData.join(",") + "\n";
    });

    // Create a Blob object with the CSV data
    var blob = new Blob([csvContent], { type: "text/csv" });

    // Create a temporary anchor element
    var link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = "table.csv"; // Name of the file to download
    link.click();
});
        </script>


        <!-- Add your list of students here -->
        <div class="filter-div">
            <label for="all">
                <input type="checkbox" name="all" id="all" onchange="checkall()">
                All
            </label>

            <label for="class"><input type="checkbox" name="class" id="class">
                Class
            </label>

            <label for="subject"><input type="checkbox" name="subject" id="subject">
                Subject
            </label>

            <label for="scholar_no"><input type="checkbox" name="scholar_no" id="scholar_no">
                Scollar No
            </label>

            <label for="student_name"><input type="checkbox" name="student_name" id="student_name">
                Student Name
            </label>


            <label for="mother_name"><input type="checkbox" name="mother_name" id="mother_name">
                Mother Name
            </label>


            <label for="father_name"><input type="checkbox" name="father_name" id="father_name">
                Father Name
            </label>

            <label for="phone_no"><input type="checkbox" name="phone_no" id="phone_no">
                Phone No
            </label>

            <label for="alternate_no"><input type="checkbox" name="alternate_no" id="alternate_no">
                Alternate No
            </label>

            <label for="email_id"><input type="checkbox" name="email_id" id="email_id">
                Email id
            </label>

            <label for="dob"><input type="checkbox" name="dob" id="dob">
                dob
            </label>

            <label for="caste"><input type="checkbox" name="caste" id="caste">
                    Caste
            </label>


            <label for="caste_cer_no"><input type="checkbox" name="caste_cer_no" id="caste_cer_no">
                Caste cer. no
            </label>

            <label for="cast_issue_date"><input type="checkbox" name="cast_issue_date" id="cast_issue_date">
                cast Issue Date
            </label>


            <label for="ssmid"><input type="checkbox" name="ssmid" id="ssmid">
                ssmid
            </label>

            <label for="family_id"><input type="checkbox" name="family_id" id="family_id">
                family id
            </label>

            <label for="aadhar_no"><input type="checkbox" name="aadhar_no" id="aadhar_no">
                Aadhar no
            </label>

            <label for="priv_class"><input type="checkbox" name="priv_class" id="priv_class">
                Priv. Class %
            </label>


            <label for="additional_subject"><input type="checkbox" name="additional_subject" id="additional_subject">
                Additional Subject
            </label>


            <label for="family_income"><input type="checkbox" name="family_income" id="family_income">
                Family Income
            </label>

            <label for="income_cert_no"><input type="checkbox" name="income_cert_no" id="income_cert_no">
                Income cert. no
            </label>


            <label for="income_issue_date"><input type="checkbox" name="income_issue_date" id="income_issue_date">
                Income issue date
            </label>


            <label for="bank_ac"><input type="checkbox" name="bank_ac" id="bank_ac">
                Bank Ac No.
            </label>


            <label for="bank_account_name"><input type="checkbox" name="bank_account_name" id="bank_account_name">
                Bank Account Name
            </label>

            <label for="ifsc_code"><input type="checkbox" name="ifsc_code" id="ifsc_code">
                Ifsc Code
            </label>

            <label for="address"><input type="checkbox" name="address" id="address">
                Address
            </label>

            <label for="remark"><input type="checkbox" name="remark" id="remark">
                Remark
            </label>

            <label for="student_image"><input type="checkbox" name="student_image" id="student_image">
                Student Image
            </label>
        <div class="search-div">
            <div>
                <select name="" id="" class="entry-per-page">
                    <option value="">10</option>
                    <option value="">50</option>
                    <option value="">100</option>
                    <option value="">All</option>
                </select>
            </div>
            <div>  
                <input type="text" id="searchInput" placeholder="Search...">
                <!-- <button type="button" onclick="searchFunction()">
                <img src="https://cdn-icons-png.flaticon.com/512/48/48981.png" alt="Search Icon" width="20" height="20">
                </button> -->
            </div>
        </div></div>

        

        <div class="table-div">
            <table id="myTable">                
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Student Image</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Scholar No</th>
                        <th>Student Name</th>
                        <th>Mother Name</th>
                        <th>Father Name</th>
                        <th>Phone No</th>
                        <th>Alternate No</th>
                        <th>Email id</th>
                        <th>dob</th>
                        <th>Caste</th>
                        <th>Caste cer. no</th>
                        <th>cast Issue Date</th>
                        <th>ssmid</th>
                        <th>family id</th>
                        <th>Aadhar no</th>
                        <th>Priv. Class %</th>
                        <th>Additional Subject</th>
                        <th>Family Income</th>
                        <th>Income cert. no</th>
                        <th>Income issue date</th>
                        <th>Bank Ac No.</th>
                        <th>Bank Account Name</th>
                        <th>Ifsc Code</th>
                        <th>Address</th>
                        <th>Remark</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

                        // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SELECT statement
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

$count = 1;

// Check if there are any rows returned
echo "<tr>";
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Access data from $row variable
        // For example:
        echo "<td>". $count . "</td>".
        "<td>" . $row["student_image"] . "</td>".
        "<td>" . $row["select_class"] . "</td>".
        "<td>" . $row["select_subject"] . "</td>". 
        "<td>" . $row["scholar_number"] . "</td>". 
        "<td>" . $row["student_name"] . "</td>". 
        "<td>" . $row["mother_name"] . "</td>". 
        "<td>" . $row["father_name"] . "</td>".  
        "<td>" . $row["phone_number"] . "</td>". 
        "<td>" . $row["alt_number"] . "</td>". 
        "<td>" . $row["email_id"] . "</td>". 
        "<td>" . $row["date_of_birth"] . "</td>". 
        "<td>" . $row["caste"] . "</td>". 
        "<td>" . $row["caste_certificate_number"] . "</td>". 
        "<td>" . $row["caste_certificate_issue_date"] . "</td>". 
        "<td>" . $row["samagra_id"] . "</td>". 
        "<td>" . $row["family_id"] . "</td>". 
        "<td>" . $row["aadhar_number"] . "</td>". 
        "<td>" . $row["old_class_percentage"] . "</td>". 
        "<td>" . $row["additional_subject"] . "</td>". 
        "<td>" . $row["family_income"] . "</td>". 
        "<td>" . $row["income_certificate_number"] . "</td>". 
        "<td>" . $row["income_certificate_issue_date"] . "</td>". 
        "<td>" . $row["bank_account_name"] . "</td>". 
        "<td>" . $row["ifsc_code"] . "</td>". 
        "<td>" . $row["address"] . "</td>". 
        "<td>" . $row["remark"] . "</td>"
        ;

        // Output other fields as needed
        ++$count;
    }
} else {
    echo "No records found";
}

// Close connection
$conn->close();

                        ?>
                    </tr>
                </tbody>
                
            </table>
        </div>

    </div>
    <script>
        <?php include "static/script/script.js"; ?>
        
        function checkall() {
            var allCheckBox = document.getElementById("all");
            var checkboxesarray = document.querySelectorAll('input[type="checkbox"]');
    
            for (var i = 0; i < checkboxesarray.length; i++) {
                checkboxesarray[i].checked = allCheckBox.checked;
            }
        }
    </script>
</body>
</html>

