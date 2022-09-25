<?php
include("connection.php");
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
// $profilepic = $_POST['profile'];

if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    // if(in_array($file_ext,$extensions)=== false){
    //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    // }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"images/".$file_name);
    //    echo "Success";
    header("Location: display.php");
    }else{
       print_r($errors);
    }
 }

$hobbies1 = implode(",",$hobbies);
// echo implode(",",$hobbies);
// echo $hobbies1;


$sql = "INSERT INTO record (`fiastname`, `lastname`, `email`, `password`, `role`, `gender`, `dob`, `phoneno`, `hobbies`, `address`, `profilepic`) values ('$firstname', '$lastname', '$email', '$password', '$role', '$gender', '$dob', '$phoneno', '$hobbies1', '$address', '$file_name')";

mysqli_query($conn, $sql);
?>
<pre>
   
</pre>