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
    
       </div></br>
           <div class="container">
            <center><div class="top">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        
                        <th scope="col">USN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Company Placed</th>
                         <th scope="col">Package</th>
                        
                    </tr>
                        </thead>
                    <?php
                    $a=$db->query("SELECT * FROM tier3");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                   
                    <tbody>
                    <tr data-id='$id'>
                      
                        <td class="mid"><?=$f->USN ?></td>
                        <td scope="row"><?=$f->Name; ?></td>
                        <td class="mid"><?=$f->Company; ?></td>
                        <td class="mid"><?=$f->Package; ?></td>
                     
                    </tr>
                 
                    </tbody>
                     <?php } ?>   
                </table>
            
                </div>
            </center>
            </div>
           
    </body>
</html>





            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            