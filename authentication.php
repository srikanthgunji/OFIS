<?php 
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="project";
  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error)
  {
      die("Connection Failed".$conn->connect_error);
  }
$name=$_POST['username'];
$password=$_POST['pwd'];
echo $name;
echo $password;
$sql="select * from user WHERE username='$name' AND password='$password' ";
$result=mysqli_query($conn, $sql);
if($result==TRUE)
{
  $row = $result -> fetch_assoc();
  if($row['role']=='admin')
  {
    header("Location:feed1.php");
  }
  else{
    header("Location:ka.html");
  }
}

?>