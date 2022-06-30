<?php
session_start();


$first_name     = $_POST['first_name'];
$last_name     = $_POST['last_name'];
$email    = $_POST['email'];
$phone   = $_POST['phone'];
$comments = $_POST['comments'];

$conn = new mysqli('localhost','root','','message');
if($conn->connect_error)
{
    die('Connection Failed: '.$conn->connect_error);
}
else
{
    $sql = "insert into message(first_name, last_name, email, phone, comments)
    values('$first_name', '$last_name', '$email', '$phone', '$comments')";
    if (mysqli_query($conn, $sql)) 
    {
        $_SESSION["successmsg"] = "Data Updated Seccessfully";
        $_SESSION["login_time_stamp"] = time(); 
        header("Location: http://localhost/SS/index.php");      }
       else
        {
        $_SESSION["successmsg"] = "Something went wrong!! Please try again with Correct Input";
        $_SESSION["login_time_stamp"] = time(); 
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
   
     
}

?>