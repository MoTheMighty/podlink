
<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html lang="en-US"itemscope itemtype="http://schema.org/medicalclinic">
  <head>
    <title>Contact Form for Alamo Family Foot & Ankle Care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



 
       
        <meta property="twitter:account_id" content=""/>
        <link rel="canonical" href=""/>
        <!-- fb -->
        <meta name="og:title" content="Contact Form for Alamo Family Foot & Ankle Care"/>
        <meta name="og:url" content="podlink.com/about.php"/>
        <meta name="og:description" content="Contact form for alamo family foot care.  Address and phone number of each office included"/>
        <meta name="og:image" content=""/>
        
       

        <!-- Google+ -->
        <meta itemprop="name" content="Contact Form for Alamo Family Foot & Ankle Care"/>
        <meta itemprop="description" content="Contact form for alamo family foot care.  Address of each office included"/>
        <meta itemprop="audience" content="patients"/>
        <meta itemprop="" content=""/>
        <meta itemprop="alternativeHeadline" content="Contact Alamo Family Foot Care"/>
        
        
                
              
                <link rel="author" href="http://plus.google.com/113774021362941412953" />
        
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">





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
  
    <section class="container">
  
      <div class="pull-left">
        <h1>Contact</h1>
      </div><!-- pullleft -->
      <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="/index.php">Home</a></li>
            <li class="active">Contact</li>
        </ol><!-- breadcrumb -->
      </div><!-- pull-right -->
     
    </section><!-- container -->
    
  </div><!-- navibar -->

<!-- end pageheadnavigation -->




<section class="container">
<div class="row">
  <section id="bumperpads">
 
  <div class="col-lg-4 col-md-4 col-sm-4">
  <form method="POST" action="php/examples/advanced.php">
    <div class="form-group">
      <label for="firstname">Name: </label>
      <input type="text" name="first_name" class="form-control" id="firstname" placeholder="Name" required />
    </div><!-- formgroup firstname -->
    <div class="form-group">
      <label for="lastname">Telephone:</label>
      <input type="tel" name="last_name" class="form-control" id="lastname" placeholder="Telephone Number" required />
    </div><!-- lastname -->
    <form role="form">
    <div class="form-group">
      <label for="exampleInputEmail1">Email Address:</label>
      <input type="email" class="form-control" name="email"  id="exampleInputEmail1" placeholder="Email" required />
    </div><!-- email -->
    <label for="message">Message:</label>
    <textarea name="contact_message" class="form-control" rows="4"></textarea>
    
  <br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div><!-- col -->



    <div class="col-lg-8 col-md-8 col-sm-8">

    
      <section class="center">
      
        <section class="lead">
          
          Central scheduling and all related inquires<br>
          <strong><span itemscope="telephone">(210) 829-8770</span></strong>
        </section><!-- lead -->
           <br>
      <hr>
      <br>
    

      <ul class="nav nav-tabs nav-justified" style="margin: 20px 0px;">
              <li class="active"><a href="#home" data-toggle="tab">Medical Center</a></li>
              <li><a href="#profile" data-toggle="tab">Alamo Heights</a></li>
              <li><a href="#messages" data-toggle="tab">Stone Oak</a></li>
             
            </ul>

            <!-- Tab panes -->
           
            <div class="tab-content" style="padding: 0px 60px;">
              <div class="tab-pane fade in active" id="home">
                  <div class="col-lg-6 col-md-6">
                      <?php include 'components/medcenteraddress.php'; ?>




                      
                  </div><!-- col 6 -->
                  <div class="col-lg-6 col-md-6">
                      <img src="/images/mc.jpg" class="img-thumbnail img-responsive">
                  </div><!-- col 6 -->

                </div><!-- tabpain -->


              <div class="tab-pane fade" id="profile">
                    <div class="col-lg-6 col-md-6">
                      <?php include 'components/ahaddress.php'; ?>
                    </div><!-- col 6 -->
                    <div class="col-lg-6 col-md-6">
                        <img src="/images/ah.jpg" class="img-thumbnail img-responsive">
                    </div><!-- col 6 -->
                </div><!-- tabpane -->

              <div class="tab-pane fade" id="messages">
                  <div class="col-lg-6 col-md-6">
                      <?php include 'components/stoneoakaddress.php'; ?>
                   </div><!-- col 6 -->   
                      <div class="col-lg-6 col-md-6">
                     <img src="/images/stoneoak.jpg" class="img-thumbnail img-responsive">
                  </div><!-- col 6 --> 
                </div><!-- tabpane -->
              </div>



            </div><!-- tab0content -->
    
                  
            <?php include 'components/schedule_modal.php'; ?>   

          
      </section><!-- center -->
     

         
    </div><!-- col -->

    </section><!-- bumperpads -->
    
  </div><!-- row -->
       <!-- Nav tabs -->
  

        





         
</section><!-- container -->



<!-- footer -->

   <?php include 'components/footer.php'; ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>
  
    

<!-- googleconversioncode -->
<?php include 'components/googleconversion.php'; ?>

  </body>
</html>