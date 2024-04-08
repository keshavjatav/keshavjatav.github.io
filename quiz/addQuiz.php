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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="quiz-details-form">
    <div id="sub-containt1">
        <div class="entry-div">
            <label for='quiz_title'>Title</label>
            <input type="text" name='quiz_title' id='quiz_title' placeholder="Enter The quiz Title">
        </div>
        
        <div class="entry-div">
            <label for="quiz_description" id= 'quiz_description'" >Description</label>
            <input type="text" name="quiz_description" id= 'quiz_description'>
        </div>

        <div class="entry-div">
            <label for="que-count">No. of Questions</label>
            <input type="text" name="que-count" id="que-count">
        </div>

        <div class="entry-div">
        <button id="generate-button" onclick="hide_div1(event)">Generate</button>
        </div>
    </div>

    <div class="sub-containt2" id="sub-containt2">
        <!-- <div class="entry-div">
            <label for="que">Question</label>
            <textarea id="que-textarea"></textarea>
            <label for="op1">a.</label><input type="text" name="op1" id="op1">
            <label for="op1">b.</label><input type="text" name="op2" id="op2">
            <label for="op1">c.</label><input type="text" name="op3" id="op3">
            <label for="op1">d.</label><input type="text" name="op4" id="op4">
            <label for="ans">Answer</label>
            <select name="ans" id="ans" class="ans">
                <option value="a">a</option>
                <option value="b">b</option>
                <option value="c">c</option>
                <option value="d">d</option>
            </select>
        </div> -->
    </div>
</form>   
        </div>        
    </div>
</body>
</html>

<script>
    function hide_div1(event) {
    event.preventDefault(); // Prevent form submission

    var questionCount = parseInt(document.getElementById('que-count').value);
    var subContaint1 = document.getElementById('sub-containt1');
    var subContaint2 = document.getElementById('sub-containt2');
    var form = document.getElementById("quiz-details-form");

    // Hide sub-containt1
    subContaint1.style.display = 'none';

    // Clear previous questions
    subContaint2.innerHTML = '';

    // Generate new question fields
    for (var i = 1; i <= questionCount; i++) {
        var questionDiv = document.createElement('div');
        questionDiv.classList.add('entry-div');

        var questionLabel = document.createElement('label');
        questionLabel.setAttribute('for', 'que' + i);
        questionLabel.textContent = 'Question ' + i;
        questionDiv.appendChild(questionLabel);

        var questionTextarea = document.createElement('textarea');
        questionTextarea.setAttribute('name','que' + i);
        questionTextarea.setAttribute('id', 'que' + i);
        
        console.log('que' + i);
        questionDiv.appendChild(questionTextarea);

        var optionLabels = ['a', 'b', 'c', 'd'];
        for (var j = 0; j < optionLabels.length; j++) {
            var optionLabel = document.createElement('label');
            optionLabel.setAttribute('for', 'op' + (j + 1));
            optionLabel.textContent = optionLabels[j] + '.';
            questionDiv.appendChild(optionLabel);

            var optionInput = document.createElement('input');
            optionInput.setAttribute('type', 'text');
            optionInput.setAttribute('name', 'op' + (j + 1) + '-' + i);
            optionInput.setAttribute('id', 'op' + (j + 1) + '-' + i);
            questionDiv.appendChild(optionInput);
        }

        var answerLabel = document.createElement('label');
        answerLabel.setAttribute('for', 'ans' + i);
        answerLabel.textContent = 'Answer';
        questionDiv.appendChild(answerLabel);

        var answerSelect = document.createElement('select');
        answerSelect.setAttribute('name', 'ans' + i);
        answerSelect.setAttribute('id', 'ans' + i);
        answerSelect.classList.add('ans');
        // document.getElementById('ans' + i).addEventListener('change', function() {
        //     var selectedIndex = this.selectedIndex;
        //     // Assign the selected index to a hidden input field
        //     document.getElementById('selected_index' + i).value = selectedIndex;
        // });
        
        var answerOptions = ['a', 'b', 'c', 'd'];
        for (var k = 0; k < answerOptions.length; k++) {
            var option = document.createElement('option');
            option.setAttribute('value', answerOptions[k] + i);
            option.textContent = answerOptions[k];
            answerSelect.appendChild(option);
        }       

        // Append <hr> for visual separation
        var hrline = document.createElement('hr');
        hrline.setAttribute('id','que-hr-line');

        var submit_button = document.createElement('button');
        submit_button.setAttribute('type','submit');
        submit_button.setAttribute('value','Submit');
        submit_button.innerText= 'Submit';

        var entry_div = document.createElement("div");
        entry_div.setAttribute('class', 'entry-div');

        entry_div.appendChild(submit_button);

        questionDiv.appendChild(answerSelect);
        subContaint2.appendChild(questionDiv);
        subContaint2.appendChild(hrline);
        
    }
    form.appendChild(entry_div);
    
}
</script>

