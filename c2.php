<?php
include ('header.php');
?>
 <script src="plugins/js/formatter.js"></script>
 <style type="text/css">
 	.area-top{
 		 position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
 	}
 </style>
 	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $(window).scroll(function(){
        var offset = $('.nav nav-pills').offset().top;
        var top = $(document).scrollTop();
        if(top >= offset){
            // this is where you should fix you menu
            $('.area-top').addClass('fixed'); // if you have a css class which fix the element.
            $('.area-top').css('position', 'fixed'); // if you don't have css class
        }else{
            // this is where you should unfix your menu
            $('.area-top').removeClass('fixed'); // if you have a css class which fix the element.
            $('.area-top').css('position', 'inherit'); // if you don't have css class
        }
    });
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  
	</div>	
	<div class="area-top">
	<div class="card">
		<div class="card-header">
			<ul class="nav nav-pills " id="pills-tab" role="tablist">
				<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
			    <div class="collapse navbar-collapse" id="navbarNav"> -->
		        <li class="nav-item">
		        	<a class="nav-link" href="add_employee.php" ><h6>C1</h6></a>
		        </li>
		        <li class="nav-item">
		        	<a href="c2.php" class="nav-link"><h6>C2</h6></a>
		        </li>
		        <li class="nav-item">
		       		 <a class="nav-link" href="c3.php"><h6>C3</h6></a>
		        </li>
			        <li class="nav-item">
			        	<a class="nav-link" href="#workExperiences"><h6>C4</h6></a>
			        </li>
			    <li class="nav-item">
		        	<a  href="201Files.php" class="nav-link"><h6>201 Files</h6></a>
		        </li>
			        <li class="nav-item">
			        	<a class="nav-link" href="" class="nav-link"><h6> Other Information</h6></a>
			        </li>
		        </ul>
			    <div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-empro_empro_personalinformation" role="tabpanel" aria-labelledby="pills-empro_personalinformation-tab"> </div>
					<div class="tab-pane fade" id="pills-empro_educ" role="tabpanel" aria-labelledby="pills-empro_educ-tab"> </div>
					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"> </div>
				</div>
	  		</div>
	  	</div>
	  	<br>
	  </div>
<div class="card" id="trainingsAndSeminars">
	<!-- <fieldset disabled> -->	
	<div class="card-group">
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTrainingProgram"> <h6>CIVIL SERVICE ELIGIBILITY</h6></label><hr>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTrainingAttendance"><h6>RATINGS (if applicable)</h6></label><hr>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
	    </div>
	</div>
	<div class="card bg-light">
	     <div class="card-body text-center">
	    	<label for="inputTrainingAttendance"><h6>Date of Examination</h6></label><hr>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputSponsor"><h6>Place of examination|CONFERMENT</h6></label><hr>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
	    </div>
	    </div>
	     <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputSponsor"><h6>LICENSE NUMBER</h6></label><hr>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
	    </div>
	    </div>
	     <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputSponsor"><h6>Date of Validity</h6></label><hr>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
	    </div>
	    </div>
	    <!-- </fieldset> -->
</div>
	</fieldset>

	<div class="card" id="workExperiences">
	<div class="card-header" style="height: 3rem" id="c1">WORK EXPERIENCES</div>
	<fieldset enabled>	
	<div class="card-group">
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputInclusiveDates"> <h6>Inclusive Dates</h6></label>
			<input type="text" id="inputInclusiveDates" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputInclusiveDates" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputInclusiveDates" class="form-control form-control-sm" ><br>
			<input type="text" id="inputInclusiveDates" class="form-control form-control-sm" ><br>
			<input type="text" id="inputInclusiveDates" class="form-control form-control-sm" ><br>
			<input type="text" id="inputInclusiveDates" class="form-control form-control-sm" ><br>
			<input type="text" id="inputInclusiveDates" class="form-control form-control-sm" ><br>
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTitle"><h6>Title | Position</h6></label>
			<input type="text" id="inputTitle" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle" class="form-control form-control-sm" >
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputAgency"><h6> Agency | Office | Company</h6></label>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" >
	    </div>
	    </div>

	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputStatusofAppointment"><h6>Status of Appointment</h6></label>
			<input type="text" id="inputStatusofAppointment" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" >
	    </div>
    	</div>
	<br/>
	</div>
	</fieldset>