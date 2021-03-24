<html>
<head>
    <title> Marwa Floyd Realestate</title>
      <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="forms.css" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" /> 
    
    </head> 

   
     <header> 
        
     <style>
         h1 {
             font-family: 'Lobster', cursive;
         }
         p  {
             font-family: 'Lobster', cursive;
         }
         </style>    
        
         <h1><a href="template.html">Marwa Floyd Realestate </a></h1>
    <ul>
    <li><a>Home</a></li>
    <li><a>About</a>
        <ul>
        <li><a>Bio</a></li>
        </ul>
        
    </li>
    <li><a>Services</a></li>
    <li><a>Contact</a>
    <ul>
        <li><a>Form</a></li>
        </ul>
        <ul>
        <li><a>Address</a></li>
        </ul>
        <ul>
        <li><a>Phone</a></li>
        </ul>
        
    </li>
    </ul>
    </header>
    <main class="wrapper">
        <h2 class="subheader"> Contact Marwa</h2>
        
    
        <p>	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "haidar.aliwi1988@gmail.com";  //place your/your client's email address here
        $toName = "Marwa"; //place your client's name here
        $website = "Web161 Contact form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>  </p>
    <footer>
          <p><small>&copy; 2021 by <a href="contact.php">Haidar Aliwi</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
        </footer>
     </main>

</html>