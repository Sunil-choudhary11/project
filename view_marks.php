<?php include 'config.php'; include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Student Results</title>
<script>
function printPage(){
    window.print();
}
</script>
</head>
<body class="container mt-4">
<h2>Student Result System</h2>
<button onclick="printPage()" class="btn btn-dark mb-3">Print Result</button>
<table class="table table-bordered">
<tr>
<th>Name</th>
<th>Sub1</th>
<th>Sub2</th>
<th>Sub3</th>
<th>Total</th>
<th>Average</th>
<th>Percentage</th>
<th>Grade</th>
</tr>

<?php
$query="SELECT students.name, marks.* FROM marks 
JOIN students ON marks.student_id = students.id";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res)){
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['subject1']; ?></td>
<td><?php echo $row['subject2']; ?></td>
<td><?php echo $row['subject3']; ?></td>
<td><?php echo $row['total']; ?></td>
<td><?php echo number_format($row['average'],2); ?></td>
<td><?php echo number_format($row['percentage'],2); ?>%</td>
<td><b><?php echo $row['grade']; ?></b></td>
</tr>
<?php } ?>
</table>
</body>
</html>
