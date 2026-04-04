<?php 
include 'config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Signup</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(135deg, #67e1f1, #d3e5ed);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', sans-serif;
}

.login-box {
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    width: 350px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    text-align: center;
}

.login-box h2 {
    font-family: cursive;
    margin-bottom: 20px;
}

.form-control {
    border-radius: 8px;
    padding: 10px;
}

.btn-login {
    background: #0095f6;
    color: #fff;
    border-radius: 8px;
    font-weight: bold;
}

.btn-login:hover {
    background: #007cd1;
}

.signup-link {
    margin-top: 15px;
    display: block;
}
</style>

</head>

<body>

<div class="login-box">
    <h2>Admin Sign Up</h2>

    <form method="POST">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
        
        <button name="signup" class="btn btn-login w-100">Sign Up</button>
    </form>

    <a href="login.php" class="signup-link">Already have account?</a>

    <?php
    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Gmail validation
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $email)) {
            echo "<div class='alert alert-danger mt-2'>Only Gmail (@gmail.com) emails are allowed!</div>";
        } else {

            $check = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");
            if(mysqli_num_rows($check) > 0){
                echo "<div class='alert alert-warning mt-2'>Email already registered!</div>";
            } else {
                mysqli_query($conn,"INSERT INTO admin(username,email,password) VALUES('$username','$email','$password')");
                echo "<div class='alert alert-success mt-2'>Signup Successful</div>";
            }
        }
    }
    ?>

</div>

</body>
</html>
