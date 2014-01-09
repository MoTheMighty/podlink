
<!DOCTYPE html>


<html>
  <head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->
    <link href="css/mystyles.css" rel="stylesheet">
    <!-- <link href="css/glyphicons.css" rel="stylesheet"> -->

     <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=9">
  </head>

  <body id="Template">

  <?php include 'components/navhead.php'; ?>



  <div class="navibar">
    <section class="container">
  
      <div class="pull-left">
        <h1>Template</h1>
      </div><!-- pullleft -->
      <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Privacy Notice</li>
        </ol><!-- breadcrumb -->
      </div><!-- pull-right -->
     
    </section><!-- container -->
</div><!-- navibar -->
<div class="container">
</div>

<!-- footer -->

   <?php include 'components/footer.php'; ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>

    <script>
    $(document).ready(function() {
     
      
        $(".fill").delay(5000).slideDown("2000")
      });

   
    </script
   




  </body>
</html>