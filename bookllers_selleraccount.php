<?php
include("database_con.php");
session_start();
if (! empty ($_SESSION["ss_fnm"])){
$firstname=$_SESSION["ss_fnm"];
$lastname=$_SESSION["ss_lnm"];
}
else {
    header("location:bookllers.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    
    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>BOOKLLERS SELLER ACCOUNT</title>
    
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
                        
                        <h1 class="wow flipInY"><b><?php echo $firstname." ".$lastname ;?></b></h1>

                        <a class="btn btn-reverse wow zoomIn" href="bookllers_logoutsuccess.php">
                            <h3>Logout</h3>                            
                        </a><!--#NOTE: texts inside the OPTIONAL tag above would be hidden on smaller mobile screens -->
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
            <h2>Your <span class="highlight">options</span> are Here</h2>
            
            <hr>
        </div><!--SECTIONHEAD END-->
        
        <!--OVERVIEW ITEMS-->
        <div class="row">
            
            <div class="col-md-6 col-lg-4">
                
                <a href="bookllers_bookorder.php" class="btn btn-default">Book Orders</a>
            </div><!--ITEM END-->

            <div class="col-md-6 col-lg-4">
                <a href="bookllers_deliverdorder.php" class="btn btn-default">Delivered Orders</a>
            </div><!--ITEM END-->

            <div class="col-md-6 col-lg-4">
                <a href="bookllers_bookinput.php" class="btn btn-default">Enter New Book</a>
            </div><!--ITEM END-->
        </div><!--OVERVIEW ITEMS END-->
    </div><!--OVERVIEW SECTION END-->
    <footer class="container text-center"> 
    <hr>
    </footer>
    <!--NECESSARY SCRIPTS
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
