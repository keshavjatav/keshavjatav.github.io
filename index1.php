<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23070613619 Govt. Higher Sec. School Myana Guna M.P.</title>
    <style>
        <?php include "static/css/login.css"; ?>
    </style>
</head>
<body>

<div class="container">
    <div class="logo">Login</div>
    <div class="login-item">
        <form action="dashboard.php" target="_self" method="post" class="form form-login">

            <!-- User Type Selection -->
            <div class="form-field">
              <label>User Type</label>
            </div>
            <div class="form-field">
                
                <input type="radio" id="admin" name="user_type" value="admin" checked>
                <label for="admin">Admin</label><br>
                <input type="radio" id="teacher" name="user_type" value="teacher">
                <label for="teacher">Teacher</label><br>
                <input type="radio" id="student" name="user_type" value="student">
                <label for="student">Student</label><br>
                <input type="radio" id="guest" name="user_type" value="guest">
                <label for="guest">Guest</label><br>
            </div>

            <div class="form-field">
                <label for=""><span class="hiden"><img src="static/icons/user.png" alt=""></span></label>
                <input id="login-username" type="text" class="form-input" placeholder="Username" required>
            </div>

            <div class="form-field">
                <label for=""><span class="hiden"><img src="static/icons/pwd.png" alt=""></span></label>
                <input id="login-password" type="password" class="form-input" placeholder="Password" required>
            </div>

            <div class="form-field" id="sign-up">
                <a href="#" id="signup">Forgot Password</a>
            </div>

            <div class="form-field">
                <input type="submit" value="Log in">
            </div>

            <div class="form-field">
                <a href="#">Register Now</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
