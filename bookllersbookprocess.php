<?php
include("database_con.php");
session_start();
$uid=$_SESSION["ss_id"];
$fname=$_SESSION["ss_fnm"];
$bnm=$_POST["bname"];
$athr=$_POST["author"];
$prc=$_POST["price"];
$stck=$_POST["quantity"];
$cat=$_POST["catagory"];
$pth="upload_img/".$bnm.$uid.$fname."bookllers.jpg";
$size=$_FILES["book_img"]["size"];

$types=array('image/jpg','image/jpeg');
$msg="";

if(!empty($bnm) && !empty($athr) && !empty($prc) && !empty($stck) && !empty($cat))
{


if((($size/1024)< 400.0 ) && (in_array($_FILES['book_img']['type'], $types))){

    move_uploaded_file($_FILES["book_img"]["tmp_name"],$pth);
	
    $s="insert into bookllers_book(uid,book_name,author,price,quantity,img_path,catagory) values('$uid','$bnm','$athr','$prc','$stck','$pth','$cat')";
    $i=mysqli_query($con,$s);
    
    echo "<script>alert('Book inputed successfully.');window.location='bookllersbookloop.php';</script>";


	
}

else{
	echo "<center><h1 style='margin-top: 20px; color: DarkOrange;'>Your file size should be less than 400KB and .jpg, .jpeg type</h1></center> <br><br>";
	echo "<center><h1 style='margin-top: 30px;color: LightSeaGreen; text-decoration: none;'><a href='bookllers_bookinput.php'>Go Back</h1></center></a>";
}
}
?>
