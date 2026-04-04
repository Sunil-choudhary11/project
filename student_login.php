<?php 
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background: linear-gradient(135deg, #9fdff4, #53f94d);
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

.extra-text {
    margin-top: 15px;
    font-size: 14px;
}
</style>

</head>

<body>

<div class="login-box">
    <h2>Student Login</h2>

    <form method="POST">
        <input type="email" name="email" class="form-control mb-2" placeholder="Enter Gmail" required>
        <button name="login" class="btn btn-login w-100">Log In</button>
    </form>

    <div class="extra-text">
        Enter your registered email to view results
    </div>

    <?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];

        // 🔹 Check student by email
        $res = mysqli_query($conn, "SELECT * FROM students WHERE email='$email'");

        if(mysqli_num_rows($res) > 0){
            $row = mysqli_fetch_assoc($res);

            $_SESSION['student_id'] = $row['id'];

            header("Location: student_dashboard.php");
        } else {
            echo "<div class='alert alert-danger mt-2'>Invalid Email</div>";
        }
    }
    ?>
</div>

</body>
</html>
