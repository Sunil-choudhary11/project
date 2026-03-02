<?php 
session_start(); 
if(!isset($_SESSION['admin'])){
    header("Location: login.php"); 
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand" href="dashboard.php">Student Management</a>
<div>
<a href="dashboard.php" class="btn btn-outline-light me-2">Dashboard</a>
<a href="add_student.php" class="btn btn-outline-light me-2">Add Student</a>
<a href="view_students.php" class="btn btn-outline-light me-2">Students</a>
<a href="search_students.php" class="btn btn-outline-light me-2">Search</a>
<a href="view_marks.php" class="btn btn-outline-light me-2">Results</a>
<a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</div>
</nav>