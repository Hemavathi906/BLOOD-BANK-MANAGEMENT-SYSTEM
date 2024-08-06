<?php

$con=mysqli_connect('localhost','root','','patient');
if($con->connect_errno)
{
echo"failed to conect to MySQL:".$con->connect_error;
exit();
}

$sql="select*from donnor";
$result=($con->query($sql));
$row=[];
if($result->num_rows>0){
    $row=$result->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html>
    <body>
        <link rel="stylesheet" href="donordetail.css">
        <table>
            <thead>
                <tr>
                    <th>S.NO</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Mobile.No</th>
                    <th>Gender</th>
                    <th>BloodGroup</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(!empty($row))
                foreach($row as $rows)
            ?>
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['_name'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['_address'];?></td>
                <td><?php echo $rows['mobile'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['blood'];?></td>
            </tr>
            </tbody>
        </table>

    </body>
</html>
<?php
mysqli_close($con);
?>