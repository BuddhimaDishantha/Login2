<?php 
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="register.php" method="post">
            <h3>register now</h3>
            
           <input type="text" name="name" required placeholder="enter your name" > 
           <input type="email" name="email" required placeholder="enter your email" > 
           <input type="password" name="password" required placeholder="enter your password" > 
           <input type="password" name="cpassword" required placeholder="confrim your name" >
            <select name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit"  name="submit" value="register now" class="form-btn">
<p>already have an account?<a href="login.php">login now</a> </p>

        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    
    $sql="SELECT *FROM user_form WHERE email='$email'"; 
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo'user already exist!';
    }      
     else {
        if($cpassword!==$password){
        echo"password missmatch";
        }
        else {
     
     $insert="INSERT INTO user_form(name,email,password,user_type)
              VALUES('$name','$email','$password','$user_type')";

            mysqli_query($conn,$insert);
            header("Location:login.php");
        
     }
    }
     mysqli_close($conn);

}
?>