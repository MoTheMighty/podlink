
<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
  <head>
    <title>Plantar Fasciitis - Heel Pain</title>
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
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        
      
  </head>

  <body id="plantarfasciitis">

  <?php include '../components/navhead.php'; ?>



  <div class="navibar">
    <section class="container">
  
      <div class="pull-left">
        <p>Bunions<p>
      </div><!-- pullleft -->
      <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../../pathology.php">Conditions</a></li>
            <li class="active">Bunions</li>
        </ol><!-- breadcrumb -->
      </div><!-- pull-right -->
     
    </section><!-- container -->
  </div><!-- navibar -->

  <!-- end navibar -->
<div class="layoutspacing2"></div>

<div class="container">
  
<ul class="nav nav-tabs nav-justified" style="margin: 20px 0px;">
              <li class="active"><a href="#cause" data-toggle="tab">Cause</a></li>
              <li><a href="#signs_symptoms" data-toggle="tab">Signs and Symptoms</a></li>
              <li><a href="#treatment" data-toggle="tab">Treatment</a></li>
             
            </ul>

            <!-- Tab panes -->
           

  <body>
    <div id="piechart" style="width: 1100px; height: 600px;"></div>

</div><!-- container -->

<!-- footer -->

   <?php include '../components/footer.php'; ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/modernizr.js"></script>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Strongly Agree',     136.5],
          ['Agree',      22.75],
          ['Neutral',  8.75],
          ['Disagree', 4]

        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
     </script>



  </body>
</html>







