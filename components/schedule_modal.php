 <!--dropdownbuttom -->
<!-- Single button -->

<div class="btn-group" style="text-align: left">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Doctor's Clinic Schedule <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#"  data-toggle="modal" data-target="#clinicschedulechaney">Dr. D. Martin Chaney</a> </li>
    <li><a href="#"  data-toggle="modal" data-target="#clinicscheduleperez">Dr. Richard Perez</a> </li>
    <li><a href="#"  data-toggle="modal" data-target="#clinicschedulestrash">Dr. Walter Strash</a> </li>
    <li><a href="#"  data-toggle="modal" data-target="#clinicschedulemechell">Dr. R. Jordan Mechell</a> </li>
    
  </ul>
</div><!-- button group -->


<!-- modal Perez -->
<div class="col-lg-6">
<div class="modal fade" style="z-index: 14000" id="clinicscheduleperez" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Clinic Schedule for Dr. Richard Perez</h4>
      </div> <!-- modal header -->
        <div class="modal-body">
          <div class="reset-box-sizing">
            <?php include 'components/schedule_perez_data.php'; ?>
          </div><!-- resetboxsizing -->
        </div><!-- modalbody -->
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div> <!--col lg 6 -->
<!-- end perez modal -->

<!-- modal Chaney -->
<div class="col-lg-6">
<div class="modal fade" style="z-index: 14000" id="clinicschedulechaney" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Clinic Schedule for Dr. D. Martin Chaney</h4>
      </div> <!-- modal header -->
        <div class="modal-body">
          <div class="reset-box-sizing">
            
            <?php include 'components/schedule_chaney_data.php'; ?>
          </div><!-- resetboxsizing -->
        </div><!-- modalbody -->
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div> <!-- col lg 6
 <!- end chaney modal -->

 <!-- modal strash-->
<div class="col-lg-6">
<div class="modal fade" style="z-index: 14000" id="clinicschedulestrash" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Please Select Office</h4>
      </div> <!-- modal header -->
        <div class="modal-body">
          <div class="reset-box-sizing">
            <?php include 'components/schedule_strash_data.php'; ?>
          </div><!-- resetboxsizing -->
        </div><!-- modalbody -->
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div> <!--col lg 6 -->
<!-- end strash modal -->

<!-- modal mechell -->
<div class="col-lg-6">
<div class="modal fade" style="z-index: 14000" id="clinicschedulemechell" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Please Select Office</h4>
      </div> <!-- modal header -->
        <div class="modal-body">
          <div class="reset-box-sizing">
            <?php include 'components/schedule_mechell_data.php'; ?>
          </div><!-- resetboxsizing -->
        </div><!-- modalbody -->
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div> <!-- col lg 6 -->
<!-- end mechell modal -->
