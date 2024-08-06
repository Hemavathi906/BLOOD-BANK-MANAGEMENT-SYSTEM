<!DOCTYPE html>
<html>
    <head>
        <title>Search patient</title>
        <h2>SERACH PATIENT</h2>
    </head>
    <body>
    <link rel="stylesheet" href="searchdon.css">
        <form action=""method="GET">
            <div class="input">
            <input type="text" name="search" required value="<?php if(isset($_GET['search'])){
                echo $_GET['search'];
            }?>" placeholder="Search data">
            <button type="submit"> Search</button>
            </div>
        </form>
        <br>
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <th>S.NO</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>BloodGroup</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $con=mysqli_connect("localhost","root","","blood");
            if(isset($_GET['search']))
            {
                $filtervalues=$_GET['search'];
                $query="SELECT * from patient WHERE CONCAT(blood) LIKE '%$filtervalues%'";
            $query_run=mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                foreach($query_run as $rows)
            {
                ?>
             <tr>
                        
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['_name'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['_address'];?></td>
                <td><?php echo $rows['_mobile'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['blood'];?></td>
            </tr>
            <?php
            }
        }
        else {

        ?>
        <tr>
            <td colspan="4">NO RECORD FOUND</td>
        </tr>
        <?php
        }
        }
        ?>
         </tbody>
        </table>
   
    </body>
</html>