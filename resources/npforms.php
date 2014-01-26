<!DOCTYPE html>


<html>
  <head>
    <title>New Patient Forms</title>
    <meta name="description" content="New Patient forms for Alamo Family Foot and Ankle Care"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->
    <link href="../../css/mystyles.css" rel="stylesheet">
    <!-- <link href="css/glyphicons.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=9">
  </head>

  <body id="newpatientforms">

  <?php include '../components/navhead.php'; ?>



  <div class="navibar">
    <section class="container">
  
      <div class="pull-left">
        <h1>New Patient Forms</h1>
      </div><!-- pullleft -->
      <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../../pathology.php">Resources</a></li>
            <li class="active">New Patient Forms</li>
        </ol><!-- breadcrumb -->
      </div><!-- pull-right -->
     
    </section><!-- container -->
  </div><!-- navibar -->

  <!-- end navibar -->
<div class="layoutspacing2"></div>

<div class="container">
  <section class="jumbotron lead">
          <ul> 
          <li>This form can be filled out directly on your computer.</li> 
          <li>Once the PDF file is open, click on the field you want to fill out and begin typing.</li> 
          <li>Once complete, print the form out and bring it to your initial consultation.</li> 
          <li> Alternatively, you can print the form out and write in the necessary information.</li> 
          </ul>
        <div class="center">
          <a href="/resources/npforms.pdf" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> New Patient Forms</a> 
        </div>  <!-- center -->
          </section><!-- center -->
</div><!-- container -->

<!-- footer -->

   <?php include '../components/footer.php'; ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/modernizr.js"></script>
    <?php include '../../components/social.php'; ?>



  </body>
</html>