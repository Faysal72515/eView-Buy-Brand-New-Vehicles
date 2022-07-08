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
        <div class="row">
                 
                 <div class="col-sm-12 bg-warning">
              
                      <h1 style="padding-left: 40%; color:navy"> ADD PRODUCT</h1> 
        


               </div>

               <div class="container-fluid">
            <div class="row">
                 
                <div class="col-sm-12 bg-info text-center">
                <div class="row">
                 <div class="col-sm-2 bg-info ">
                      <p> l</p> 
                 </div>
                 

                 <div class="col-sm-8 bg-info ">
                <!--   
                 <h6>  Add your Product Information</h6>
                <form id="product" name="product" enctype="multipart/form-data" method="post" action="" >
      
                <p> Product Name</p> 
                    <input type="text" id="pname" name="pname" placeholder="Write your product name">
                    <p> Upload product image</p> 
                    <input type="file" id="img" name="img" >
                    <p> quentity</p>
                    <input type="number" id="quentity" name="quentity" placeholder="Write your product quentity"><br>
                <p> Product Price</p>
                    <input type="number" id="price" name="price" placeholder="Write your product price"><br>

                    <input type="submit" name="btn_upload" value="Add product"onclick="return confirm()" >
                
                </form>
-->

<h4 style="color: white;">  <u>Add Product Information </u></h4>
<form id="product" name="product" method="post" action="insert_product.php"  enctype="multipart/form-data" onsubmit="return form_validation()">

    <div>Product Name:</div>
    <input type="text" id="pname" name="pname" placeholder="Write your product name">

    <div>Upload product image:</div>
      <input type="file" name="img" id="img" > 
   
	<div>Product Price:</div>
	<input type="number" id="price" name="price" placeholder="Write product price"><br>
    <div>Product Quentity</div>
    <input type="number" id="quentity" name="quentity" placeholder="Write product quentity"><br>

     <div>Product Description:</div>
     <textarea name="pdesc" id="pdesc" rows="1" cols="40"></textarea>

    <input type="submit" name="btn_upload" value="Submit product"onclick="return confirm()" >
</form>
<br>
<br>
<br>
<br>
<br>
<br>



                 </div>
                 

                 <div class="col-sm-2 bg-info ">
                      <p> r</p> 
                 </div>
                 

                </div>
                
                
                </div>
        
                <?php
                include("../footer/footer.php");
               ?>  
            </body>


    </html>