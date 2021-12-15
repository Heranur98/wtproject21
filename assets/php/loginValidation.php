<?php
include "../database/database.php";
if (isset($_POST['userName']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$userName = validate($_POST['userName']);
	$password = validate($_POST['password']);


	if (empty($userName)) {
		header("Location:index.php?error=userName is required");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=Password is required");
	    exit();
	}
	else{

			$sql = "SELECT * FROM users WHERE username='$userName' AND password='$password'";

			$result = mysqli_query($conn, $sql);
			
			echo($sql);
			if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);
					// $_SESSION['id'] = $row["Id"];
					// $_SESSION['name'] = $row["name"];
					header("Location: appointment.php");
					exit();
			}else{
				header("Location: login.php?error=Incorect username or password");
				
				exit();
			}
			
	}
	
}else{
	header("Location: login.php");
	exit();
}



?>