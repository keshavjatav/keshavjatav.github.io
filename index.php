<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, rgba(63, 81, 181, 0.9), rgba(0, 172, 193, 0.9)), url('background-image.jpg');
            background-size: cover;
            background-blend-mode: overlay;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            width: 300px;
            text-align: left;
        }
        
        h2 {
            /* color: #fff;
             */
             color:rgba(0, 0, 0, 0.4);
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            color: #fff;
            display: block;
            margin-bottom: 6px;
        }

        /* Centering user type dropdown */
        #user_type {
            margin: 0 auto;
            display: block;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 30px);
            padding: 8px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            outline: none;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            position: relative;
        }

        .show-password-checkbox {
            position: absolute;
            right: 5px;
            bottom: 5px;
            cursor: pointer;
            opacity: 0;
            transform: translateY(50%);
        }

        .show-password-icon {
            position: absolute;
            right: 5px;
            bottom: 5px;
            cursor: pointer;
            color: #ccc;
        }

        .show-password-icon:hover {
            color: #777;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #2196F3;
            color: #fff;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        
        input[type="submit"]:hover {
            background-color: #0d47a1;
        }
        
        .forgot-password {
            text-align: right;
            margin-bottom: 10px;
            color: #fff;
        }

        .register-now {
            text-align: center;
            margin-top: 10px;
        }
        
        .register-now a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="dashboard.php" method="post">
            <label for="user_type" style="display: block;">User Type:</label>
            <select id="user_type" name="user_type" onchange="togglePasswordField()">
                <option value="admin">Admin</option>
                <option value="teacher">Teacher</option>
                <option value="guest">Guest</option>
                <option value="student">Student</option>
            </select>

            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" placeholder="Roll No. / Email-id">

            <label for="password">Password:</label>
            <div style="position: relative;">
                <input type="password" id="password" name="password" placeholder="date of birth(dd/mm/yyyy)">
                <label for="showPassword" class="show-password-icon">&#128065;</label>
                <input type="checkbox" class="show-password-checkbox" id="showPassword">
            </div>
            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>
            <input type="submit" value="Login">
        </form>
        <div class="register-now">
            <a href="#">Register now</a>
        </div>
    </div>

    <script>
    function togglePasswordField() {
        var userType = document.getElementById("user_type").value;
        var usernameField = document.getElementById("username");
        var passwordField = document.getElementById("password");
        
        // Reset placeholder text for username field
        usernameField.placeholder = '';

        if (userType === "student") {
            usernameField.placeholder = 'Roll No. / Email Id';
            usernameField.value = ''; // Clear any existing value
            passwordField.value = ''; // Clear password field value
            passwordField.disabled = false; // Enable password field
        } else if (userType === "teacher") {
            usernameField.placeholder = 'Teacher Unique Id / Email Id';
            usernameField.value = ''; // Clear any existing value
            passwordField.value = ''; // Clear password field value
            passwordField.disabled = false; // Enable password field
        } else if (userType === "admin") {
            passwordField.disabled = false; // Enable password field
        } else if (userType === "guest") {
            usernameField.value = 'guest';
            usernameField.disabled = true; // Disable username field
            passwordField.value = "Guest User - No Password Required";
            passwordField.disabled = true; // Disable password field
        }
    }

    document.getElementById("showPassword").addEventListener("change", function() {
        var passwordField = document.getElementById("password");
        passwordField.type = this.checked ? "text" : "password";
    });
</script>

</body>
</html>
