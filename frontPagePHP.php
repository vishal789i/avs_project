



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
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo "<br> name: " . $row["userName"]. " password: " . $row["password"]. " <br>";
			}
			
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
			// output data of each row
			
			header("Location: adminSignIn.html", true, 301);
			exit();
			
		} 
		else {
			echo "<br>Admin Name OR Password is incorrect <br>";
		}		
	}
	//student sign up
	else if( isset($_POST['studentCreateFormButton']) ){
		
		//create table if it is'nt present
		$tableSqlStudent = "CREATE TABLE `online_exam`.`studentLogins` IF NOT EXISTS ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `username` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
		
		mysqli_query($conn, $tableSqlStudent);
		
		if($_POST['createStudentPassword'] == $_POST['createStudentConfirmPassword']){
			
			$sql = "INSERT INTO `online_exam`.`studentLogins` (name, userName, password) VALUES ('".$_POST["createStudentName"]."', '".$_POST["createStudentUserName"]."', '".$_POST["createStudentPassword"]."')";
			
			if (mysqli_query($conn, $sql)) {
				echo "<br> New record created successfully into student <br>";
				header("Location: http://localhost/onlinetest/frontpage.html", true, 301);
				exit();
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
		$tableSqlAdmin = "CREATE TABLE `online_exam`.`adminLogins` IF NOT EXISTS ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `username` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
		
		mysqli_query($conn, $tableSqlAdmin);
		
		if($_POST['createAdminPassword'] == $_POST['createAdminConfirmPassword']){
			
			$sqlAdmin = "INSERT INTO `online_exam`.`adminLogins` (name, userName, password) VALUES ('".$_POST["createAdminName"]."', '".$_POST["createAdminUserName"]."', '".$_POST["createAdminPassword"]."')";
			
			if (mysqli_query($conn, $sqlAdmin)) {
				$message = "New record created successfully into admin";
				echo "<script type='text/javascript'>alert('$message');</script>";
				header("Location: http://localhost/onlinetest/frontpage.html", true, 301);
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