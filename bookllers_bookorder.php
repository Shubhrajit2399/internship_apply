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
                    $order="select buy_account.fname as frstnm, buy_account.lname as lstnm, buy_account.cntct as phn, buy_account.address as adrs, bookllers_orderdetails.order_id as orderno, bookllers_orderdetails.book_nmae as bknm, bookllers_orderdetails.author as athr, bookllers_orderdetails.price prc, bookllers_orderdetails.image as pic, bookllers_orderdetails.sell_status as ordr from bookllers_orderdetails, buy_account where bookllers_orderdetails.buyer_id=buy_account.buy_id and bookllers_orderdetails.seller_id='$sellerid' order by bookllers_orderdetails.order_id desc";
					 $result=mysqli_query($con,$order) ;
                    ?>
       
        <!--SMALL ITEM 1ST ROW START-->
        <div class="row moreitems">
            <!--SMALL ITEM 1 START-->
            <?php
             while($row=mysqli_fetch_assoc($result)){
                ?>
            <div class="col-md-6">
                <!--SMALL PRODUCT IMAGE START-->
                <div class="col-md-4 text-center">
                        <img class="productimg" src="<?php echo $row["pic"]; ?>" width="170" height="230" alt="">
                    </a>
                </div>
                    
                <div class="col-md-8">
                <?php
                	echo "<h5 style='color:red;'>Status: ".$row["ordr"]."</h5>";
                    echo "<h4>Customer Name: ".$row["frstnm"]." ".$row["lstnm"]."</h4>";
                    echo"<p>Order No: ".$row["orderno"]."</p>";
                    echo"<p>Contact No: ".$row["phn"]."</p>";
                    echo"<p>Address: ".$row["adrs"]."</p>";
                    echo"<p>Book Name: ".$row["bknm"]."</p>";?>
                    <p class="price">Rs. <span class="highlight"><?php echo $row["prc"] ?></span> / piece</p>
                    <a href="bookllers_orderdeliver.php?ordrid=<?php echo $row['orderno'];?>" class="btn btn-default">Delivery Done</a>
                  
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
