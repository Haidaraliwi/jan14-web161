<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Haidar Aliwi's IT161 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
 </head>
 <body>
     <header>
     <h1>Haidar's IT161 Website</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="aia.html">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.html">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php">Contact Haidar</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
     
     <img class="desktop" src="images/desktop.jpg" alt="Photo of an adorable puppy" />
       
     <img class="tablet" src="images/tablet.jpg" alt="Photo of Cesar the war puppy in Seattle" />
       
     <img class="phone" src="images/phone.jpg" alt="first Photo of my war puppy Cesar" />
       
       <h2 class="subheader">A little about Cesar!</h2>
       
       <p> This will be the first time of me telling Cesar's the dog story, I met my dog Cesar during a mission little outside my base in Baghdad Iraq date of October 2019, me and my buddies noticed a small puppy age around 4-8 weeks old in the middle of nowhere with no food or water. We gave him food and water and he started walking after he was laying down tired from the hot weather around 120F in that day without shade. We decided to leave him behind in that day incase he has a mother that will look for him in addition to that we have work to do as well. So we left. </p>
       <p>After that day it took us couple days to drive again by Cesar’s location again. we did not think that we will see him again either he left the place or did not make it due to the hot weather and lack of water. Although I was not much of a dog person because I have a cat, I only wanted to see him live. We saw him again and he was so excited to see us. I was so happy, and I came prepared this time with some can meats in my pocket. Fed the dog and we left again. </p>
       <p>Cesar touched my feelings a lot that time, he was trying to survive and somehow reminded me of myself as a young kid who grew up in Iraq without a father, and as growing man now who also trying to survive the daily rocket attacks during my deployments. I made him promise that I will take him home (Seattle) and I did. The next time we saw Cesar was 4 days later. Due to being under attack we could not leave base with or without reasons. During that time, I was thinking of his life instead of mine. And I was hoping that he was still alive. Until my commander said we are going to some location and we can drive by the dog because he knew I cared for Cesar. So we drove by on our way back to base and found him alive and waiting one more time, and I took him in my vehicle to base. From there I contacted my unit back in the states to arrange his flight to Seattle while I was going to stay in Iraq for another 6 months to finish my job. After the hard 6 months I came back home and found Cesar waiting with a smile. And he still smiles every day I go out and come back home. </p>
        
       
       <main class="wrapper">
           <h2 class="subheader">Contact Haidar</h2>
           <p>	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "haidar.aliwi@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Haidar"; //place your client's name here
        $website = "Web161 contact form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
           </p>
       
       </main>
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Haidar Aliwi</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>