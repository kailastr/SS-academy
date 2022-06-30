<?php

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$number = $_POST['num'];
$parentname = $_POST['pname'];
$anumber = $_POST['anum'];
$address = $_POST['address'];
$standard = $_POST['standard'];

//dbconnect
$conn = new mysqli('localhost','root','','admission');
if($conn->connect_error)
{
    die('Connection Failed: '.$conn->connect_error);
}
else
{
    $sql = "insert into admission(firstname, lastname, number, parentname, anumber, address, standard)
    values('$firstname', '$lastname', $number, '$parentname', $anumber, '$address', '$standard')";
    if (mysqli_query($conn, $sql)) 
    {
      echo "<script>
      alert('Successfully Submitted');
      window.location.href='index.php';  
      </script>";
      }
       else
        {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
   
     
}

?>