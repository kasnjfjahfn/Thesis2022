<?php
include ('header.php');

?>

<?php

require_once('dbcon.php');

$sql = "SELECT * from 'tbl_personnel' WHERE per_id";
$result= mysql_query($con, $sql);

$id = (isset($_GET['per_id']) ? $_GET['per_id'] : '');
$sql = "SELECT * from 'tbl_personnel' WHERE per_id=$id";
$result =mysql_query($con, $sql);

if($result){

	while($res = mysql_fetch_assoc($result)){

		$firstname = $res['per_firstname'];
		$middlename = $res['per_middlename'];
		$lastname = $res['per_lastname'];
		$status = $res['per_status'];
		$address = $res['per_address'];
		$birthday = $res['per_date_of_birth'];
		$place = $res['per_place_of_birth'];
	}
}

?>

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
	<div class="card">
		<div class="card-body">
	<!--Navigation-->
	<div class="card">
		<div class="card-header">
			<ul class="nav nav-pills " id="pills-tab" role="tablist">
				<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
			    <div class="collapse navbar-collapse" id="navbarNav"> -->
		        <li class="nav-item">
		        	<a class="nav-link active" id="pills-empro_personalinformation-tab" data-toggle="pill"aria-controls="pills-empro_personalinformation"role="tab" aria-selected="true" href="#" ><h6>Personal Information</h6></a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link" id="pills-empro_educ-tab"data-toggle="pill"aria-controls="pills-empro_educ" role="tab" aria-selected="true" href="#Education" ><h6>Educational Background</h6></a>
		        </li>
		        <li class="nav-item">
		       		 <a class="nav-link" href="#trainingsAndSeminars"><h6> Trainings & Seminars</h6></a>
		        </li>
			        <li class="nav-item">
			        	<a class="nav-link" href="#workExperiences"><h6>Work Experience</h6></a>
			        </li>
			    <li class="nav-item">
		        	<a class="nav-link" href="201files.php" ><h6>201 Files</h6></a>
		        </li>
			        <li class="nav-item">
			        	<a class="nav-link" href="#"><h6> Other Information</h6></a>
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
		
		<!--Personal Information-->
		<form>
		<div class="card">
		<div class="card-header" style="height: 3rem">BASIC INFORMATION</div>
	  	<br/>
	  	<div class="card-body">
			<fieldset disabled>
				<div class="form-row">
				    <div class="form-group col-md-3">
				    	<label for="inputFirstName">First Name</label>
				      	<input type="text" id="FirstName" class="form-control form-control-sm" value="<?php echo $firstname;?>" readonly>
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputMiddleName">Middle Name</label>
				     	<input type="text" id="MiddleName" class="form-control form-control-sm" placeholder="Middle Name">
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputLastName">Last Name</label>
				    	<input type="text" id="LastName" class="form-control form-control-sm" placeholder="Last Name">
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-2">
				    	<label for="inputDateofBirth">Date of Birth</label>
				      	<input type="text" id="DateofBirth" class="form-control form-control-sm" placeholder="">
				    </div>
				    <div class="form-group col-md-4">
				     	<label for="inputPlaceofBirth">Place of Birth</label>
				     	<input type="text" id="BirthPlace" class="form-control form-control-sm" placeholder="">
				   
					</div>
				</div>

				<div class="form-row">
					 <div class="form-group col-md-2">
				     	<label for="inputSex">Sex</label>
				    	<input type="text" id="Sex" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-2">
				     	<label for="inputBloodType">Blood Type</label>
				    	<input type="text" id="BloodType" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-2">
				    	<label for="inputCivilStatus">Civil Status</label>
				      	<input type="text" id="CivilStatus" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-2">
				     	<label for="inputCitizenship">Citizenship</label>
				     	<input type="text" id="Citizenship" class="form-control form-control-sm" >
				   
					</div>
				</div>
				<br/>
				<div class="form-group row">
					<label for="inputResidentialAddress" class="col-sm-2 col-form label"> Residential Address</label>
					<div class="col-sm-7">
					<input type="text" id="ResidentialAddress" class="form-control form-control-sm"></div>
				</div>
				<br/>
				<div class="form-group row">
					<label for="inputPermanentAddress" class="col-sm-2 col-form label"> Permanent Address</label>
					<div class="col-sm-7">
					<input type="text" id="PermanentAddress" class="form-control form-control-sm"></div>
				</div>

				<div class="form-row">
					 <div class="form-group col-md-2">
				     	<label for="inputMobileNumber">Mobile Number</label>
				    	<input type="text" id="MobileNumber" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-4">
				     	<label for="inputEmailAddress">Email Address</label>
				    	<input type="email" id="EmailAddress" class="form-control form-control-sm" >
				    </div> 
				</div>
		   
		</fieldset>
		</div>
	</div> <!--end of card(Basic Information)-->
		<br>

		<!--Family Background-->
		<div class="card">
			<div class="card-header"> FAMILY BACKGROUND</div>
			<form>
	  	<br/>
	  		<div class="card-body">
			<fieldset disabled>
				<div class="form-row">
				    <div class="form-group col-md-5">
				    	<label for="inputSpouseName">Spouse Name</label>
				      	<input type="text" id="SpouseName" class="form-control form-control-sm">
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputSpouseOccupation">Occupation</label>
				     	<input type="text" id="SpouseOccupation" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputSpouseMobileNumber">Mobile Number</label>
				    	<input type="text" id="SpouseNumber" class="form-control form-control-sm">
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-5">
				    	<label for="inputFatherName">Father's Name</label>
				      	<input type="text" id="FathersName" class="form-control form-control-sm">
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputFathersOccupation">Occupation</label>
				     	<input type="text" id="FathersOccupation" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputFathersMobileNumber">Mobile Number</label>
				    	<input type="text" id="FathersMobileNumber" class="form-control form-control-sm">
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-5">
				    	<label for="inputMothertherName">Mother's Maiden Name</label>
				      	<input type="text" id=MothersName class="form-control form-control-sm">
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputMothersOccupation">Occupation</label>
				     	<input type="text" id="MothersOccupation" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputMothersMobileNumber">Mobile Number</label>
				    	<input type="text" id="MothersNumber" class="form-control form-control-sm">
				    </div>
				</div>

		  
			</fieldset>
		</div>
		</div> <!--end of card(Family background)-->
		<br/>

		<!--Contact Details-->
		<div class="card">
			<div class="card-header" style="height: 3rem">CONTACT DETAILS</div>
		  	<br/>
		  	<div class="card-body">
				<fieldset disabled>
					<div class="form-row">
					    <div class="form-group col-md-3">
					    	<label for="inputMobileNumber">Mobile Number</label>
					      	<input type="text" id="MobileNumber" class="form-control form-control-sm">
					    </div>
					    <div class="form-group col-md-3">
					     	<label for="inputTelephone">Telephone Number</label>
					     	<input type="text" id="TelephoneNumber" class="form-control form-control-sm">
					    </div>
					    <div class="form-group col-md-3">
					     	<label for="inputEmailAddress">Email Address</label>
					    	<input type="email" id="email" class="form-control form-control-sm" >
					    </div>
					</div>
				</fieldset>
			</div>
		</div> <!--end of card(CONTACT DETAILS)-->

	<div class="card" id="Education">
	<div class="card-header" style="height: 3rem" >ELEMENTARY EDUCATION</div>
	  	<div class="card-body">
			<fieldset disabled>
				<div class="form-row">
				    <div class="form-group col-md-5">
					    <label for="inputNameofSchool1">Name of School</label>
					    <input type="text" id="inputNameofSchool1" class="form-control form-control-sm" >
				    </div>
					    <div class="form-group col-md-2">
					    <label for="inputPeriodofAttendance1">Period of Attendance</label>
					    <input type="text" id="inputPeriodofAttendance1" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-2">
					    <label for="inputYearGraduated1">Year Graduated</label>
					    <input type="text" id="inputYearGraduated1" class="form-control form-control-sm" >
				    </div>
				</div>
				<div class="form-row">
				    <div class="form-group col-md-7">
					    <label for="inputSchoolAddress1">School Address</label>
					    <input type="text" id="inputSchoolAddress1" class="form-control form-control-sm" >
				    </div>   
				</div>
			</fieldset>
		</div>
	</div>
	<br>

	<!--HIGH SCHOOL-->
	<div class="card">
	<div class="card-header" style="height: 3rem"> SECONDARY EDUCATION </div>
	  	<div class="card-body">
			<fieldset disabled>
				<div class="form-row">
				    <div class="form-group col-md-5">
					    <label for="inputNameofSchool2">Name of School</label>
					    <input type="text" id="inputNameofSchool2" class="form-control form-control-sm" >
				    </div>
					<div class="form-group col-md-2">
					    <label for="inputPeriodofAttendance2">Period of Attendance</label>
					    <input type="text" id="inputPeriodofAttendance2" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-2">
					    <label for="inputYearGraduated2">Year Graduated</label>
					    <input type="text" id="inputYearGraduated2" class="form-control form-control-sm" >
				    </div>
				</div>
				<div class="form-row">
				    <div class="form-group col-md-7">
					    <label for="inputSchoolAddress2">School Address</label>
					    <input type="text" id="inputSchoolAddress2" class="form-control form-control-sm" >
				    </div>   
				</div>
				<div class="form-row">
				    <div class="form-group col-md-7">
					    <label for="inputDegree2">Educational Degree | Course</label>
					    <input type="text" id="inputDegree2" class="form-control form-control-sm" >
				    </div>   
				</div>
			</fieldset>
		</div>
	</div>
	<br/>
	<!--Tertiary Education-->
	<div class="card">
	<div class="card-header" style="height: 3 rem"> COLLEGE </div>
	  	<div class="card-body">
			<fieldset disabled>
				<div class="form-row">
				    <div class="form-group col-md-5">
					    <label for="inputNameofSchool3">Name of School</label>
					    <input type="text" id="inputNameofSchool3" class="form-control form-control-sm" >
				    </div>
					    <div class="form-group col-md-2">
					    <label for="inputPeriodofAttendance3">Period of Attendance</label>
					    <input type="text" id="inputPeriodofAttendance3" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-2">
					    <label for="inputYearGraduated3">Year Graduated</label>
					    <input type="text" id="inputYearGraduated3" class="form-control form-control-sm" >
				    </div>
				</div>
				<div class="form-row">
				    <div class="form-group col-md-7">
					    <label for="inputSchoolAddress3">School Address</label>
					    <input type="text" id="inputSchoolAddress3" class="form-control form-control-sm" >
				    </div>   
				</div>
				<div class="form-row">
				    <div class="form-group col-md-7">
					    <label for="inputDegree3">Educational Degree | Course</label>
					    <input type="text" id="inputDegree3" class="form-control form-control-sm" >
				    </div>   
				</div>
			</fieldset>
		</div>
	</div>

	<div class="card">
	<!-- <fieldset disabled> -->	
	<div class="card-group">
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTrainingProgram"> <h6>Training Program</h6></label>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram" class="form-control form-control" ><br/>
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTrainingAttendance"><h6>Date of Attendance</h6></label>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance" class="form-control form-control" ><br/>
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputSponsor"><h6> Conducted / Sponsored By</h6></label>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor" class="form-control form-control" >
	    </div>
	    </div>
	    <!-- </fieldset> -->
	    <div class="card bg-light">
		    <div class="card-body text-center">
		    	<h6> Certifications</h6>
		    	<p></p>
		    	<div class="input-group input-group-sm">
			    	<div class="custom-file">
			    		<input type="file" class="custom-file-input form-control-sm" height="2" id="TrainingCertifications" required>
			    		<label class="custom-file-label col-form-label-sm" for="TrainingCertifications">Choose file</label>
			    	</div>
			    </div>
			    <br/>
			    
			    <div class="input-group input-group-sm">
			    	<div class="custom-file">
			    		<input type="file" class="custom-file-input form-control-sm" height="2" id="TrainingCertifications" required>
			    		<label class="custom-file-label col-form-label-sm" for="TrainingCertifications">Choose file</label>
			    	</div>
			    </div>
			    <br/>

		    	<div class="input-group input-group-sm">
			    	<div class="custom-file">
			    		<input type="file" class="custom-file-input form-control-sm" height="2" id="TrainingCertifications" required>
			    		<label class="custom-file-label col-form-label-sm" for="TrainingCertifications">Choose file</label>
			    	</div>
			    </div>
			    <br/>
		    	<div class="input-group input-group-sm">
			    	<div class="custom-file">
			    		<input type="file" class="custom-file-input form-control-sm" height="2" id="TrainingCertifications" required>
			    		<label class="custom-file-label col-form-label-sm" for="TrainingCertifications">Choose file</label>
			    	</div>
			    </div>
			    	

		    </div>
		</div>
	</div>
	</div>

	<div class="card">
	<fieldset disabled>	
	<div class="card-group">
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputInclusiveDates"> <h6>Inclusive Dates</h6></label>
			<input type="text" id="inputInclusiveDates" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputInclusiveDates" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputInclusiveDates" class="form-control form-control-sm" >
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTitle"><h6>Title | Position</h6></label>
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
			<input type="text" id="inputAgency" class="form-control form-control-sm" >
	    </div>
	    </div>

	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputStatusofAppointment"><h6>Status of Appointment</h6></label>
			<input type="text" id="inputStatusofAppointment" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency" class="form-control form-control-sm" >
	    </div>
    	</div>
	<br/>
	</div>
	</fieldset>

	</div>
	</form>
</div>
</div>


</body>
</html>