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

  
      $name=$_POST['fullName'];
      $email=$_POST['email'];
      $msg=$_POST['commentText'];
  $sql="INSERT INTO feedback(firstname,email,msg) VALUES('$name','$email','$msg')";
  $result=$conn->query($sql);
  if($result==True)
  {
      echo "Your Feedback is submited sucessfully";
  }
  ?>
