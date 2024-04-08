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
        <span id="menu-icon" style="font-size:30px;cursor:pointer" onclick="openNav()">
        <!-- <hr class="menu-icon">
        <hr class="menu-icon">
        <hr class="menu-icon"> -->
        &#9776;
    </span>
        <!-- <button onclick="prevSlide()">Previous</button>
        <button onclick="nextSlide()">Next</button> -->
        <!-- <span></span> -->
        <!-- <p>This is the content area. You can add your content here.</p> -->
        <div class="main-containt">
            <div id="slideshow">
                <img class="slide" src="static/images/pic1.jpeg" alt="Image 1">
                <img class="slide" src="static/images/pic2.jpeg" alt="Image 1">
                <img class="slide" src="static/images/pic3.jpeg" alt="Image 1">
                <!-- <img class="slide" src="static/images/1.jpg" alt="Image 1">
                <img class="slide" src="static/images/2.jpg" alt="Image 2">
                <img class="slide" src="static/images/3.jpg" alt="Image 3">
                <img class="slide" src="static/images/4.jpg" alt="Image 3">
                <img class="slide" src="static/images/5.jpg" alt="Image 3">
                <img class="slide" src="static/images/6.jpg" alt="Image 3">
                <img class="slide" src="static/images/7.jpg" alt="Image 3">
                <img class="slide" src="static/images/8.jpg" alt="Image 3">
                <img class="slide" src="static/images/9.jpg" alt="Image 3"> -->
            </div>
        </div>

        <div class="quick-info-div">
            <div class="info-div">Total Student</div>
            <div class="info-div"></div>
            <div class="info-div"></div>
            <div class="info-div"></div>
            <div class="info-div"></div>
            <div class="info-div"></div>
            <div class="info-div"></div>
            <div class="info-div"></div>
            <div class="info-div"></div>
            <div class="info-div"></div>
        </div>        
    </div>
</body>
</html>
