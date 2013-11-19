
<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
  <head>
    <title>Put you title here</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->
    <link href="css/mystyles.css" rel="stylesheet">
    <!-- <link href="css/glyphicons.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=9">
  </head>

  <body id="home">






  <?php include 'components/navhead.php'; ?>

    

   
  <?php include 'components/carousel.php'; ?>


<div class="hidden-xs">
<section class="toolbar">
  <div class="container">
    
    <div id="tools">
      <ul class="nav nav-justified">
         
          <li><a href="#"><span class="glyphicons-icon white notes_2"></span>New Patient Forms</a></li>
          <li><a href="#"><span class="glyphicons-icon white compass"></span>Locations</a></li>
          <li><a href="#"><span class="glyphicons-icon white headset"></span>Contact</a></li>
          
        </ul>

    </div>
    
  </div><!-- container --> 

</section> <!-- toolbar -->

</div><!-- visible -->






<hr>         

    <section class="container">
    
      <div class="row" style="margin-top:0px;">

<!-- col 1 -->
        <section class="col col-lg-4">
          
      <div class="panel panel-primary">
          <div class="panel-heading">
            <h1 class="panel-title"> Knowlegde </h1>
          </div> <!-- panel heading -->
      <div class="panel-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div> <!-- panel body -->
      </div> <!-- panel -->
    </section><!-- col col-lg --><!-- col 1 -->

<!-- col 2 -->
    <section class="col col-lg-4">
      <div class="panel panel-primary">
          <div class="panel-heading">
            <h1 class="panel-title">Exerpience</h1>
          </div> <!-- panel heading -->
      <div class="panel-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div> <!-- panel body -->
      </div> <!-- panel -->
    </section><!-- col col-lg -->
 
<!-- col 3 -->

        <section class="col col-lg-4">

      <div class="panel panel-primary">
          <div class="panel-heading">
          <h1 class="panel-title">Results</h1>
          </div> <!-- panel heading -->
      <div class="panel-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div> <!-- panel body -->
      </div> <!-- panel -->
    </section><!-- col col-lg -->

  </div><!-- content row 1-->

    </section> <!-- container -->



    <hr>
         
 

             <?php include 'components/picturelineup.php'; ?>

      

<!-- footer -->

  
          
             <?php 
               $path = $_SERVER['DOCUMENT_ROOT'];
               $path .= "/components/footer.php";
                include_once($path);?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>



  </body>
</html>