<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','delurand@gmail.com');
	define('MESSAGE_SUBJECT','Email client');
	define('REPLY_TO', 'delurand@gmail.com');
	define('FROM_ADDRESS', 'delurand@gmail.com');
	define('REDIRECT_URL', 'http://your site here/');
	
	require_once('validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>GD Designs</title>
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="styles/css/stylesheet.css">




</head>

<body class="contact">

<!-- Menu Bar -->
<?php include('inc/nav.inc.php'); ?>

    
    <!-- END OF Menu Bar -->
    
    
    
    
    
    <!-- Website content -->
    <div class="container-fluid">
    
       <div class="row">
         <div class="col-sm-1 hidden-xs">
       
        </div>
         <div class="col-xs-12 col-sm-10">
       
        


         <img src="images/banner.jpg" alt="logo" class="img-responsive">
      
       </div>
       
        <div class="col-sm-1 hidden-xs">
       
        </div>

        </div>
        
        
 
      
     <div class="row">
         <div class="col-xs-12">
         
       <?php include('inc/form.php'); ?>
       
        </div>
        </div>


</div><!-- END OF Container-Fluid -->





<!-- END OF Website content -->
<footer>
        <p>GD STYLES&copy; Company 2014</p>
      </footer>

<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
    
    
</body>
</html>
