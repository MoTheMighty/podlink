
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
<body>
<p>sadasdsadasd<p>


<section class="container">
<div="row">
  <section id="bumperpads">
 <div id="info">
  <div class="col-lg-4 col-md-4 col-sm-4">
  <form method="POST" action="<?php include 'php/examples/simple.php'; ?>" >
    <div class="form-group">
      <label for="firstname">First Name: </label>
      <input type="text" name="first_name" class="form-control" id="firstname" placeholder="First Name">
    </div><!-- formgroup firstname -->
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" name="last_name" class="form-control" id="lastname" placeholder="Last Name">
    </div><!-- lastname -->
    <form role="form">
    <div class="form-group">
      <label for="exampleInputEmail1">Email Address:</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div><!-- email -->
    <label for="message">Message:</label>
    <textarea name="contact_message" class="form-control" rows="4"></textarea>
    
  <br>
  
  <button type="submit" name="submitbutton" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div><!-- col -->

</body>

</html>