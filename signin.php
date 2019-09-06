<?php
include 'connect.php';
if(isset($_POST['signin'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $open=$db->prepare("select * from users where username=:username && password=:password");
    $open->bindParam(":username",$username);
    $open->bindParam(":password",$password);
    $open->execute();
    $count=$open->rowCount();
        if($count >0)
        {  
            echo "<script>alert('Logged In');window.location.href='lectures.html';</script>";
        }
        else
        {
             echo "<script>alert('Username or Password is incorrect.');</script>";

        }


}
else
{
      //   echo "<script>alert('Something Wrong.');</script>";

}


?>
<html>
<style>

form {
    border: 3px solid #f1f1f1;
    width:50%;
    margin:auto;
}

input[type=text], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button,input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    border: none;
    cursor: pointer;
    width: auto;
}

.cancelbtn {
    width: auto;
padding: 14px 20px;
    background-color: #f44336;
}


img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 30%;
    }
}

</style>
<body>
<link rel="stylesheet" href="css/dhci.css">
<!-- <h1 style="text-align:center;border-style:inset"><b>DREAM HIGH COMPUTER INSTITUTE</b></h1>
 -->
<!-- Navigation -->
<nav>
  <ul class="w3-navbar w3-blue" style="width:100%;background-color:blue">
     <li><a href="news.html">News Update</a></li>
        <li><a href="courses.html">Courses Available</a></li>
    <li><a href="contact.html">Contact Us</a></li>
    <li><a href="about.html">About Us</a></li>
    <li><a href="institute.html">Home</a></li>
   
    <h2 style="text-align:left;"<b>&nbsp&nbsp&nbspDREAM HIGH COMPUTER INSTITUTE&nbsp&nbsp&nbsp</b></h2>

  </ul>
</nav>
<center>

<br>
<br>
<h2>SignIn </h2>
</center>

<form action="" method="post">
<center>
<font-align="center">
  <div class="imgcontainer">
  </div>
  <div class="container">
   
<label><b>Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp</b></label>
    <input type="text" placeholder="Enter Username" name="username" required value="<?php echo $username; ?>">
    <br>
<label><b>Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp</b></label>
    <input type="password" placeholder="Enter Password" name="password" required value="<?php echo $password; ?>"> <br>
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="checkbox" checked="checked"> Remember me<br>
    <span class="psw">Forgot <a href="#">password?</a></span>

<br>
<br>


    
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

    <input type="submit" value="SignIn" name="signin" ></button>  
 &nbsp&nbsp
    <button type="button" class="cancelbtn"><a href="news.html">Cancel</a></button>

  </div>
  </center>
  </font>
</form>

 
</body>
</html>

