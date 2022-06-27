<! Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> PHP Registration Form Example </title>
  <style>
.error {
color: white;
    font-family: lato;
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    margin: 50px auto;
    text-align: center;
    width: 800px;
}
h1 {
    font-family: sans-serif;
  display: block;
  font-size: 2rem;
  font-weight: bold;
  text-align: center;
  letter-spacing: 3px;
  color: hotpink;
    text-transform: uppercase;
}
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.5rem;
    font-family: 'Lato';
}
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 10px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #f3e7e9;
}
div.form-element {
    margin: 20px 0;
}
input[type=submit]::after {
  background: #fff;
  content: '';
  position: absolute;
  z-index: -1;
}
input[type=submit] {
  border: 3px solid;
  border-radius: 2px;
  color: ;
  display: block;
  font-size: 1em;
  font-weight: bold;
  margin: 1em auto;
  padding: 1em 4em;
 position: relative;
  text-transform: uppercase;
}
input[type=submit]::before
{
  background: #fff;
  content: '';
  position: absolute;
  z-index: -1;
}
input[type=submit]:hover {
  color: #1A33FF;
}
</style>
</head>
<body>
  <?php
  $server_name="localhost";
  $username="root";
  $password="";
  $database_name="project";

  $conn = mysqli_connect($server_name,$username ,$password,$database_name);
  if(!$conn)
  {
      die("connection failed" . mysqli_connect_error());
  }
  if(isset($_POST['save']))
  {

      $name = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $mobile_num = $_POST['mobile_num'];
      // get the post recordsswds
      $sql_query = "INSERT INTO user(`username`, `email`, `password`, `mobile_num`, `role`) VALUES ('$name','$email','$password','$mobile_num','user')";

      // insert in database
      $rs=mysqli_query($conn, $sql_query);

      if($rs)
      {
        header("Location:userlogin1.php");
      }
      else{
          echo "error" . $sql ."" . mysqli_error($conn);
      }
      mysqli_close($conn);
  }
  ?>

</body>
</html>