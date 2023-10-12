<?php 
include_once('Connection1.php');
mysqli_select_db($conn, "skillhiretesting"); 
$query="select * from jobs"; 
$result=mysqli_query($conn, $query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
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
      
        <title> Fetching Data From Database </title> 
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
                        <a class="nav-link" href="coordinator.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="aboutCoordinator.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="detTemp.php">Records Extraction</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="Jobs.php">Job Notifier</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="filteration1.php">Filteration</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                            <th> ID </th> 
                            <th> Company </th> 
                            <th> Role </th> 
                            <th> Skill Requirement 1 </th>
                            <th> Skill Requirement 2 </th> 
                            <th> Skill Requirement 3 </th> 
                            <th> Location </th>
                            <th> CTC </th>
                            <th> Eligibility </th>
                            <th> Operation</th>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $JobID = $row['JID'];
                                        $JobCompany = $row['company'];
                                        $JobRole = $row['role'];
                                        $JobSkillReq1 = $row['skillReq1'];
                                        $JobSkillReq2 = $row['skillReq2'];
                                        $JobSkillReq3 = $row['skillReq3'];
                                        $JobLocation = $row['location'];
                                        $JobCTC = $row['CTC'];
                                        $JobEligibility = $row['eligibility'];
                            ?>
                                    <tr>
                                        <td><?php echo $JobID ?></td>
                                        <td><?php echo $JobCompany ?></td>
                                        <td><?php echo $JobRole ?></td>
                                        <td><?php echo $JobSkillReq1 ?></td>
                                        <td><?php echo $JobSkillReq2 ?></td>
                                        <td><?php echo $JobSkillReq3 ?></td>
                                        <td><?php echo $JobLocation ?></td>
                                        <td><?php echo $JobCTC ?></td>
                                        <td><?php echo $JobEligibility ?></td>
                                        <td>
                                            <button class = "btn btn-danger"><a href="deleteJob.php?deleteid=<?php echo $JobID ?>" class = "text-light">Delete</a></button>
                                        </td>
                                    </tr>
                            <?php 
                                    }
                            ?>  
                        </table>
                        <!--<a href="#" class="btn btn-pencil">Add Job</a>
                        <a href="#" class="btn btn-danger">Delete Job</a>-->
                    </div>
                    <center>
                        <br>
                        <a href="newJob.php" class="btn btn-primary">Add Job</a>
                    </center>
                </div>
            </div>
        </div>
    
</body>
	</html>