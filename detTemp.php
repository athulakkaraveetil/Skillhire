<?php 
include_once('Connection1.php');
mysqli_select_db($conn, "SkillHireTesting"); 
$query="select * from skills inner join student on skills.sRollNo=student.sRollNo"; 
$result=mysqli_query($conn, $query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" a href="CSS/bootstrap.css"/>

        <title> STUDENT RECORDS </title>    
	</head> 
	<body class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5" style="width: 150%">
                        <table class="table table-bordered">
                            <tr>
                            <th> Roll Number </th> 
                            <th> First Name</th>
                            <th> Last name </th>
                            <th> Mail ID </th>
                            <th> Skill1 </th> 
                            <th> Skill2 </th> 
                            <th> Skill3 </th>
                            <th> Interest1 </th>
                            <th> Interest2 </th>
                            <th> Interest3 </th>
                            <th> Over All Percentage </th>
                            
                             
                           
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $sRollNo = $row['sRollNo'];
                                        $sFirstName = $row['sFirstName'];
                                        $sLastName = $row['sLastName'];
                                        $sCollegeEmail = $row['sCollegeEmail'];
                                        $skill1 = $row['skill1'];
                                        $skill2 = $row['skill2'];
                                        $skill3 = $row['skill3'];
                                        $interest1 = $row['interest1'];
                                        $interest2 = $row['interest2'];
                                        $interest3 = $row['interest3'];
                                        $overallPerc = $row['overallPerc'];
                                        
                                       
                            ?>
                                    <tr>
                                        <td><?php echo $sRollNo ?></td>
                                        <td><?php echo $sFirstName ?></td>
                                        <td><?php echo $sLastName ?></td>
                                        <td><?php echo $sCollegeEmail ?></td>
                                        <td><?php echo $skill1 ?></td>
                                        <td><?php echo $skill2 ?></td>
                                        <td><?php echo $skill3 ?></td>
                                        <td><?php echo $interest1 ?></td>
                                        <td><?php echo $interest2 ?></td>
                                        <td><?php echo $interest3 ?></td>
                                        <td><?php echo $overallPerc ?></td>
                                      
                                       
                                    </tr>
                            <?php 
                                    }
                            ?>  
                        </table>
                        <!--<a href="#" class="btn btn-pencil">Add Job</a>
                        <a href="#" class="btn btn-danger">Delete Job</a>-->
                    </div>
                    <div align:left>
                        <a href="coordinator.html" class="btn btn-danger"> BACK</a>
                        <a href="#" class="btn btn-primary"> PRINT</a>
                                </div>
                </div>
            </div>
        </div>
    
</body>
	</html>