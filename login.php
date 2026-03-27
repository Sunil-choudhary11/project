<?php 
session_start();
include 'config.php'; 
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

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
    <h2>Admin Login</h2>

    <form method="POST">
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
        <button name="login" class="btn btn-login w-100">Log In</button>
    </form>

    <a href="signup.php" class="signup-link">Create Account</a>

    <?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $res = mysqli_query($conn,"SELECT * FROM admin WHERE email='$email'");
        $user = mysqli_fetch_assoc($res);

        if($user && password_verify($password,$user['password'])){
            $_SESSION['admin'] = $email;
            header("Location: dashboard.php");
        }else{
            echo "<div class='alert alert-danger mt-2'>Invalid Login</div>";
        }
    }
    ?>
</div>

</body>
</html>
