<?php
include("database_con.php");
session_start();
$sellerid=$_SESSION["ss_id"];
$fnam=$_SESSION["ss_fnm"];
$lnam=$_SESSION["ss_lnm"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>BOOKLLERS ORDER-POCKET</title>
    
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
                        
                        <h1 class="wow flipInY"><b><?php echo $fnam." ".$lnam ;?></b></h1>

                        <a class="btn btn-reverse wow zoomIn" href="bookllers_selleraccount.php">
                            <h3>Back</h3>                            
                        </a><!--#NOTE: texts inside the OPTIONAL tag above would be hidden on smaller mobile screens -->
                    </div>

                </div>
            </div>
        </div>
    </div><!--HERO SECTION END-->
    
    <!-- ===========================
    PRODUCTS SECTION
    =========================== -->
    <div id="products" class="container">

        <!--SECTIONHEAD START-->
        <div class="sectionhead text-center">
            <h2>Your <span class="highlight">Orders</span> are Here</h2>
            
            <hr>
        </div><!--SECTIONHEAD END-->
<?php
                    $deliver="select bookllers_deliverdorder.order_id as odr, bookllers_deliverdorder.customer_fnm as fnm, bookllers_deliverdorder.customer_lnm as lnm, bookllers_deliverdorder.customer_cntct as phn, bookllers_deliverdorder.customer_address as addrs, bookllers_deliverdorder.book_name as bnm, bookllers_deliverdorder.price as prc, bookllers_deliverdorder.img_path as img from bookllers_deliverdorder, bookllers_orderdetails where bookllers_deliverdorder.order_id=bookllers_orderdetails.order_id and bookllers_orderdetails.seller_id='$sellerid'";
       				$res=mysqli_query($con,$deliver) ;
                    ?>
       
        <!--SMALL ITEM 1ST ROW START-->
        <div class="row moreitems">
            <!--SMALL ITEM 1 START-->
            <?php
              while($row=mysqli_fetch_assoc($res)){
                ?>
            <div class="col-md-6">
                <!--SMALL PRODUCT IMAGE START-->
                <div class="col-md-4 text-center">
                        <img class="productimg" src="<?php echo $row["img"]; ?>" width="170" height="230" alt="">
                    </a>
                </div>
                    
                <div class="col-md-8">
                <?php
                    echo "<h4>Customer Name: ".$row["fnm"]." ".$row["lnm"]."</h4>";
                    echo"<p>Order No: ".$row["odr"]."</p>";
                    echo"<p>Contact No: ".$row["phn"]."</p>";
                    echo"<p>Address: ".$row["addrs"]."</p>";
                    echo"<p>Book Name: ".$row["bnm"]."</p>";?>
                    <p class="price">Rs. <span class="highlight"><?php echo $row["prc"] ?></span> / piece</p>
                    
                </div><!--SMALL PRODUCT DESCRIPTION END-->

            </div><!--SMALL ITEM 1 END-->

          <?php
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
