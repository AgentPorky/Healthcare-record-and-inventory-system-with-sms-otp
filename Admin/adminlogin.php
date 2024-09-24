<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: adminindex.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: adminindex.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        //TABLE OF ADMIN REGISTER
		$sql = "SELECT * FROM admin_register WHERE admin_username ='$uname' AND admin_password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['admin_username'] === $uname && $row['admin_password'] === $pass) {
            	$_SESSION['admin_username'] = $row['admin_username'];
            	$_SESSION['admin_name'] = $row['admin_name'];
            	$_SESSION['admin_id'] = $row['admin_id'];
            	header("Location: adminhomepage.php");
		        exit();
            }else{
				header("Location: adminindex.php?error=Incorect Username or password");
		        exit();
			}
		}else{
			header("Location: adminindex.php?error=Incorect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: adminindex.php");
	exit();
}