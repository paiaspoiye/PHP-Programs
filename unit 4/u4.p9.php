<!DOCTYPE html>
<html lang="en">
<head>
    <titl>Program 9 Unit 4</title>
</head>
<form action="" method="post">
Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="submit" value="Login">
</form>

<body>
    <h3>User Login Authentication</h3>

    <?php
$conn=mysqli_connect("localhost","root","","users");

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE name='$username' AND password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
    {
        echo "Login Successful";
    // header("Location: home.php");
    }
else
    {
        echo "Invalid Username or Password";
    }
?>
    
    
</body>
</html>