<!DOCTYPE html>
<html>
<head>
<title>Student Management System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
html, body {
    height: 100%;
    margin: 0;
}

body {
    display: flex;
    flex-direction: column;
    background: #f5f7fa;
    font-family: 'Segoe UI', sans-serif;
}

/* Main content takes remaining space */
.main-content {
    flex: 1;
}

/* Cards */
.card {
    border-radius: 12px;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 6px 25px rgba(0,0,0,0.15);
}

/* Footer */
.footer {
    background: #000;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    position: relative;
}

/* Contact popup */
.contact-box {
    display: none;
    position: absolute;
    bottom: 60px;
    left: 50%;
    transform: translateX(-50%);
    background: #222;
    color: #fff;
    padding: 10px 15px;
    border-radius: 8px;
    font-size: 14px;
    width: 250px;
}

/* Show on hover */
.contact-link:hover + .contact-box {
    display: block;
}

/* Footer links */
.footer a {
    color: #bbb;
    text-decoration: none;
}

.footer a:hover {
    color: #fff;
}
</style>

</head>

<body>

<div class="main-content">

<div class="container mt-5">

    <div class="text-center mb-4">
        <h2 class="fw-bold">Student Management System</h2>
        <p class="text-muted">Select Login Type</p>
    </div>

    <div class="row justify-content-center">

        <!-- Admin Card -->
        <div class="col-md-4 mb-3">
            <div class="card shadow text-center p-4">
                <h4>👨‍💼 Admin</h4>
                <p class="text-muted">Manage Students & Marks</p>
                <a href="login.php" class="btn btn-primary w-100">Admin Login</a>
            </div>
        </div>

        <!-- Student Card -->
        <div class="col-md-4 mb-3">
            <div class="card shadow text-center p-4">
                <h4>🎓 Student</h4>
                <p class="text-muted">View Your Result</p>
                <a href="student_login.php" class="btn btn-success w-100">Student Login</a>
            </div>
        </div>

    </div>

</div>

</div>

<!-- Footer -->
<div class="footer">
    <p class="mb-1">© 2026 Student Management System</p>

    <div>
        <a href="#">Home</a> |
        <a href="#">About Us</a> |
        
        <!-- Contact with hover popup -->
        <span class="contact-link">Contact</span>
        <div class="contact-box">
            📧 Email: sunil@gmail.com <br>
            📞 Phone: +91 9876543210
        </div>
        
        |
        <a href="#">Privacy Policy</a>
    </div>

    <p class="mt-2 small">Developed by Sunil Choudhary</p>
</div>

</body>
</html>
