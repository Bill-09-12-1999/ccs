<?php

 if(isset($_POST['submit']) && isset($_FILES['image'])){
   include "conn.php";
   $name=$_POST['name'];
   echo "<pre>";
   print_r($_FILES['image']);
   echo "<pre>";

   $img_name = $_FILES['image']['name'];
   $img_size = $_FILES['image']['size'];
   $tmp_name = $_FILES['image']['tmp_name'];
   $error = $_FILES['image']['error'];

   if($error === 0){
     if($img_size > 1250000){
       $em = "Sorry, your file is too large";
       header("location:upload1.php?error=$em");
     }else{
       $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
       $img_ex_lc = strtolower($img_ex);

       $allowed_exs = array("jpg", "jpeg", "png");

       if(in_array($img_ex_lc, $allowed_exs)){
         $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
         $img_upload_path= 'upload1/'.$new_img_name;
         move_uploaded_file($tmp_name, $img_upload_path);

         $sql = "INSERT INTO upload1(name,image)VALUES('$name','$new_img_name')";
         mysqli_query($link,$sql);
         header("location:upload1.php");
       }else{
         $em = "You can't upload files of this type";
         header("location:uploadtest1.php?error=$em");
       }
     }
   }else{
      $em = "unknown error occured!";
      header("location:upload1.php?error=$em");
   }
 }else{
   $em = "Success";
   header("location:upload1.php?success=$em");
 }
?>
