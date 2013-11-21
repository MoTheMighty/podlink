
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

  <body id="Contact">

  <?php include 'components/navhead.php'; ?>

<!-- pageheadnavigation -->

  <div class="navibar">
  <div class="row">
    <section class="container">
  
      <div class="pull-left">
        <p>Contact<p>
      </div><!-- pullleft -->
      <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Contact</li>
        </ol><!-- breadcrumb -->
      </div><!-- pull-right -->
     
    </section><!-- container -->
    </div><!-- row -->
  </div><!-- navibar -->

<!-- end pageheadnavigation -->




<section class="container">
<div="row">
  <section id="bumperpads">
 
  <div class="col-lg-4">

    <div class="form-group">
      <label for="firstname">First Name: </label>
      <input type="text" class="form-control" id="firstname" placeholder="First Name">
    </div><!-- formgroup firstname -->
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
    </div><!-- lastname -->
    <form role="form">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address:</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div><!-- email -->
    <label for="message">Message:</label>
    <textarea class="form-control" rows="4"></textarea>
    
 <hr> 
  
  <button type="submit" class="btn btn-xtra-large">Submit</button>
</form>

</div><!-- col -->



    <div class="col-lg-8">
    <section class="center-block">
      <section class="center">
        <section class="enlarge">
              <span class="glyphicons iphone"></span> 
            </section> <!-- enlarge -->
        <section class="lead">
          
          Central scheduling and all related inquires
          <h3>(210)829-8770<h3>
        </section><!-- lead -->
      </section><!-- centerblock -->

    </div><!-- col -->
    </section><!-- bumperpads -->
  </div><!-- row -->
</section><!-- container -->


<!-- footer -->

   <?php include 'components/footer.php'; ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>



  </body>
</html>