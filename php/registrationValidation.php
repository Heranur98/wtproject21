<?php
include "../database/database.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

$name = validate($_POST['Name']);
 $userName = validate($_POST['Username']);
 $password = validate($_POST['password']);
 $confirmPassword = validate($_POST['confirmPassword']);

 $dob = validate($_POST['Date']);

$gender = validate($_POST['Gender']);
$phone = validate($_POST['Phone']);
$email = validate($_POST['email']);

if($password != $confirmPassword){
    header("Location: registation.php?error=password not matched");				
    exit();
}

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    header("Location: registation.php?error=email already exist");
    exit();
}else{
    
   
    $sql = " INSERT INTO `users`(`name`,`username`,`email`, `Password`, `date_of_birth`,`phone_number`,`gender`) VALUES ('$name','$userName','$email','$password','$dob','$phone','$gender') ";
    $result = mysqli_query($conn, $sql);

    // have to add if quary failed ?
    if($result){
        
        header("Location: login.php?");
         exit();
    }else{
        header("Location: index.php?error=Something went Wrong");
        exit();
    }

}





?>