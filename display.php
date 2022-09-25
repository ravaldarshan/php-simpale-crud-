<?php
include("connection.php");

$sql = "SELECT * FROM record";
$data = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>student record</h1><br>
    <table border="1px" class="table">
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>password</th>
            <th>role</th>
            <th>gender</th>
            <th>dob</th>
            <th>phone number</th>
            <th style: wgith="200px";>hobbies</th>
            <th>address</th>
            <th>profile photos</th>
            <th>update</th>
            <th>delete</th>

            
        </tr>
        
            <?php
                while($row = $data->fetch_assoc()) {
            ?>
            <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['firsttname']?></td>
            <td><?php echo $row['lastname']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['role']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['phoneno']?></td>
            <td><?php echo $row['hobbies']?></td>
            <td><?php echo $row['address']?></td>
            <td><img src="\crud\images\<?php echo $row['profilepic']?>" alt="" style="width: 120px;height:50apx;"></td>
            <td><a href="update.php?id=<?php echo $row['id']?>">update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']?>">delete</a></td>          
            </tr>
            <?php

                }
                ?>
    </table>
    <form action="studform.php">
            <input type="submit" class="btn btn-success" name="submit" value="back to student form">
            </form>
</body>

</html>