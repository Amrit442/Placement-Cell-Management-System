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
        <link rel="stylesheet" type="text/css" href="student.css">
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
        <body>

            <?php include("nav.php"); ?>
        
        <table border="0">
        <div class="header">
            <h1>Student Details</h1>
    
        </div></table>
        
        <form action="" method="post">
              
            <div class="form1">
            <table border="0">
                
                 <p><input type="text" name="USN" placeholder="USN" required></p><br>
                 <p><input type="text" name="Name" placeholder="Name" required></p><br>
                 <!-- <p><input type="text" name="Branch" placeholder="Branch" required></p><br> -->
                Branch:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="Branch"><optgroup><option value="CSE">CSE</option><option value="ISE">ISE</option></optgroup></select><br>

                 <!-- <p><input type="text" name="Semester" placeholder="Semester" required></p><br> -->
                 <br>Semester:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="Semester"><optgroup><option value="7">7th</option><option value="8">8th</option></optgroup></select><br>
                 <br><p><input type="text" name="CGPA" placeholder="CGPA" required></p><br>
                 <p><input type="text" name="Phone" placeholder="Phone No." maxlength="10" required></p><br>
                 <p><input type="email" name="Email" placeholder="Email" required></p><br>

                 
                 <center><button type="submit" name="registers" class="button">Add</button></center>
            </form>
            <?php
          
            if(isset($_POST['registers']))
            {   
                $USN=$_POST['USN'];
                $Name=$_POST['Name'];
                 $Branch=$_POST['Branch'];
                $Semester=$_POST['Semester'];
                $CGPA=$_POST['CGPA'];
                $Phone=$_POST['Phone'];
                $Email=$_POST['Email'];
            
                     
                $a=$db->prepare("INSERT INTO student (USN,Name,Branch,Semester,CGPA,Phone,Email) VALUES (:USN,:Name,:Branch,:Semester,:CGPA,:Phone,:Email)");
                $a->bindValue('USN',$USN);
                $a->bindValue('Name',$Name);
                $a->bindValue('Branch',$Branch);
                $a->bindValue('Semester',$Semester);
                    $a->bindValue('CGPA',$CGPA);
                    $a->bindValue('Phone',$Phone);
                    $a->bindValue('Email',$Email);
               
                if($a->execute())
                {
                    echo "<script>alert('Data added Successfully')</script>";
                }
                   else
                {
                     echo "<script>alert('Data not added Successfully')</script>";
                }
                
            
          }
        ?>
    </body>
</html>