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
$sql="SELECT * FROM feedback";
$result=$conn->query($sql);
$s="SELECT * FROM user";
$r=$conn->query($s);
?>
<!DOCTYPE html>
<html lang="en">
<style>
    
    div.a {
  text-align: center;
  p {
  background-image: url('bg.jpg');
}
}
    table{
        border-collapse:collapse;
        width:100%;
    }
    th,td{
        text-align:left;
        padding:8px;
    }
    tr:nth-child(even){
        background-color:#;
    }
    h1 {text-align:center; }
</style>
<head>
<h1><b>ADMIN VIEW <b></h1>
    <meta charset = "utf-8"
    <div class="a">
        <h1>
<h2>FEEDBACK TABLE</h2>
</div>
<body background=bg5.jpg>
    
    <table style="width=100%">
    <head>
        <tr>
            <th>NAME</th>
            <th>Email</th>
            <th>Message</th>
        <tr>
</head>
<tbody>
    <?php 
      if($result->num_rows>0){
          while($row=$result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo  $row['firstname'];?></td>
        <td><?php echo  $row['email'];?></td>
        <td><?php echo  $row['msg'];?></td>
          </tr>
          <?php }
      }
      ?>
      </tbody>
    </table>

      
</body>
<body>
    <table style="width=100%">
    <head>
        <h2>USERS</h2>
        <tr>
            <th>NAME</th>
            <th>Email</th>
            <th>password</th>
            <th>role</th>
        <tr>
</head>
<tbody>
    <?php 
      if($r->num_rows>0){
          while($ro=$r->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo  $ro['username'];?></td>
        <td><?php echo  $ro['email'];?></td>
        <td><?php echo  $ro['password'];?></td>
        <td><?php echo  $ro['role'];?></td>
          </tr>
          <?php }
      }
      ?>
      </tbody>
    </table>

      
</body>
</html>