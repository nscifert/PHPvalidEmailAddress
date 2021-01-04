<?php
function	displayPostStatus()	{
  if	($_SERVER["REQUEST_METHOD"]	==	"POST")	{   //test if the post has been submited and is not blank
        if (isset($_POST['email']) && $_POST['email']!="") {
          //echo $_POST['email'] . " was submited.";
          
          vaildateEmail(); //calls vaildateEmail function
          
        }

    else {
          echo "Please submit a vaild email.";
        }
    }
  else{
        echo	"No	Post	Detected";
  }
}

function vaildateEmail() {
  $email = $_POST['email'];

  //filters the $email variable and prints vaild if vaild and invaild if the email is invalid
  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<p style="color:green">';
    echo $email . "  is a vaild email address" . "\n";
  }
  else
  {
    echo '<p style="color:red">';
    echo $email . "  is an invaild email address." . "\n";
  }
}
?>

<html lang = "en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Email Address Vaildation</title>   
  </head>

<body>
<div class="container theme-showcase" role="main">  
   <div class="jumbotron">
      <h1><?php  ?></h1>
   </div>
   <p> Enter an email address. </p>
   <!-- creates the form and adds a submit button to the form -->
   <form action='' method='POST'>
       <input type='text' name='email' />
      <input type='submit' value='Submit' />
   </form>
   <p style><?php displayPostStatus(); //displayPostStatus function call ?></p>
 </div>
</body>
</html>
