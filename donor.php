
<?php
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $blood=$_POST['blood'];
    $con=mysqli_connect('localhost','root','','patient');
    $sql ="INSERT INTO donnor ( _name,age,email,_address,mobile,gender,blood)
    VALUES('$name','$age','$email','$address','$mobile','$gender','$blood')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "success"; 
    }else{
        die(mysqli_error($con));
    }
}
?> 
<!Doctype html>
<html>
        <head>
            <link rel="stylesheet" href="patient.css">
            <div class="H3">
        <h1>DONOR REGISTERATION</h1>
            </div>
        </head>
        <body>
      
        <div class="container">
            
        <img src="img/blood.jpg" width="300"height="80">
        <form method="post">
            <div class="input">
                <label> Enter Your name:
                </label>
                <input type="text" name="name" id="name" >
            </div>
            <div class="input">
                <label for="name "> Enter Your Age:</label>
                <input type="text" name="age" id="name" >
        
            <div class="input">
                <label for="email"> Enter Your Email</label>
                <input type="email" name="email"id="email">
            </div>
            <div class="input">
                <label for="Address"> Enter Your Address</label>
                <input type="text" name="address" id="Address">
            </div>
            <div class="input">
                <label for="mobile"> Enter Your Mobile Number</label>
                <input type="" name="mobile" id="mobile">
            </div>
            <div class="inp">
                <label> Select Your Gender:</label>
                <select name="gender">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
                
            </div>
            <div class="inp">
                <label> Needed Blood Group:</label>
                <select name="blood">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB+</option>
                    <option value="AB">AB-</option>
                    <option value="O">O</option>
                    
                </select>
                  
            </div>
        <button type="submit" name="save">Register</button>
        <button type="reset">reset</button>
        </form>
        </div>

    </body>
</html>