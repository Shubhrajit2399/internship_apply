<?php
include("database_con.php");
session_start();
if (! empty ($_SESSION["buyerfnm"])){
$id=$_REQUEST["bookid"];
$buyer_fnm=$_SESSION["buyerfnm"];
$buyer_lnm=$_SESSION["buyerlnm"];
}
else {
  header("location:bookllers.php");
}
$d="select bookllers.firstname as seller_fnm,bookllers.lastname as seller_lnm,bookllers_book.id as bookid,bookllers_book.uid as sellerid,bookllers_book.book_name as bookname,bookllers_book.author as bookauthor,bookllers_book.price as bookprc,bookllers_book.img_path as bookpic from bookllers_book, bookllers where bookllers_book.uid=bookllers.id and bookllers_book.id=$id ";
$result=mysqli_query($con,$d);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>Confirm Order</title>
    
    <!-- ===========================
    FAVICONS
    =========================== -->
    <link rel="icon" href="img/BOOKLLERS_LOGO.png">
    
    <!-- ===========================
    STYLESHEETS
    =========================== --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">        
    
    <!-- ===========================
    FONTS
    =========================== -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,900,600|Pacifico' rel='stylesheet' type='text/css'>
    
    <!-- ===========================
    GOOGLE ANALYTICS (Optional)
    =========================== -->
        
    <!-- #NOTE: Replace this line with your analytics code -->
    
    <!--ANALYTICS END-->

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- ===========================
    HERO SECTION
    =========================== -->
    <div id="hero">
        <div class="redoverlay">
            <div class="container">
                <div class="row">
                    <div class="herotext">
                        <h1 class="wow flipInY"><b><?php echo $buyer_fnm." ".$buyer_lnm;?></b></h1>
                    </div>
                </div>
            </div>
        </div>
    </div><!--HERO SECTION END-->
   
    <!-- ===========================
    PRODUCTS SECTION
    =========================== -->
    <div id="products" class="container">
        <!--SMALL ITEM 1ST ROW START-->
        <div class="row moreitems">
            <!--SMALL ITEM 1 START-->
            <?php
            while($row=mysqli_fetch_assoc($result)){
                ?>
            <div class="col-md-6">
                <!--SMALL PRODUCT IMAGE START-->
                <div class="col-md-4 text-center">
                        <img class="productimg" src="<?php echo $row["bookpic"]; ?>" width="180" height="230" alt="">
                    </a>
                </div>
                    
                <div class="col-md-8">
                <?php
                    echo "<h4>Seller Name: ".$row["seller_fnm"]." ".$row["seller_lnm"]."</h4>";
                    echo"<h6>Book: ".$row["bookname"]."</h6>";
                    echo"<p>Author: ".$row["bookauthor"]."</p>";?>
                    <p class="price">Rs. <span class="highlight"><?php echo $row["bookprc"] ?></span> / piece</p>
                    <a href='bookllers_confdetailsprocess.php?bkid=<?php echo $id;?>' class="btn btn-default">Confirm</a>
                </div><!--SMALL PRODUCT DESCRIPTION END-->

            </div><!--SMALL ITEM 1 END-->

          <?php
          	$_SESSION["book_id"]=$row["bookid"];
       		$_SESSION["seller_id"]=$row["sellerid"];
       		$_SESSION["bknm"]=$row["bookname"];
       		$_SESSION["athr"]=$row["bookauthor"];
       		$_SESSION["prc"]=$row["bookprc"];
       		$_SESSION["img"]=$row["bookpic"];
}
?>
        </div><!--SMALL ITEM 2ND ROW END-->
    <!-- ===========================
    FOOTER
    =========================== -->
    <footer class="container text-center"> 
        <hr>
    </footer><!--FOOTER END-->
    
    <!-- 
    
    NECESSARY SCRIPTS
    =========================== --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="js/evenfly.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/snowstorm-min.js"></script>
    <script>new WOW().init();</script>    
</body>
</html>
