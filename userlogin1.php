<html>
<head>
    <style type="text/css">
        body { background-image: url("images/bha.jpg");
        background-repeat: no-repeat;
                        background-size: 100%;
                        margin:0; 
                        top:400px;
                        max-width:1000px;
                        padding:200px;
                        font:175px}
    </style>
</head>
<body align="center">
<h1 align="center">LOGIN FORM</h1>
<form name="f1" action = "authentication.php" onsubmit="return validation()" method = "POST">
<label>User name:</label>
<input type="textbox" name="username" placeholder="enter username"/><br><br><br>
<label>Password:</label>
<input type="password" name="pwd" placeholder="enter your password"/><br><br><br>
<input type="submit" value="submit"/>
</form>
<a href="http://localhost/wt/userregister1.php"><button>New Register</button></a>
<script>  
        function validation()  
        {  
            var id=document.f1.username.value;  
            var ps=document.f1.pwd.value;  
            if(id.length=="" && ps.length=="") {  
                alert("User Name and Password fields are empty");  
                return false;  
            } 
            else if(id.length=="") {  
                    alert("User Name is empty");  
                    return false;  
                }   
            else if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            else{
                return true;                             
            }
        }  
    </script>
</body>
</html>