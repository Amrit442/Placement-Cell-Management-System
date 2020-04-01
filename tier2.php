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
          <meta charset=utf-8>

    <title>Marks</title>
        <link rel="stylesheet" type="text/css" href="tier1_1.css">
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
        <body>

            <?php include("nav.php"); ?>
        
        <table border="0">
        <div class="header">
            <h1>Tier 2</h1>
    
        </div></table>
        
        <form action="" method="post">
              
            <div class="form1">
            <table border="0">
                
                 <p><input type="text" name="USN" placeholder="USN" required></p><br>
                 <p><input type="text" name="Name" placeholder="Name" required></p><br>
                 <p><input type="text" name="Company" placeholder="Company Placed" required></p><br>
                 <p><input type="text" name="Package" placeholder="Package" required></p><br>
                 
                 <center><button type="submit" name="registers" class="button">Add</button></center>
            </form>
            <?php
          
            if(isset($_POST['registers']))
            {   
                $USN=$_POST['USN'];
                $Name=$_POST['Name'];
                 $Company=$_POST['Company'];
                $Package=$_POST['Package'];
               
                     
                $a=$db->prepare("INSERT INTO tier2 (USN,Name,Company,Package) VALUES (:USN,:Name,:Company,:Package)");
                $a->bindValue('USN',$USN);
                $a->bindValue('Name',$Name);
                $a->bindValue('Company',$Company);
                $a->bindValue('Package',$Package);
               
                if($a->execute())
                {
                    echo "<script>alert('Data added Successfully')</script>";
                }
                   else
                {
                     echo "<script>alert('Marks not added(may be some field missing)')</script>";
                }
                
            
          }
        ?>
    </body>
</html>