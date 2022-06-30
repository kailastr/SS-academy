<?php 
ob_start();
session_start();
if(isset( $_SESSION['valid']))
{
$title = "Messages";
require_once('admin-header.php'); 
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>

<body>

<table id = "myTable" class = "table table-bordered " style = "width:100%">
<thead>
<tr>
    <th>Sno.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Comments</th>
</tr>
</thead>
<tbody>


<?php
$i=1;
$sql = "SELECT * FROM message";

$result = $conn->query($sql);
if($result){
if ($result -> num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?> 
<tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row["first_name"];?> <?php $row["last_name"];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['comments'];?></td>
</tr>
<?php $i++; }}} ?>
</table></body>
<?php require_once('admin-footer.php'); }
else
{
    header("Location:admin/admin-login.php");
}
?>