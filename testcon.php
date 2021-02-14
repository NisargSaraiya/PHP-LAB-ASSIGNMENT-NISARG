<?php
$servername = "localhost:3307";
$username = "root" ;
$password='';
$database_name="college";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
   die("Connection Failed:" . mysqli_connect_error());

}
   if(isset($_POST['save']))
{
    $Student_Name = $_POST['Student_Name'];
    $ROLL_NUMBER = $_POST['ROLL_NUMBER'];
    $AGE = $_POST['AGE'];
    $SCORE = $_POST['SCORE'];
     
    $sql_query = "INSERT INTO student_info(Student_Name,ROLL_NUMBER,AGE,SCORE) VALUES ('$Student_Name','$ROLL_NUMBER','$AGE','$SCORE')";

  if(mysqli_query($conn,$sql_query))
  {
    echo  "New Entry inserted succesfully !";
  }
  else
  {
    echo "Error:", $sql ,"" ,mysqli_error($conn);
  }  
}       
mysqli_close($conn);
?>