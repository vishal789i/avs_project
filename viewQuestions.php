<?php session_start();?>
<?php if($_SESSION['startedOfAdmin'] == true){?>

<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>


  <?php
include_once 'DBConnection.php';
$sql = "SELECT * FROM question_set";
$result = mysqli_query($conn, $sql);

?>

<table id="customers">
<tr>
    	<th>sr_no</th>
    	<th>question</th>
    	<th>option1</th>
    	<th>option2</th>
    	<th>option3</th>
    	<th>option4</th>
    	<th>f_answer</th>    	
</tr>
<?php 
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {?>
    
    <tr>
    	<td><?php echo $row['sr_no'];?></td>
    	<td><?php echo $row['question'];?></td>
    	<td><?php echo $row['option1'];?></td>
    	<td><?php echo $row['option2'];?></td>
		<td><?php echo $row['option3'];?></td>
		<td><?php echo $row['option4'];?></td>
		<td><?php echo $row['f_answer'];?></td>
    </tr>
    
<?php } ?>
</table>
<?php 

} else {
    echo "0 results";
}

    mysqli_close($conn);
?> 
<p>Click the button to print the current page.</p>

<button onclick="myFunction()">Print this page</button>
<input type="button" value="go back" class="homebutton" id="btnHome" onClick="document.location.href='adminSignIn.php'" />

<script>
function myFunction() {
  window.print();
}
</script>



</body>
</html>

<?php }
else{
    echo "<h1>cannot access this page directly</h1>";

}?>
