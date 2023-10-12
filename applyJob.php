<?php
session_start();
include_once('Connection1.php');
mysqli_select_db($conn, "SkillHireTesting"); 
$user=$_SESSION["user"];
$uid=$_POST["uid"];
// $priority="";

// $query="select * from skills where sRollNo like '$user'"; 
// $result=mysqli_query($conn, $query); 

$query1="insert into applicants (JobID,sRollNo) values ('$uid', '$user')"; 
$result1=mysqli_query($conn, $query1); 
if($result1==1)
{
    echo "true";
}
else{
    echo "false";
}



?>