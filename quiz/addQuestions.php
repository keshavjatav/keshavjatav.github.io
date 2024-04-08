<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="apple-touch-icon" sizes="180x180" href="static/icons/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="static/icons/favicon//favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="static/icons/favicon//favicon-16x16.png">
	<link rel="manifest" href="/web/static/icons/favicon//site.webmanifest">
	<link rel="mask-icon" href="/web/static/icons/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
    <link rel="stylesheet" href="/web/static/css/style.css">
    <link rel="stylesheet" href="/web/static/css/student.css">
    <script src="/web/static/script/script.js"></script>
    <script src="/web/static/script/addquiz.js"></script>
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
            <a href="quiz/startQuiz.php">Start Quize</a>
            <a href="quiz/addQuiz.php">Add Quiz</a>
            <a href="updatequiz.php">Update Quize</a>
            <a href="deletequiz.php">delete Quize</a>
            <a href="listquiz.php">List Quize</a>
        </div>
        <hr>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="/web/index.php">Logout</a>
    </div>

    <div class="content" id="main">
        <span id="menu-icon" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <div id="head-div"><p>Add Quiz</p></div>
        <div class="main-containt">
        <form action="" id="quiz-details-form">
    <div id="sub-containt1">
        <!-- <div class="entry-div">
            <label for="title">Title</label>
            <input type="text" id="title" placeholder="Enter The quiz Title">
        </div>
        
        <div class="entry-div">
            <label for="yourname">Your Name</label>
            <input type="text">
        </div>

        <div class="entry-div">
            <label for="que-count">No. of Questions</label>
            <input type="text" name="que-count" id="que-count">
        </div>

        <div class="entry-div">
            <button id="generate-button">Generate</button>
        </div> -->
    </div>
     
        </div>        
    </div>
</body>
</html>
