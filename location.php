
<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
  <head>
    <title>Locations | Alamo Family Foot & Ankle Care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- local CSS for google maps -->
    <style type="text/css">
      
      #map-canvas { 

       width: 100%;
       height: 710px;
  
      }
     
    </style>
    <!-- local CSS for google maps -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <link href="css/mystyles.css" rel="stylesheet">
    <!-- <link href="css/glyphicons.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
    
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <meta http-equiv="X-UA-Compatible" content="IE=9">
      

  </head>

  <body id="Location">


  <?php include 'components/navhead.php'; ?>



  <div class="navibar">
    <section class="container">
  
      <div class="pull-left">
        <p>Locations<p>
      </div><!-- pullleft -->
      <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Locations</li>
        </ol><!-- breadcrumb -->
      </div><!-- pull-right -->
     
    </section><!-- container -->
  </div><!-- navibar -->


    <div id="map-canvas"></div>
    
     

<!-- footer -->
<div style="margin-top: -70px">
   <?php include 'components/footer.php'; ?>
   </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>
    <!-- google maps -->
    <script type="text/javascript"
       src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB04qAy3ED0uYAgHWV4ZA8LJsomQg8T1m8&sensor=true">
    </script>
    <script src="js/custom.js"></script>




  </body>
</html>