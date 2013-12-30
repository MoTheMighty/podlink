
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
            <li class="active">Template</li>
        </ol><!-- breadcrumb -->
      </div><!-- pull-right -->
     
    </section><!-- container -->
  </div><!-- navibar -->


<div class="container page-header center lead"><h2>Clinic Schedule for Dr. Richard Perez</h2></div>

 <div class="container">
  <div class="table-responsive">
  <table class="table table-hover table-bordered  center">
  <thead>
      <th>Clinic</th>
      <th>AM / PM </th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
      <th>Saturday</th>
   </thead> 

   <tbody>
    <tr>
      <td rowspan="2"> 
            <?php include 'components/medcenteraddress.php'; ?>
       </td>
      <td> AM </td>
      <td> </td>
      <td>  </td>
      <td> <span class="glyphicon glyphicon-ok"></span>  </td>
      <td>  <span class="glyphicon glyphicon-ok"></span></td>
      <td> <span class="glyphicon glyphicon-ok"></span>  </td>
      <td>  </td>
      </tr>
      <tr>
      <td> PM </td>
      <td> <span class="glyphicon glyphicon-ok"></span>  </td>
      <td>   </td>
      <td> <span class="glyphicon glyphicon-ok"></span>  </td>
      <td> <span class="glyphicon glyphicon-ok"></span></td>
      <td>  </td>
      <td>  </td>
      </tr>

    </tbody>

  </table><!-- table -->
  </div>
</div><!-- container -->

<div class="container">
  <div class="table-responsive">
  <table class="table table-hover table-bordered  center">
  <thead>
      <th>Clinic</th>
      <th>AM / PM </th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
      <th>Saturday</th>
   </thead> 

   <tbody>
    <tr>
      <td rowspan="2"> <?php include 'components/stoneoakaddress.php'; ?> </td>
      <td> AM </td>
      <td> </td>
      <td> <span class="glyphicon glyphicon-ok"></span>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      </tr>
      <tr>
      <td> PM </td>
      <td>  </td>
      <td>  </td>
      <td>   </td>
      <td> </td>
      <td>  </td>
      <td>  </td>
      </tr>

    </tbody>

  </table><!-- table -->
  </div>
</div><!-- container -->

<div class="container">
  <div class="table-responsive">
  <table class="table table-hover table-bordered  center">
  <thead>
      <th>Clinic</th>
      <th>AM / PM </th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
      <th>Saturday</th>
   </thead> 

   <tbody>
    <tr>
      <td rowspan="2"> <?php include 'components/ahaddress.php'; ?> </td>
      <td> AM </td>
      <td> </td>
      <td>   </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      </tr>
      <tr>
      <td> PM </td>
      <td>  </td>
      <td> <span class="glyphicon glyphicon-ok"></span> </td>
      <td>   </td>
      <td> </td>
      <td>  </td>
      <td>  </td>
      </tr>

    </tbody>

  </table><!-- table -->
  </div>
</div><!-- container -->
<!-- footer -->

   <?php include 'components/footer.php'; ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>



  </body>
</html>