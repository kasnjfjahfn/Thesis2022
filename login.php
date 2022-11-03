<?php session_start(); ?>
<?php include('dbcon.php'); ?>  

<html lang="en">    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">   
<style type="text/css">
	body  
{  
    margin: 0;  
    padding: 0;  
    background-image: url('');
    background-repeat: no-repeat;
    background-size: 100%; 
    font-family: 'Arial';  

}  
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background:forestgreen; 
        opacity: 0.8;
        border-radius: 15px ;
        
}  
h2{  
    text-align: center;  
    color: #277582;  
    padding: 20px;  
}  
label{  
    color: #ffffff;  
    font-size: 17px;
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
 
  
}  
span{  
    color: white;  
    font-size: 17px;  
}  
a{  
    float: left;  
     color: white;
     text-decoration: underline;
}  

.topnav {
  overflow: hidden;
  background-color:forestgreen;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: ;
  color: white;
}
</style>
</head>

<body>  

  <div class="topnav">
  <a class="active" href="login.php">LOGIN</a>
  <a href="#contact">CONTACT</a>
  <a href="index.html">HOME</a>
</div>

    <h2><img src="dist\img\Benguet_State_University.png" width="12%"><br></h2>  
    <div class="login">    

    <!--<form id="login" method="POST" action="loginex.php">-->

        <form id="login" method="POST" action="admin_interface.php">
        <label><b>User ID No.     
        </b>    
        </label>    
        <input type="text" name="idno" id="UName" placeholder="ID No." autofocus required="required"    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password" required="required">    
        <br><br>    

         

        <div class="button-panel">
        <input type="submit" class="button" title="Log In" name="login" value="LOGIN"></input>
    </div>

        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        <a>Forgot Password?</a>    
    </form>     

     <?php
    if (isset($_POST['submit']))
        {
            $username = mysqli_real_escape_string($con, $_POST['user_id']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            
            $query      = mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and ID='$username'");
            $row        = mysqli_fetch_array($query);
            $num_row    = mysqli_num_rows($query);
            
            if ($num_row > 0) 
                {           
                    $_SESSION['user_id']=$row['user_id'];
                    header('location:header.php');
                    
                }
            else
                {
                    echo 'Invalid Username and Password Combination';
                }
        }
  ?>

  <script type="javascript">
      
    var ISLogin

  </script>
</div>    
</body>    
</html>     
