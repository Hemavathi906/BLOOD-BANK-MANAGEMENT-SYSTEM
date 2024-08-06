<?php
if(isset($_POST['save'])){
    $name=$_POST['user'];
    $password=$_POST['password'];
    $con=mysqli_connect('localhost','root','','admin');
    session_start();
    $sql ="INSERT INTO ad ( username,password)
    VALUES('$name','$password')";
$sql="select * from ad where username='$name' and password='$password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
echo $count;
    if($cout>0){
        header("location:login.html");

    }else{
        header("location:admin.php");
    }
}
?>
<html>
    <head>
        <h1>ADMIN PAGE</h1>
    </head>
    <body>
    <link rel="stylesheet" href="ad.css">
    <div class="container">
        <body>
        <form action="login.html" method="post">
            <div class=input>
            <label>Username
                <input type="text" placeholder="username" name="user" required>
            </label>
            </div>
            <div class=input>
            <label>password
                <input type="text" placeholder="password" name="password" required minlength="8">
            </label>
            </div>
            <button type=submit>submit</button>
</div>
        </form>
        <?php
        ?>
    </body>
</html>
