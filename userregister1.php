<html>
<head>
      <style type="text/css">
            body {
                        background-image: url("images/reg1.jpg");background-repeat: no-repeat;
                        background-size: 100%;
                        margin:0
                        top:110px;

            img{
                  position: absolute;
                  top: 200px ;
                  left: 10px;
            }
      </style>
</head>
<body align="center">
      <h1 align="center">REGISTRATION FORM</h1>
      <form name="f2" action="reg.php" onsubmit="return validate()" method="post">
            <label>Name:</label>
<input type="text" name="username" placeholder="Enter Your Name"/><br><br><br>
<label>Email Id:</label>
<input type="email" name="email" placeholder="Enter Your Email"><br><br><br>
<label>Mobile:</label>
<input type="number" name="mobile_num" placeholder="Enter Mobile Number"/><br><br><br>
<label>Password:</label>
 <input type="password" name="password" placeholder="Enter Password"/><br><br><br>
<label>Confirm Password:</label>
<input type="password" name="password" placeholder="Confirm Your Password"/><br><br><br>
            <input id="btn" type="submit" name="save" value="Register"></td></tr>
      </form>
</body>
</html>