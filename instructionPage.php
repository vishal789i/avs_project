<?php session_start();?>
<?php if($_SESSION['startedOfStudent'] == true){?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Instruction Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="style(instruction).css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- NAVIGATION -->
    <div class="w3-top">
      <div class="w3-bar w3-green">
        <span class="branding w3-bar-item w3-mobile">PICT EXAMINATION PORTAL</span>
        <span class="w3-right w3-mobile">
        </span>
      </div>
    </div>

	</div>
<div class="block">
<div class="act">
<h3 class="note">Instructions:</h3>
<h5>1) Not allowed :<br>
 a) Cellphone
 b) Pen Drive
 <br>
2) Students have to sign on attendance sheet before entering examination hall.<br>
3) If login name or / and password, do not appear in list, inform immediately to
examiner.<br>
4) Duration : 1 Hour<br>
5) Login using your username & password.<br>
6) No negative marking.<br> 
7) Select most appropriate(only one) answer.
</h5>
<br><br>
 <button class="button button1" onClick="document.location.href='questionPage.php'">Start Test</button>
</div>

</body>
</html>

<?php }
else{
    echo "<h1>cannot access this page directly</h1>";

}?>