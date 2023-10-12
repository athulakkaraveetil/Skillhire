<?php 
$_SESSION["user"]="2";
$user=$_SESSION["user"];
include_once('Connection1.php');
mysqli_select_db($conn, "SkillHireTesting"); 
$query="select * from p"; 
$result=mysqli_query($conn, $query); 


?> 

<!DOCTYPE html> 
<html> 
	<head> 
    <style>
            td{
                color:white;
                font-size:14px;
               <!-- font-weight:bold;-->
            }
           th{
            color:white;
                font-size:20px;
                font-weight:bold;
           }
            *{
                background:#001431
                
            }
            h4{color:white;font-weight:bold}



            </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" a href="CSS/bootstrap.css"/>

        <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>SkillHire</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

        <title> Filter </title> 
	</head> 
	<body class="bg-dark">
    <div class="header_section2">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="images/SkillHire.jpg" width="100" height="200"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="student.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="aboutStudent.html">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Skill-Based Jobs</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="AllJobs.php">All Jobs</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="prevApp.php">Applications</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
<div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>COMPANY</th>
                                    <th>ROLE</th>
                                   
                                    <th>CTC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    $query=("call tt($user)");

                                        $query_run = mysqli_query($conn, $query);
                                    


                                    if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                <td><?= $items['company']; ?></td>

                                                    <td><?= $items['role']; ?></td>
                                                    
                                                    <td><?= $items['CTC']; ?></td>
                                                   
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    
                               ?>
                            </tbody>
                        </table>
                    </div>
                    <div align:left>
                       
                        <a href="#" class="btn btn-danger"> PRINT</a>
                                </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    
<!--content endd.............................-->
</body>
	</html>