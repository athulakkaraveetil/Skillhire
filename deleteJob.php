<?php
include_once('Connection1.php');
mysqli_select_db($conn, "skillhiretesting");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "delete from `jobs` where JID=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "Data deleted successfully";
        header('location:Jobs.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>