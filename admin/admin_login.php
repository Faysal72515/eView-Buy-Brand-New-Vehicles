<?php
?>
<!DOCTYPE html>
<html>
    <head>
    <?php
    include("head/head.php");
?>
        </head> 


        <body>
        
              <?php
                include("header/header.php");
               ?>   
     <div class="container-fluid">
        <div class="row">
                 
                 <div class="col-sm-12 bg-danger">
              
                      <h1 style="padding-left: 40%; color:honeydew"> ADMIN LOGIN</h1> 

                     </div>
                    </div>
                <div class="row">
                 
                 <div class="col-sm-4  text-light">
                 </div>
                 <div class="col-sm-4 bg-info text-dark">
<h4 style="color:aliceblue;">  <u>Add Username & Password </u></h4>
<form id="admin" name="admin" method="post" action="check_admin.php"  >
    <table>
   <tr> <td style="color:honeydew"> Username*:</td> <td><input type="text" id="name" name="a_name" placeholder="Enter Username"> </td> </tr>
   <tr> <td style="color:honeydew"> Password*:</td> <td><input type="password" id="pass" name="a_password" placeholder="Write Password"> </td> </tr>

   <tr> <td></td><td></td> <td><input type="submit" name="btn_upload" value="Login"onclick="return confirm()" ></td> </tr> 
    </table>
</form>
<br>

<div class="col-sm-4 bg-light text-dark">
                 </div>


                 

                </div>
                </div>


    
            
        
              
            </body>


    </html>