<?php include 'config.php'; include 'navbar.php'; 
$student_id = $_GET['id']; ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Marks</title>
</head>
<body class="container mt-4">
<h2>Add Marks</h2>
<form method="POST">
<input type="number" name="s1" class="form-control mb-2" placeholder="Subject 1" required>
<input type="number" name="s2" class="form-control mb-2" placeholder="Subject 2" required>
<input type="number" name="s3" class="form-control mb-2" placeholder="Subject 3" required>
<button name="save" class="btn btn-success">Save Marks</button>
</form>

<?php
if(isset($_POST['save'])){
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];

$total=$s1+$s2+$s3;
$avg=$total/3;
$percentage=($total/300)*100;

if($percentage>=90) $grade="A+";
elseif($percentage>=75) $grade="A";
elseif($percentage>=60) $grade="B";
elseif($percentage>=50) $grade="C";
else $grade="F";

mysqli_query($conn,"INSERT INTO marks(student_id,subject1,subject2,subject3,total,average,percentage,grade)
VALUES('$student_id','$s1','$s2','$s3','$total','$avg','$percentage','$grade')");

echo "<div class='alert alert-success mt-2'>Marks Saved</div>";
}
?>
</body>
</html>