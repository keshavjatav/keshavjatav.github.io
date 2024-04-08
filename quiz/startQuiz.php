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
	<meta name="msapplication-TileColor" content="#da532c">
    <link rel="stylesheet" href="static/css/style.css">
    <script src="/web/static/script/script.js"></script>
	<meta name="theme-color" content="#ffffff">

    <title>Responsive Side Navigation</title>
</head>
<body>
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
        <hr>
        <a href="dashboard.php">DashBoard</a>
        <hr>
        <a href="javascript:void(0)" onclick="showStudentSubnav()">Student Module 
        <!-- <span class="dropdown-icon">&#9662;</span> -->
    </a>
        <div class="subnav hidden" id="student-module">
        <a href="student/addstudent.php">Add Student</a>
            <a href="student/updatestudent.php">Update Student</a>
            <a href="student/deletestudent.php">Delete Student</a>
            <a href="student/liststudents.php">List Students</a>
        </div>
        <hr>
        <a href="javascript:void(0)" onclick="showTeacherSubnav()">Teacher Module</a>
        <div class="subnav hidden" id="teacher-module">
            <a href="#">Add Teacher</a>
            <a href="#">Update Teacher</a>
            <a href="#">Delete Teacher</a>
            <a href="#">List Teacher</a>
        </div>
        <hr>
        <a href="javascript:void(0)" onclick="showquizSubnav()">Quize</a>
        <div class="subnav hidden" id="quiz-module">
            <a href="addquiz.php">Start Quize</a>
            <a href="updatequiz.php">Update Quize</a>
            <a href="deletequiz.php">delete Quize</a>
            <a href="listquiz.php">List Quize</a>
        </div>
        <hr>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="/web/index.php">Logout</a>
    </div>

    <div class="quiz-content">
    <h2>Quiz Title</h2>
    <p>This is a quiz about...</p>
    
    <form id="quiz-form">
        <h3>Question 1</h3>
        <p>What is the capital of France?</p>
        <input type="radio" name="q1" value="paris"> Paris<br>
        <input type="radio" name="q1" value="london"> London<br>
        <input type="radio" name="q1" value="berlin"> Berlin<br>
        <input type="radio" name="q1" value="rome"> Rome<br>
        
        <h3>Question 2</h3>
        <p>What is the largest planet in our solar system?</p>
        <input type="radio" name="q2" value="mars"> Mars<br>
        <input type="radio" name="q2" value="venus"> Venus<br>
        <input type="radio" name="q2" value="jupiter"> Jupiter<br>
        <input type="radio" name="q2" value="saturn"> Saturn<br>
        
        <!-- Add more questions here -->
        
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
