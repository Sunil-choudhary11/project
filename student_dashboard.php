<?php
include 'config.php';
session_start();

if(!isset($_SESSION['student_id'])){
    header("Location: student_login.php");
    exit();
}
$id = $_SESSION['student_id'];

// 🔹 JOIN student + marks
$query = "
SELECT students.*, 
       marks.subject1, marks.subject2, marks.subject3,
       marks.total, marks.percentage, marks.grade
FROM students
LEFT JOIN marks ON students.id = marks.student_id
WHERE students.id = '$id'
";

$res = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h3>Welcome, <?= $row['name']; ?></h3>

<table class="table table-bordered mt-3">
<tr><th>ID</th><td><?= $row['id']; ?></td></tr>
<tr><th>Name</th><td><?= $row['name']; ?></td></tr>
<tr><th>Email</th><td><?= $row['email']; ?></td></tr>
<tr><th>Course</th><td><?= $row['course']; ?></td></tr>
</table>

<h4>Marks</h4>

<table class="table table-bordered">
<tr>
<th>Subject1</th>
<th>Subject2</th>
<th>Subject3</th>
<th>Total</th>
<th>Percentage</th>
<th>Grade</th>
</tr>

<tr>
<td><?= $row['subject1'] ?? 'N/A'; ?></td>
<td><?= $row['subject2'] ?? 'N/A'; ?></td>
<td><?= $row['subject3'] ?? 'N/A'; ?></td>
<td><?= $row['total'] ?? 'N/A'; ?></td>
<td><?= $row['percentage'] ?? 'N/A'; ?></td>
<td><?= $row['grade'] ?? 'N/A'; ?></td>
</tr>
</table>

<a href="logout.php" class="btn btn-danger">Logout</a>

</body>
</html>