<style>
    #que-hr-line {
    border: none;
    height: 5px;
    background-color: rgba(0, 0, 0, 0.2); /* Change the color and opacity as needed */
    margin: 20px 0; /* Adjust the margin as needed */
    border-radius: 10px; /* Adjust the border-radius as needed */
    backdrop-filter: blur(10px); /* Add backdrop-filter for blur effect */
}

</style>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert query for Quiz table
    $quiz_id = generateRandomString(4);
    $quiz_name = isset($_POST['quiz_title']) ? $_POST['quiz_title'] : "";
    $quiz_description = isset($_POST['quiz_description']) ? $_POST['quiz_description'] : "";
    $que_count = isset($_POST['que-count']) ? intval($_POST['que-count']) : 0;

    // Only proceed if quiz title, description, and question count are set
    if (!empty($quiz_name) && !empty($quiz_description) && $que_count > 0) {
        $sql_quiz = "INSERT INTO Quiz (quiz_id, quiz_name, quiz_description) VALUES (?, ?, ?)";
        $sql_question = "INSERT INTO Question (question_id, quiz_id, question_text) VALUES (?, ?, ?)";
        $sql_option = "INSERT INTO Option (option_id, question_id, option_text, is_correct) VALUES (?, ?, ?, ?)";

        // Create prepared statements
        $quiz_stmt = $conn->prepare($sql_quiz);
        $que_stmt = $conn->prepare($sql_question);
        $opt_stmt = $conn->prepare($sql_option);

        // Check if prepared statements were created successfully
        if (!$quiz_stmt || !$que_stmt || !$opt_stmt) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters for quiz insertion
        $quiz_stmt->bind_param("sss", $quiz_id, $quiz_name, $quiz_description);

        // Execute quiz insertion
        if ($quiz_stmt->execute()) {
            echo "Quiz record inserted successfully<br>";
        } else {
            echo "Error inserting quiz record: " . $quiz_stmt->error;
        }

        // Loop through questions
        for ($i = 1; $i <= $que_count; $i++) {
            // Generate question ID
            $question_id = generateRandomString(4);

            // Get question text
            $question_text = isset($_POST['que' . $i]) ? $_POST['que' . $i] : "";

            // Only proceed if question text is set
            if (!empty($question_text)) {
                // Bind parameters for question insertion
                $que_stmt->bind_param("sss", $question_id, $quiz_id, $question_text);

                // Execute question insertion
                if ($que_stmt->execute()) {
                    echo "Question record inserted successfully<br>";

                    // Assuming you have options insertion logic here
                    for ($j = 1; $j <= 4; $j++) {
                        $option_id = generateRandomString(4);

                        // Get option text
                        $option_text = isset($_POST['op' . $j . '-' . $i]) ? $_POST['op' . $j . '-' . $i] : "";

                        // Retrieve the selected index from the form submission
                        $selectedIndex = $_POST['selected_index' . $i];

                        if($selectedIndex == ($i-1)){
                            // Check if this option is correct                        
                            $is_correct = true;
                        }
                        elseif($selectedIndex != ($i-1)){
                            $is_correct = false;
                        }                      

                        // Only proceed if option text is set
                        if (!empty($option_text)) {
                            // Bind parameters for option insertion
                            $opt_stmt->bind_param("sssi", $option_id, $question_id, $option_text, $is_correct);

                            // Execute option insertion
                            if ($opt_stmt->execute()) {
                                echo "Option record inserted successfully<br>";
                            } else {
                                echo "Error inserting option record: " . $opt_stmt->error;
                            }
                        }
                    }
                } else {
                    echo "Error inserting question record: " . $que_stmt->error;
                }
            }
        }

        // Close prepared statements
        $quiz_stmt->close();
        $que_stmt->close();
        $opt_stmt->close();
    } else {
        echo "Please fill in all required fields.";
    }

    // Close connection
    $conn->close();
}

function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>
