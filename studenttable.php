<?php
include('conn.php');
session_start();
$admin=$_SESSION['admin'];
  if(!(isset($_SESSION['admin']))){
header("location:admin.php");
}
?>
<html>
    <head>
        <title>Show Marks</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
        <body>
         <div class="topnav" id="myTopnav">
            
       <a href="logout.php">Log Out</a>
                <a href="tier3.php">Tier 3</a>
                 <a href="tier2.php">Tier 2</a>
        <a href="tier1.php">Tier 1</a>
        <a href="student.php">Student Details</a>
    
       </div><br>
           <div class="container">
            <center><div class="top">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        
                        <th scope="col">USN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Branch</th>
                         <th scope="col">Semester</th>
                        <th scope="col">CGPA</th>
                        <th scope="col">Phone No.</th>
                        <th scope="col">Email</th>
                        <th scope="col">Delete</th>
                         <th scope="col">Edit</th>
                    </tr>
                        </thead>
                    <?php
                    $a=$db->query("SELECT * FROM student");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                   
                    <tbody>
                    <tr data-id='$id'>
                      
                        <td class="mid"><?=$f->USN ?></td>
                        <td scope="row"><?=$f->Name; ?></td>
                        <td class="mid"><?=$f->Branch; ?></td>
                        <td class="mid"><?=$f->Semester; ?></td>
                        <td scope="row"><?=$f->CGPA; ?></td>
                        <td class="mid"><?=$f->Phone ; ?></td>
                        <td class="mid"><?=$f->Email ; ?></td>
                          <td><a href="delete.php?id=<?=$f->USN; ?>" class="btn btn-danger">Delete</a></td>
                         <td><a href="editstudent.php?id=<?=$f->USN; ?>" class="btn btn-primary">Edit</a></td>
                    </tr>
                 
                    </tbody>
                     <?php } ?>   
                </table>
            
                </div>
            </center>
            </div>
           
    </body>
</html>





            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            