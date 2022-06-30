<?php 
ob_start();
session_start();
if(isset( $_SESSION['valid']))
{
$title = "Admin Dashboard";
require_once('admin-header.php'); 
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admission";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>

<body>
<h1 style="color:#E49653;text-align:center;">Students Registered </h1>
<table id = "myTable" class = "table table-bordered " style = "width:100%">
<thead>
<tr>
    <th>Sno.</th>
    <th>Name</th>
    <th>Number</th>
    <th>Parent Name</th>
    <th>Number</th>
    <th>Address</th>
    <th>Standard</th>
</tr>
</thead>
<tbody>


<?php
$i=1;
$sql = "SELECT * FROM admission";

$result = $conn->query($sql);
if($result){
if ($result -> num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?> 
<tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row["firstname"];?> <?php echo $row["lastname"];?></td>
    <td><?php echo $row['number'];?></td>
    <td><?php echo $row['parentname'];?></td>
    <td><?php echo $row['anumber'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['standard'];?></td>
</tr>
<?php $i++; }}} ?>
</table></body>
<?php require_once('admin-footer.php'); }
else
{
    header("Location:admin/admin-login.php");
}
?>