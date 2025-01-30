<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="login.php" method="post">
            <h3>login now</h3>
           <input type="email" name="email" required placeholder="enter your email" > 
           <input type="password" name="password" required placeholder="enter your password" > 
            
            <input type="submit"  name="submit" value="login now" class="form-btn">

            <p> don't have an account?<a href="register.php">register now</a> </p>

        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="SELECT*FROM user_form WHERE email='$email' && password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       header("Location:user.php");
    }
}