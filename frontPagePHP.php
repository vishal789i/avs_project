<?php
    ob_start();
    session_start();


	include_once 'DBConnection.php'; //variables $conn
	
	//student sign in
	
	
	
	if(isset($_POST['signInStudentButton'])){
		$name = $_POST['signInStudentName'];
		$password = $_POST['signInStudentPassword'];
			
		$sql = "SELECT userName, password FROM studentLogins WHERE userName = '".$name."' AND  password = '".$password."'";
		$result = mysqli_query($conn, $sql);
    
		if (mysqli_num_rows($result) > 0) {
		    
		    $_SESSION['startedOfStudent'] = true;

		    header("Location: instructionPage.php", true, 301);
		    exit();
			
		} 
		else {
			echo "<br>Student Name OR Password is incorrect<br>";
		}		
	}
	//admin sign in
	else if(isset($_POST['signInAdminButton'])){
		$name = $_POST['signInAdminName'];
		$password = $_POST['signInAdminPassword'];
			
		$sql = "SELECT userName, password FROM adminLogins WHERE userName = '".$name."' AND  password = '".$password."'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    
		    $_SESSION['startedOfAdmin'] = true;
		    
			header("Location: adminSignIn.php", true, 301);
			exit();
			
		} 
		else {
			echo "<br>Admin Name OR Password is incorrect <br>";
		}		
	}
	//student sign up
	else if( isset($_POST['studentCreateFormButton']) ){
		
		//create table if it is'nt present
		$tableSqlStudent = "CREATE TABLE `online_exam`.`studentLogins`( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `username` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
		
		mysqli_query($conn, $tableSqlStudent);
		
		if($_POST['createStudentPassword'] == $_POST['createStudentConfirmPassword']){
			
			$sql = "INSERT INTO `online_exam`.`studentLogins` (name, userName, password) VALUES ('".$_POST["createStudentName"]."', '".$_POST["createStudentUserName"]."', '".$_POST["createStudentPassword"]."')";
			
			if (mysqli_query($conn, $sql)) {
			    $message = "new student added";
			    echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<br> New record created successfully into student <br>";
				header('Refresh: 2; URL = frontPage.php');
			} 
			else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}			
		}
		else{
			echo "<br> comfirm password is incorrect!!<br>";
		}
	}
	//admin sign up
	else if( isset($_POST['adminCreateFormButton']) ){
		//create table if it is'nt present
		$tableSqlAdmin = "CREATE TABLE `online_exam`.`adminLogins` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `username` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
		
		mysqli_query($conn, $tableSqlAdmin);
		
		if($_POST['createAdminPassword'] == $_POST['createAdminConfirmPassword']){
			
			$sqlAdmin = "INSERT INTO `online_exam`.`adminLogins` (name, userName, password) VALUES ('".$_POST["createAdminName"]."', '".$_POST["createAdminUserName"]."', '".$_POST["createAdminPassword"]."')";
			
			if (mysqli_query($conn, $sqlAdmin)) {
				$message = "new admin added";
				echo "<script type='text/javascript'>alert('$message');</script>";
				header('Refresh: 2; URL = frontPage.php');
				exit();
			} 
			else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}			
		}
		else{
			echo "<br>comfirm password is incorrect!!<br>";
		}
	}
	
	mysqli_close($conn);
	
?>





Click here to clean <a href = "logout.php" tite = "Logout">Session.