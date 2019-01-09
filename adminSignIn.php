<?php session_start();?>
<?php if($_SESSION['startedOfAdmin'] == true){?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style(adminsignup).css">
  </head>
  
  <body>
    <!-- NAVIGATION -->
    <div class="w3-top">
      <div class="w3-bar w3-green">
        <span class="branding w3-bar-item w3-mobile">PICT EXAMINATION PORTAL</span>
        <span class="w3-right w3-mobile">
          <a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="#">Exam Section</a>
          <a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="#result">Result Section</a>
        </span>
      </div>
    </div>

    <!-- SHOWCASE -->
    <section class="showcase">
      <div class="w3-container w3-center">
        <h1 class="w3-text-shadow w3-animate-opacity">Welcome To PICT Online Exam Portal Admin Section </h1>
        <hr>
        <h5 class="w3-animate-opacity"><br><br>
         Now explore our simple way to create your exam by a single click upon a 'Start here'</h5><br>
        <button onclick="document.getElementById('start-modal').style.display='block'" class="w3-button w3-red w3-large">Start Here</button>
      </div>
    </section>

<?php ?>

    <!-- SECTION 2 -->
    <section class="section w3-light-grey w3-hover-opacity" id="result">
      <div class="w3-container w3-center">
        <i class="fa fa-cog"></i>
        <h2>Let's have a results</h2>
        <p>Now generate exam results in even a better and smart way within a seconds !</p>
      </div>
    </section>

    
    
    <section class="section w3-light-grey">
     <section class="showcase1">
      <div class="w3-container w3-center">
        <h1 class="w3-text-shadow w3-animate-opacity">Obtain the Results ! </h1>
        <hr>
        <h5 class="w3-animate-opacity "><b>Now explore our simple way to generate exam result by a single click upon a 'View Results'</h5><br></b>
        <a href="default.asp" target="_blank">View Results</a>
		</div>
    </section>




   
    <!-- FOOTER -->
    <footer class="w3-black w3-padding-xlarge w3-center">
      <p>AVS Web Services and Solutions PVT. LTD.&copy; 2019</p>
    </footer>

    <!-- MODAL -->
    <div id="start-modal" class="w3-modal">
      <div class="w3-modal-content">
        <header class="w3-container w3-red">
          <span onclick="document.getElementById('start-modal').style.display='none'" class="w3-closebtn">&times;</span>
          <h2>Get Started</h2>
        </header>

        <div class="w3-container">
          <form action = adminSignInPHP.php method = "post">
            <div class="w3-section">
              <label>Question</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Question" name="question">
              <label>Option-1</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Options starting with A) or 1) or I) or i) etc. and maintain the Sequence." name="option1">
              <label>Option-2</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Options starting with B) or 2) or II) or ii) etc. and maintain the Sequence." name="option2">
              <label>Option-3</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Options starting with C) or 3) or III) or iii) etc. and maintain the Sequence." name="option3">
			   <label>Option-4</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Options starting with D) or 4) or IV) or iv) etc. and maintain the Sequence. " name="option4">
			   <label>Upload Image:</label>
		       <input type="file" name="pic" id="pic"><br><br>
			  <label>Correct Answer</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Answer" name="answer">
              <button class="w3-black w3-btn-block w3-section w3-padding" type = "submit" name = "questionSubmitButton">Upload</button>
              <input type="button" value="click here to view questions" class="homebutton" id="btnHome" onClick="document.location.href='viewQuestions.php'" />
            </div>
          </form>
        </div>
      </div>
    </div>
<footer>
<input type="button" value="LOGOUT" class="homebutton" id="btnHome" onClick="document.location.href='logout.php'" />
</footer>
  </body>
</html>
<?php }
else{
    echo "<h1>cannot access this page directly</h1>";

}?>
