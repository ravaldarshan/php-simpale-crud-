<?php
include("connection.php");
$id = $_GET['id'];
$sql = "SELECT * FROM record WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$row = $data->fetch_assoc();

$str = $row['hobbies'];
$var5 =explode("," ,$str);
// echo "<pre>";
// print_r($var5);
// die;
if(isset($_POST['submit']))
{
    $filename=$row['profilepic'];
    if($_FILES['image']['error']== 0){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        // $image = $_FILES['image']['name'];
        $image_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;
        $extensions= array("jpeg","jpg","png");
        
        // if(in_array($file_ext,$extensions)=== false){
        //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        // }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"images/".$filename);
        //    echo "Success";
        // header("Location: display.php");
        }else{
           print_r($errors);
        }
     }

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phoneno = $_POST['phoneno'];
    $hobbies = $_POST['hobbies'];
    $address = $_POST['address'];
    //  $filename1= $_FILES['image'];
    $hobbies1 = implode(",",$hobbies);
    
    

    // print_r($filename);die;
    $sql = "UPDATE record SET `fiastname`='$firstname', `lastname`='$lastname', `email`='$email', `password`='$password', `dob`='$dob', `phoneno`='$phoneno', `profilepic`='$filename', `address`='$address', `gender`='$gender', `role`='$role', `hobbies`='$hobbies1' WHERE id='$id'";
    // `lastname`, `email`, `password`, `dob`, `phoneno`) values ('$firstname', '$lastname', '$email', '$password', '$dob', '$phoneno')";
    if(mysqli_query($conn, $sql))
    { 
    header("location: display.php");
    }
    
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="#" enctype="multipart/form-data">
        <h1>Update student record</h1><br>
        
        <label for="">firstname</label>
        <input type="text" name="firstname" value="<?php echo $row['fiastname']?>"><br><br>
       
        <label for="">lastname</label>
        <input type="text" name="lastname" value="<?php echo $row['lastname']?>"><br><br>

        <label for="">email</label>
        <input type="email" name="email" value="<?php echo $row['email']?>"><br><br>

        <label for="">password</label>
        <input type="password" name="password" value="<?php echo $row['password']?>"><br><br>

        <label>
                chose a role :
            </label>
            <select name="role">
                <option value="1">choseone</option>
                <?php if($row['role']=='admin'){
                     echo "hallo";
                     echo '<option value="admin" selected="selected">admin</option>';  
                     echo '<option value="user">user</option>';
                  }else
                     {
                      echo '<option value="admin">admin</option>';  
                      echo '<option value="user"selected="selected">user</option>';
                     }
       
            ?>
            </select><br><br>
        Gender:
        <?php if($row['gender']=='male'){
                    echo '<input type="radio" name="gender" value="male" checked="checked">male';
                    echo '<input type="radio" name="gender" value="female">female';
                    echo '<span class="error"><?php  echo $egender;?></span><br>';
          }else{
            echo '<input type="radio" name="gender" value="male">male';
            echo '<input type="radio" name="gender" value="female" checked="checked">female';
            echo '<span class="error"><?php  echo $egender;?></span><br>';
            }?>
        
        <br><br>
        <label for="">dob</label>
        <input type="date" name="dob" value="<?php echo $row['dob']?>">
        <br><br>
        <label for="">phone no</label>
        <input type="text" name="phoneno" value="<?php echo $row['phoneno']?>"><br><br>

        <label for="">hobbies</label><br><br>
        <input type="checkbox" id="reading" name="hobbies[]" value="reading" <?php if(in_array("reading",$var5)) echo 'checked="checked"'; ?>>
        <label for="reading"> reading</label><br>

        <input type="checkbox" id="singing" name="hobbies[]" value="singing" <?php if(in_array("singing",$var5)) echo 'checked="checked"'; ?>>
        <label for="singing"> singing</label><br>

        <input type="checkbox" id="acting" name="hobbies[]" value="acting" <?php if(in_array("acting",$var5)) echo 'checked="checked"'; ?>>
        <label for="acting"> acting</label><br>

        <label for="">address</label>
        <textarea name="address" value=""><?php echo $row['address']?></textarea><br><br>
       
        <label for="">uplode profile photos</label>
        <input type="file" id="file" name="image" value="<?php echo $row['profilepic']?>"/> <br>
        <img src="\crud\/images/<?php echo $row['profilepic']?>" alt="" style="width: 120px;height:50apx;">
        <br>

       
        <br>
        <input type="submit" name="submit" value="submit">

    </form>
</body>

</html>