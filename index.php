<!DOCTYPE html>
<html>
  <head>
    <title>Put you title here</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->
    <link href="css/mystyles.css" rel="stylesheet">
    <!-- <link href="css/glyphicons.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   
  </head>

  <body id="home">






  <?php include '_/components/navhead.php'; ?>

    

   
  <?php include 'components/carousel.php'; ?>

 <hr>         

    <section class="container">
    
      <div class="row" style="margin-top:70px;">

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
         
 <section class="container">
      <div class="row">

             <?php include 'components/picturelineup.php'; ?>

      </div> <!-- row -->
    </section> <!-- container -->

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