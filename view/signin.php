<?php
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="validation check/validation.js"></script>
        <script src="validation check/signinvalidation.js"></script>
        <style>
         b { text-align: center; color: ghostwhite;}
         
       
        </style>
        
        <title>
          eView SignIn
            </title>
        </head> 
        <body>
                                               
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12 bg-info"> 
                    <div class="row">
                     <div class="col-sm-4 bg-info">
                       <img  src="../images/gmail.png"  alt="gmail" class="rounded" style=" width:30px; height:30px;">
                       <i> faysalsardere369@gmail.com</i>
                     </div>
                     <div class="col-sm-4 bg-warning"> 
                       <img  src="../images/call1.png"  alt="cell" class="rounded" style=" width:30px; height:30px;">
                       +88 01797-651089
                     </div>
                     <div class="col-sm-4 bg-info">
                       <img  src="../images/location2.png"  alt="locatin" class="rounded" style=" width:30px; height:30px;">
                       Ekuria, Dhaka, Bangladesh
                     </div>
                   </div>
                  </div>
 
                  </div>
                  <div class="row">
                    <div class="col-sm-12 bg-info">
                        
                        <img  src="../images/singnin.jpg"  alt="Banner" style ="width:100%" height="200">
                    </div>                           
                 </div>
                    <div class = "row"> 
                        <div class="col-sm-12 bg-info ">


                            <nav class="navbar navbar-expand-md bg-info navbar-light">
                                <!-- Brand -->
                                <a class="navbar-brand" href="../index.php">
                                  <img  src="../images/home1.png"  alt="Logo" class="rounded" style=" width:30px; height:30px;">
                                </a>
                              
                                <!-- Toggler/collapsibe Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                              
                                <!-- Navbar links -->
                                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                  <ul class="nav nav-tabs ">
                                    <li class="nav-item">
                                      <a class="nav-link " href="../order.php"> <b>Back</b></a>
                                    </li>
                                    

                                  </ul>
                                </div>
                              </nav>
                        </div>
                </div>
<br>
<div class="row">
    <div class="col-sm-4 "></div>   
    <div class="col-sm-4 bg-info "> 
        

        <h4 style="color: cornsilk;"><u>SignIn</u></h4> <br>

        <!--
                                                            <form action="#">
                                                                
                                                                    <div class="form-group">
                                                                      <label for="email">Email:</label>
                                                                      <input type="email" class="form-control" id="email" placeholder="email" name="email">
                                                                    </div> 
                                                                 

                                                                  <div class="form-group">
                                                                    <label for="pwd">Password:</label>
                                                                    <input type="password" class="form-control" id="pwd" placeholder="Char length (6-11)" minlength="6" maxlength="11" name="password">
                                                                    </div>

                                                                  
                                                                <button type="submit" class="btn btn-primary">Submit</button> 
                                                                <div class="form-group">
                                                                <input type="reset" value="Reset"> </div>
                                                            </form>

  
-->

<p style="text-align: center;"> <img  src="../images/sign-up.png"  alt="Logo" class="rounded" style=" width:100px; height:100px;"> </p>
<form id="signin" name="signin" method="post" action="../model/check_customer.php" onsubmit="return signin_validation()">
    <table style="padding-left: 150px;">
        <tr> <td><b>Email:</b><br> <br></td> <td><input type="email" id="email" placeholder="E-mail" name="email" maxlength="25"> <br> <br></td> </tr>
         <tr> <td> <b>Password: </b><br> <br> </td> <td><input type="password" id="password" name="password" placeholder="Your password" minlength="6" maxlength="15" > <br> <br></td> </tr>
         <tr><td> </td> <td> </td><td><input type="submit" value="Submit"> 
        </td></tr>
    </table>


    </form>
  <!-- <span style="color:#000;">Not a member yet?</span> <a href="#" title="create a account" target="" style="color:#154360;">&nbsp;<b style="color: crimson;">Sign Up</b></a> <br>
 --> 

          <!-- Button to Open the Modal -->
        <p style="text-align:center;">  Not a member yet? <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">
            <b style="color:crimson;">  SignUp  </b>
          </button> </p>
          
          <!-- The Modal -->
          <div class="modal" id="myModal">
              <div class="modal-dialog">
              <div class="modal-content">
              
                  <!-- Modal Header -->
                  <div class="modal-header">
                  <h4 class="modal-title">SignUp</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body bg-info">
                  
                    <p style="text-align: center;"> <img  src="../images/sign-up.png"  alt="Logo" class="rounded" style=" width:100px; height:100px;"> </p>

                      <form id="signup" name="signup" method="post" action="../model/add_customer_info.php" onsubmit="return form_validation()">
                          <div class="form-group">
                          <label for="fusr">First Name:</label>
                          <input type="text" class="form-control" id="f_name" placeholder="first name" name="fname" maxlength="25">
                          </div>

                          <div class="form-group">
                              <label for="lusr">Last Name:</label>
                              <input type="text" class="form-control" id="l_name" placeholder="last name" name="lname"maxlength="25">
                              </div> 
                              <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="email" name="email">
                              </div> 
                            <div class="form-group">
                              <label for="age">Age:</label>
                              <input type="number" class="form-control" id="age" placeholder="Age" name="age" maxlength="3">
                            </div> 

                            

                            <div class="form-group">
                              <label for="country">Country:</label>
                              <input type="text" class="form-control" id="country" value="Bangladesh" name="country" readonly>
                            </div>

                            <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="password" placeholder="passsword" minlength="6" maxlength="15" name="password">
                              </div>

              

                            <div class="form-group">
                              <label for="gender">Gender:</label>
                              <input type="radio" id="male" > <label for="male">male</label>
                              <input type="radio" id="female" > <label for="female">female</label>
                              <input type="radio" id="other" > <label for="other">other</label>
                            </div>

                            
                          <div class="form-group">
                            Agree: <input type="checkbox" id="agree" name="agree">
                          <label for="agree"> yes!</label>
                         </div>
                          <button type="submit" class="btn btn-primary" onclick="return confirm()">Submit</button> 
                          
                          <input type="reset" value="Reset">
                      </form>




                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
                  </div>
                  
              </div>
              </div>
          </div>







<br>


    </div>  
    <div class="col-sm-4 "></div>  
    
</div>


<br>
               

                <div class="row">
                    <div class="col-sm-9 bg-danger text-center text-white"> <i> <b> <br> Copyright@2021 </b></i> </div>
                    <div class="col-sm-3 bg-warning"> 
                      <a href="https://www.google.com/" target="_blank"><img src="../images/google.png"  class="rounded-circle" style=" width:50px; height:50px;"></a>
                      <a href="https://www.yahoo.com/" target="_blank"> <img src="../images/yahoo.png" class="rounded-circle" style=" width:50px; height:50px;"> </a>
                       <a href="https://www.facebook.com/" target="_blank"> <img src="../images/facebook.png" class="rounded-circle" style=" width:50px; height:50px;"></a>
                        <a href="https://www.cityuniversity.edu.bd/" target="_blank"><img src="../images/cityvarsity.png" class="rounded-circle" style=" width:50px; height:50px;"></a>
                          <a href="https://sites.google.com/view/faysal515" target="_blank"> <img src="../images/mysite.png" class="rounded-circle" style=" width:50px; height:50px;"></a>
                        
                    </div>

                </div>
                
                </div>
            
            </body>


    </html>