
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



 
<div class="container">
  <img src="/images/doctors.png" class="img-responsive">
  </div>
  <div id="perezdot" class="enlarge1">
    <a href="#"  span class="glyphicons circle_info" data-toggle="popover" data-placement="right" title="Dr. Richard Perez" data-content="Dr. Perez is board certified by the American Board of Podiatric Surgery and a Fellow of the American College of Foot and Ankle Surgeons.  His clinical interest include sports injuries, reconstructive foot surgery and resident education."></a></span>
  </div>

    <div id="mechelldot" class="enlarge1">
    <a href="#"  span class="glyphicons circle_info" data-toggle="popover" data-placement="bottom" title="Dr. R Jordan Mechell"  data-content="Dr. R. Jordan Mechell was born and raised in a small town in South Texas. At a very young age, he found himself fascinated by the field of medicine and surgery. After graduating early from the University of Texas at Austin."></a></span>
  </div>

   <div id="strashdot" class="enlarge1">
    <a href="#"  span class="glyphicons circle_info" data-toggle="popover" data-placement="bottom" title="Dr. Walter Strash" data-content="Dr. Strash is a graduate of the Temple University School of Podiatric Medicine and Carleton University. 
        He is board certified by the American Board of Podiatric Surgery in both Foot Surgery and Reconstructive Rearfoot/Ankle Surgery."></a></span>
  

   <div id="chaneydot" class="enlarge1">
    <a href="#"  span class="glyphicons circle_info" data-toggle="popover" data-placement="bottom" title="Dr. D. Martin Chaney"  data-content="Dr. Dennis Martin 'Marty' Chaney has been in private practice since 1999. He was born and raised in Southwest Iowa. He attended the University of Northern Iowa where he majored in Biology and Chemistry."></a></span>
  </div></div>
  


<!-- footer -->

   <?php include 'components/footer.php'; ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
    <script src="js/modernizr.js"></script>
    <script>
    $(function () {
    $("[data-toggle='tooltip']").tooltip();
    $("[data-toggle='popover']").popover();
});
    </script>

    <script>
    $(document).ready(function() {
     
      
        $(".fill").delay(5000).slideDown("2000")
      });

   
    </script
   




  </body>
</html>