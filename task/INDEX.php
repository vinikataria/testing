<!DOCTYPE html>
<?php
include('config.php');
?>
<html lang="en">

<head>
      <!--meta tags--->
    
    <!--end meta tags---->
     <!-- css---->
	<link rel="stylesheet" href="style.css">
	      <title>login</title>
</head>
    <body>
        <div class="main_site">
              <div class="main">
                <div class="button_box ">
                    <div id="btn"></div>
                     <button type="button" class="button_class" onclick="Singin()">Sing in</button>
                     <button type="button" class="button_class" onclick="Singup()">Sing Up</button>
                </div>
                    <div>
                      <form class="sing_in" id="Log_in" ACTION="singin.php" method="post">
                          <input type="text" class="input_field" placeholder="User Id" name="user_id" required><br>
                          <input type="Password" class="input_field" placeholder="Password" name="password" required><br>

                          <button type="submit" class="submit_btn" name="btn">Log in</button>
                      </form>
                      </div>
                    
                    <div class="">
                    <form class="sing_in" id="register" action="singup.php" method="post">
                        <input type="text" class="input_field" placeholder="Name" name="name" required><br>
                        <input type="text" class="input_field" placeholder="User id" name="userid" required><br>
                        <input type="text" class="input_field" placeholder="Email id"name="emailid" required><br>
                        <input type="password" class="input_field" placeholder="Password" name="pass" required><br>
                       
                        <button type="submit" class="submit_btn" name="singup">Sing Up</button>
                    </form>
                    </div>
                </div>
        </div>
        <script>
            
           var x = document.getElementById("Log_in");
           var y = document.getElementById("register");
           var z = document.getElementById("btn");

           function Singup(){
               x.style.left ="-400px";
               y.style.left ="50px";
               z.style.left ="110px";
           }

           function Singin(){
               x.style.left ="50px";
               y.style.left ="450px";
               z.style.left ="0px";
           }
           
           

        </script>
    </body>
    </HTML>