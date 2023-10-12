<?php
include_once('Connection1.php');
mysqli_select_db($conn, "skillhiretesting");
if(isset($_POST['submit'])){
    $roll = $_POST['roll'];
    $query = $_POST['query'];

    $sql = "insert into `contact` (sRollNo, Query)
    values('$roll', '$query')";
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "Data inserted successfully";
        //header('location:Jobs.php');
        header('location:querySuccess.php');
    }else{
        //die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Contact us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center mt-5">Feel Free to Contact Us :)</h2>
  <form method = "post">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="form-group">
          <label for="roll">Roll No:</label>
          <input type="text" class="form-control" id="roll" placeholder="Enter Roll No" name="roll" required>
        </div>
        <div class="form-group">
          <label for="query">Query:</label>
          <input type="text" class="form-control" id="query" placeholder="Enter the Query" name="query" required>
        </div>
    <div class="row justify-content-center">
      <div class="col-md-6 text-center mt-4">
        <!-- <button type="Back" name="back" class="btn btn-danger">Submit</button> -->
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
