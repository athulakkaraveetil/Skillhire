<?php
include_once('Connection1.php');
mysqli_select_db($conn, "skillhiretesting");
if(isset($_POST['submit'])){
    $comp = $_POST['comp'];
    $role = $_POST['role'];
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill2'];
    $skill3 = $_POST['skill3'];
    $loc = $_POST['loc'];
    $ctc = $_POST['ctc'];
    $elgi = $_POST['elgi'];

    $sql = "INSERT INTO `jobs` (company, role, skillReq1, skillReq2, skillReq3, location, CTC, eligibility)
    values('$comp', '$role', '$skill1', '$skill2', '$skill3', '$loc', '$ctc', '$elgi')";
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('location:Jobs.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>New Job</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center mt-5">Adding New Job</h2>
  <form method = "post">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="form-group">
          <label for="comp">Company:</label>
          <input type="text" class="form-control" id="comp" placeholder="Enter Company name" name="comp" required>
        </div>
        <div class="form-group">
          <label for="role">Role:</label>
          <input type="text" class="form-control" id="role" placeholder="Enter Company role" name="role" required>
        </div>
        <div class="form-group">
          <label for="skill1">Skill 1:</label>
          <select id="skill1" name="skill1">
            <option value="C">C</option>
            <option value="Java">Java</option>
            <option value="MySql">MySql</option>
            <option value="HTML/CSS">HTML/CSS</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
            <option value="Machine Learning">Machine Learning</option>
            <option value="Communication">Communication</option>
            <option value="Data Structures">Data Structures</option>

          </select>
        </div>
        <div class="form-group">
            <label for="skill2">Skill 2:</label>
            <select id="skill2" name="skill2">
                <option value="Java">Java</option>
                <option value="MySql">MySql</option>
                <option value="HTML/CSS">HTML/CSS</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Python">Python</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Communication">Communication</option>
                <option value="Data Structures">Data Structures</option>
                <option value="C">C</option>
              </select>
          </div>
          <div class="form-group">
            <label for="skill3">Skill 3:</label>
            <select id="skill3" name="skill3">
                <option value="MySql">MySql</option>
                <option value="HTML/CSS">HTML/CSS</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Python">Python</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Communication">Communication</option>
                <option value="Data Structures">Data Structures</option>
                <option value="C">C</option>
                <option value="Java">Java</option>
              </select>
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label for="loc">Location:</label>
            <input type="text" class="form-control" id="loc" placeholder="Job Location" name="loc" required>
          </div>
        <div class="form-group">
          <label for="ctc">CTC:</label>
          <input type="number" class="form-control" id="ctc" placeholder="CTC Offered" name="ctc" required>
        </div>
        <div class="form-group">
          <label for="elgi">Eligibility:</label>
          <input type="number" class="form-control" id="elgi" placeholder="Enter Eligibility criteria" name="elgi" required>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 text-center mt-4">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
