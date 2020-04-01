<?php
include("conn.php");
session_start(); 
$id=$_REQUEST['id'];
$admin=$_SESSION['admin'];
  if(!(isset($_SESSION['admin']))){
header("location:admin.php");
}
$a=$db->query("SELECT * FROM student where USN='$id'");
while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                     
                   $usn1=$f->USN;
                   $name1=$f->Name;
                   $branch1=$f->Branch;
                   $sem1=$f->Semester;
                   $cgpa1=$f->CGPA;
                   $phone1=$f->Phone;
                   $email1=$f->Email;
                 
                    }

?>
<html>
    <head>
    <title>UPDATE</title>
        <link rel="stylesheet" type="text/css" href="student.css">
        <link rel="stylesheet" type="text/css" href="style.css">
       <style>
           #in{
    display: inline;
}</style>
    </head>
        <body>
            <div class="bg">
        
        <div class="header">
            <h1>Update Student Information</h1>
        </div>
        
      
       <?php
           if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$USN =$_REQUEST['USN'];
$Name =$_REQUEST['Name'];
$Branch =$_REQUEST['Branch'];
$Semester =$_REQUEST['Semester'];
$CGPA=$_REQUEST['CGPA'];
$Phone =$_REQUEST['Phone'];
$Email =$_REQUEST['Email'];

$update="UPDATE student SET USN='$USN',Name='$Name',Branch='$Branch',Semester='$Semester',CGPA='$CGPA',Phone='$Phone',Email='$Email' WHERE USN='$id'";
$b=$db->query($update);
                if($b)
                {
                   header("location:studenttable.php");
                }

}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $usn1; ?>" />
<div class="form1">
<p><input type="text" name="USN" placeholder="Enter USN" 
required value="<?php echo $usn1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="Name" placeholder="Enter Name" 
required value="<?php echo $name1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="Branch" placeholder="Enter Address" 
required value="<?php echo $branch1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="Semester" placeholder="Enter Phone" 
required value="<?php echo $sem1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="CGPA" placeholder="Enter Gender" 
required value="<?php echo $cgpa1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="Phone" placeholder="Enter DOB" 
required value="<?php echo $phone1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="Email" placeholder="Enter DOB" 
required value="<?php echo $email1; ?>" /></p>
</div>
<div class="form1" id="in">
<p><button type="submit" name="submit" class="button">Update</button></p>
</div>
</form>
<?php } ?>
</div>
</div>
            </div>
    </body>
</html>
            