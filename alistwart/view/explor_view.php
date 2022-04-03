<?php

if(isset($_POST["explor_btn"])){
   $sm = $object->explor_function($_POST);
}


?>







<h2 class="text-center my-4">Add expor NFTs</h2>

 <?php  if(isset($sm)){echo $sm;}  ?>

<div class="container m-auto mt-5">
 <form action="" method="POST" enctype="multipart/form-data">
  <input type="number" style="color:#5138ee; font-weight:bold;  height: 59px;" name="explor_price" placeholder="please enter price without 0." class="form-control my-4">
  <input type="file" style="color:#5138ee; font-weight:bold;   height: 59px;" name="explor_img" class="form-control my-4">
  <input type="submit" name="explor_btn" style="color:#5138ee; font-weight:bold;   height: 59px;"  value="submit your explor data" class="form-control my-4">
 </form>
</div>