<?php
include("database_con.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>BOOKLLERS</title>
    
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
                        <h2 class="wow zoomInDown" data-wow-duration="3s">GRAB YOUR BOOKS!</h2>
                        <h1 class="wow flipInY"><b>BOOKLLERS</b></h1>

                        <a class="btn btn-reverse wow zoomIn" href="#products">
                            <h3>Books are Here</h3>                            
                        </a><!--#NOTE: texts inside the OPTIONAL tag above would be hidden on smaller mobile screens -->
                        <a class="btn btn-reverse wow zoomIn" href="bookllers.php">
                            <h3>Jump to Back</h3>                            
                        </a>
                        <p class="wow fadeInUp" data-wow-duration="2s">Visit Our Products</p>

                       
                    </div>

                   
                </div>
            </div>
        </div>
    </div><!--HERO SECTION END-->
    
    <!-- ===========================
    OVERVIEW SECTION
    =========================== --> 
    <div id="overview" class="container">       
        <!--SECTIONHEAD START-->
        <div class="sectionhead">            
            <h2>Our <span class="highlight">promises</span> to You</h2>
            
            <hr>
        </div><!--SECTIONHEAD END-->
        
        <!--OVERVIEW ITEMS-->
        <div class="row">
            
            <div class="col-md-6 col-lg-4">
                <img src="img/o2.png" alt="">
                <h4>Secure</h4>
                
            </div><!--ITEM END-->

            <div class="col-md-6 col-lg-4">
                <img src="img/o3.png" alt="">
                <h4>Cash On delivery</h4>
                
            </div><!--ITEM END-->

            <div class="col-md-6 col-lg-4">
                <img src="img/o6.png" alt="">
                <h4>No Delivery Charge</h4>
                
            </div><!--ITEM END-->
        </div><!--OVERVIEW ITEMS END-->
    </div><!--OVERVIEW SECTION END-->
    
    <!-- ===========================
    CALL-TO-ACTION SECTION
    =========================== -->
    <div class="calltoaction">
    <div class="lightoverlay">
        <div class="container">
            <div class="col-md-4">
              
            </div><!--CALL-TO-ACTION IMAGE END-->

            <div class="sectionhead content col-md-8">
                <h2><span class="highlight">Create</span> Account for Shopping</h2>
                
                <a href="bookllers_buyerregister.php" class="btn btn-default">Create</a>
            </div><!--CALL-TO-ACTION CONTENT END-->
        </div><!--CALL-TO-ACTION CONTAINER END-->
    </div><!--CALL-TO-ACTION OVERLAY END-->
</div><!--CALL-TO-ACTION END-->
    
    <!-- ===========================
    PRODUCTS SECTION
    =========================== -->
    <div id="products" class="container">
   

        <!--SECTIONHEAD START-->
        <div class="sectionhead text-center">
            <h2>Catch the <span class="highlight">low cost</span> books</h2>
            
            <hr>
        </div><!--SECTIONHEAD END-->
<?php
$cata=$_GET["catagory"];
                    $k="select  bookllers_book.uid as usr, bookllers_book.id as bid, bookllers.firstname as fnm,bookllers.lastname as lnm,bookllers.branch as brnc,bookllers.contact_no as cntct,bookllers.whatsapp_no as whtsap,bookllers_book.book_name as bnm,bookllers_book.author as athr,bookllers_book.price as prc,bookllers_book.quantity as qunty,bookllers_book.img_path as pth from bookllers,bookllers_book where bookllers.id=bookllers_book.uid and bookllers_book.catagory='$cata' order by bookllers_book.id desc";
                     $r=mysqli_query($con,$k) ;
                    ?>
       
        <!--SMALL ITEM 1ST ROW START-->
        <div class="row moreitems">
            <!--SMALL ITEM 1 START-->
            <?php
             while($row=mysqli_fetch_assoc($r)){
                ?>
            <div class="col-md-6">
                <!--SMALL PRODUCT IMAGE START-->
                <div class="col-md-4 text-center">
                    <a href='bookllers_updatelogin.php?t1=<?php echo $row["bid"]; ?>'>
                        <img class="productimg" src="<?php echo $row["pth"]; ?>" width="180" height="230" alt="">
                    </a>
                </div>
                    
                <div class="col-md-8">
                <?php
                    echo "<h4>Name: ".$row["fnm"]." ".$row["lnm"]."</h4>";
                    echo"<p>Branch: ".$row["brnc"]."</p>";
                    echo"<p>Contact No: ".$row["cntct"]."</p>";
                    echo"<h6>Book: ".$row["bnm"]."</h6>";
                    echo"<p>Author: ".$row["athr"]."</p>";
                    echo"<p>In Stock: ".$row["qunty"]."</p>";?>
                    <p class="price">Rs. <span class="highlight"><?php echo $row["prc"] ?></span> / piece</p>
                    <a href='bookllers_loginbuy.php?b1=<?php echo $row["bid"]; ?>' class="btn btn-default">Buy now</a>
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
        <a href="about.htm" style="text-decoration: none;"><h2 class="logo">BOOKLLERS<span class="highlight"> About</span></h2></a>
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
