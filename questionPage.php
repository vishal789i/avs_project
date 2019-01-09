<?php session_start();?>
<?php if($_SESSION['startedOfStudent'] == true){?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style(questionpage).css">
<link rel="stylesheet" href="w3.css">
</head>
<body>

<section class="w3-top">
   <!-- NAVIGATION -->
    <div class="w3-top">
      <div class="w3-bar w3-green">
        <header>
<h2>Online Test</h2>
<p>ENTC DEPT.</p>
<input type="button" value="LOGOUT" class="homebutton" id="btnHome" onClick="document.location.href='logout.php'" />
<div class="timerslot">
<div class="time" id="timer">30:00</div></div>
<script type="text/javascript">
var timeoutHandle;
function countdown(minutes,stat) {
    var seconds = 60;
    var mins = minutes;
	 
	if(getCookie("minutes")&&getCookie("seconds")&&stat)
	{
		 var seconds = getCookie("seconds");
    	 var mins = getCookie("minutes");
	}
	 
    function tick() {
		
        var counter = document.getElementById("timer");
		setCookie("minutes",mins,10)
		setCookie("seconds",seconds,10)
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML = 
		current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
		//save the time in cookie
        if( seconds > 0 ) {
            timeoutHandle=setTimeout(tick, 1000);
        } else {
             
            if(mins > 1){
                 
               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst    
               setTimeout(function () { countdown(parseInt(mins)-1,false); }, 1000);
                     
            }
        }
    }
    tick();
}
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}
 function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
countdown(30,true);

</script>
</header>
      </div>
    </div>
</section><br><br><br><br><br><br>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Question 1)</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')" id="delhi">Question 2)</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Question 3)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 4)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 5)</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Question 6)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 7)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 8)</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Question 9)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 10)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 11)</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Question 12)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 12)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 13)</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Question 14)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 15)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 16)</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Question 17)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 18)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 19)</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Question 20)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 21)</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Question 22)</button>
</div>
<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>


		<div id="Paris" class="tabcontent">
		
		<h1>hi</h1>
		
		<form action="questionPageFinal.jsp" name="" class="new">
		<label class="container"><p> A)
		<input type="radio" name="radio" value="A"> 
		<span class="checkmark"></span>
		</label></p>
		<label class="container"><p>B)
		  <input type="radio" name="radio" value="B">
		  <span class="checkmark"></span>
		</label></p>
		<label class="container"><p>C)
		  <input type="radio" name="radio" value="C">
		  <span class="checkmark"></span>
		</label></p>
		<label class="container"><p>D) 
		  <input type="radio" name="radio" value="D">
		  <span class="checkmark"></span>
		</label> </p>
		<button form action="action2">Confirm Answer</button>
		  </div>
		  </div>
		</form>
		</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Delhi" class="tabcontent">
  <h3>Delhi</h3>
  <p>Delhi is the capital of India.</p>
  
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>



<script>
function openCity(evt, cityName) {

  var i, tabcontent, tablinks;
  
  tabcontent = document.getElementsByClassName("tabcontent");
  
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  
  tablinks = document.getElementsByClassName("tablinks");
  
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  
  document.getElementById(cityName).style.display = "block";
  
  evt.currentTarget.className += " active";
  
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
 

</body>
</html> 

<?php }
else{
    echo "<h1>cannot access this page directly</h1>";

}?>


