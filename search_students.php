<?php 
include 'config.php'; 
include 'navbar.php'; 

// safety check
if(!isset($conn)){
    die("Database connection error!");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Search Students</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<h2>Search Student by ID</h2>

<form method="GET" class="mb-3">
    <input type="number" name="search" class="form-control" placeholder="Enter student ID">
</form>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Subject1</th>
<th>Subject2</th>
<th>Subject3</th>
<th>Total</th>
<th>Percentage</th>
<th>Grade</th>
</tr>

<?php
if(isset($_GET['search'])){
    $search = $_GET['search'];

    // ✅ JOIN student + marks
    $query = "
        SELECT students.*, 
               marks.subject1, marks.subject2, marks.subject3,
               marks.total, marks.percentage, marks.grade
        FROM students
        LEFT JOIN marks ON students.id = marks.student_id
        WHERE students.id = '$search'
    ";

    $res = mysqli_query($conn, $query);

    if($res && mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)){
?>

<tr>
<td><?= $row['id']; ?></td>
<td><?= $row['name']; ?></td>
<td><?= $row['email']; ?></td>
<td><?= $row['course']; ?></td>

<td><?= $row['subject1'] ?? 'N/A'; ?></td>
<td><?= $row['subject2'] ?? 'N/A'; ?></td>
<td><?= $row['subject3'] ?? 'N/A'; ?></td>
<td><?= $row['total'] ?? 'N/A'; ?></td>
<td><?= $row['percentage'] ?? 'N/A'; ?></td>
<td><?= $row['grade'] ?? 'N/A'; ?></td>
</tr>

<?php 
        }
    } else {
        echo "<tr><td colspan='10' class='text-center text-danger'>No student found</td></tr>";
    }
}
?>

</table>

</body>
</html>
