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
    <script src="js/jquery.min.js"></script>
      <?php include("script.php"); ?>
        <script>
        var mobile_no = new Formatter (document.getElementById('contact_no'), {
      'pattern': '+639 {{999}}-{{999}}-{{999}}',
      'persistent': true
      });
        var pagibig = new Formatter (document.getElementById('pagibig'), {
      'pattern': '{{999}}-{{999}}-{{999}}',
      'persistent': true
      });
         var bir_tin = new Formatter (document.getElementById('tin_no'), {
      'pattern': '{{999}}-{{999}}-{{999}}',
      'persistent': true
    });
         var gsis = new Formatter (document.getElementById('gsis_no'), {
      'pattern': '{{999}}-{{999}}-{{999}}',
      'persistent': true
    });
    </script>
        <script>
            function showImage(src,target) {
              var fr=new FileReader();
              // when image is loaded, set the src of the image where you want to display it
              fr.onload = function(e) { target.src = this.result; };
              src.addEventListener("change",function() {
                // fill fr with image data    
                fr.readAsDataURL(src.files[0]);
              });
            }

            var src = document.getElementById("src");
            var target = document.getElementById("target");
            showImage(src,target);
        </script>
        
    <script type="">
        $(function(){
      
      $("select.main").on("change", function(){
        //remove active
        $("select.models.active").removeClass("active");
        //check if select vlass exists..if it does show it
        var subList = $("select.models."+$(this).val());
        if (subList.length){
          //it does! show it by adding active class to it
          subList.addClass("active");
        }
      });
      
    });
    </script>
    <script type="">
        var Privileges = jQuery('#privileges');
        var select = this.value;
        Privileges.change(function () {
            if ($(this).val() == '') {
                $('.resources').show();
            }
            else $('.resources').hide();
        });
    </script>
    <script type="text/javascript">
    	

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
	<div class="card">
		<div class="card-header">
		</div>
		<div class="card-body">
<span><img src="images/profileicon.png" width="20%" height="20%" class="img-fluid rounded-start" alt="icon">
</span> 	
		</div>
	</div>
	<div class="area-top">
	<div class="card">
		<div class="card-header">
			<ul class="nav nav-pills " id="pills-tab" role="tablist">
				<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
			    <div class="collapse navbar-collapse" id="navbarNav"> -->
		        <li class="nav-item">
		        	<a class="nav-link" href="#c1" ><h6>C1</h6></a>
		        </li>
		        <li class="nav-item">
		        	<a href="c2.php" class="nav-link"><h6>C2</h6></a>
		        </li>
		        <li class="nav-item">
		       		 <a class="nav-link" href="c3.php"><h6>C3</h6></a>
		        </li>
			        <li class="nav-item">
			        	<a class="nav-link" href="c4.php"><h6>C4</h6></a>
			        </li>
			    <li class="nav-item">
		        	<a  href="201Files.php" class="nav-link"><h6>201 Files</h6></a>
		        </li>
			        <li class="nav-item">
			        	<a class="nav-link" href="" class="nav-link"><h6> Other Information</h6></a>
			        </li>
			        <div class="col-lg-3">
			        	<button type="submit" class="btn btn-info pull-right" style="position: right;" id="Save">SAVE</button>
			        </div>
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
	<div class="card">
		<div class="card-body">
	<form action="add_personnel_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="add_personnel_query.php">
	<!--Navigation-->
	
		
		<!--Personal Information-->
		<form>
		<div class="card">
		<div class="card-header" style="height: 3rem" id="c1">PERSONAL INFORMATION</div>

	  	<br/>
	  	<div class="card-body">
			<fieldset enabled>
				<div class="form-row">
				    <div class="form-group col-md-3">
				    	<label for="inputFirstName">First Name</label>
				      	<input type="text" id="first_name" class="form-control form-control-sm" name="first_name" placeholder="First Name">
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputMiddleName">Middle Name</label>
				     	<input type="text" id="middle_Name" name="middle_name"class="form-control form-control-sm" placeholder="Middle Name">
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputLastName">Last Name</label>
				    	<input type="text" id="last_Name" name="last_name"class="form-control form-control-sm" placeholder="Last Name">
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputSuffix">Suffix Name</label>
				    	<input type="text" id="extension_name" name="suffix"class="form-control form-control-sm" placeholder="Last Name">
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-4">
				    	<label for="inputDateofBirth">Date of Birth</label>
				      	<input type="text" id="date_of_birth" name="" class="form-control form-control-sm" placeholder="">
				    </div>
				    <div class="form-group col-md-4">
				     	<label for="inputPlaceofBirth">Place of Birth</label>
				     	<input type="text" id="place_of_birth" class="form-control form-control-sm" placeholder="">			   
					</div>
					 <div class="form-group col-md-4">
					 <div class="input-group-prepend">
          <label class="inputGender" for="gender">Gender</label>
          </div>
          <select class="custom-select" id="gender">
            <option selected>Choose...</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="3">Prefer not to say</option>
          </select>
				</div>
			</div>
				<div class="form-row">
				    <div class="form-group col-md-4">
				     	<label for="inputHeight">Height</label>
				    	<input type="text" id="height" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-4">
				    	<label for="inputWeight">Weight</label>
				    	<input type="text" id="weight" class="form-control form-control-sm" >
				    </div>
				     <div class="form-group col-md-4">
				     	<label for="inputBloodType">Blood Type</label>
				    	<input type="text" id="blood_type" class="form-control form-control-sm" >
				    </div>
				</div>
				 <div class="form-row">
				    <div class="form-group col-md-4">
				    	<label for="inputCivilStatus">Civil Status</label>
				    	<input type="text" id="civil_status" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-4">
				     	<label for="inputCitizenship">Citizenship</label>
				     	<input type="text" id="citizenship" class="form-control form-control-sm" >
					</div>
				</div>
				<br/>

				<div class="form-row">
					<label for="inputResidentialAddress" class="col-sm-2 col-form label"> Residential Address</label>
					<div class="form-group col-md-4">
					<input type="text" id="block" name="address" class="form-control form-control-sm" placeholder="House/Block/Lot No."><br>
					<input type="text" id="sitio" name="address" class="form-control form-control-sm" placeholder="Street No./Sitio"></div>
					<div class="form-group col-md-3">
					<input type="text" id="village" name="address" class="form-control form-control-sm" placeholder="Subdivision/Village"><br>
					<input type="text" id="barangay" name="address" class="form-control form-control-sm" placeholder="Barangay"></div>
					<div class="form-group col-md-3">
					<input type="text" id="city" name="address" class="form-control form-control-sm" placeholder="Municipality/City"><br>
					<input type="text" id="province" name="address" class="form-control form-control-sm" placeholder="Province"></div>
				</div>
				<div class="form-group row">
					<label for="inputPermanentAddress" class="col-sm-2 col-form label"> ZIPCode</label>
					<div class="form-group col-md-3">
					<input type="text" id="zipcode" name="address" class="form-control form-control-sm" placeholder="ZIPCODE"></div>

				</div>
				<br/>
				<div class="form-row">
					<label for="inputResidentialAddress" class="col-sm-2 col-form label"> Permanent Address</label>
					<div class="form-group col-md-4">
					<input type="text" id="block" name="address" class="form-control form-control-sm" placeholder="House/Block/Lot No."><br>
					<input type="text" id="sitio" name="address" class="form-control form-control-sm" placeholder="Street No./Sitio"></div>
					<div class="form-group col-md-3">
					<input type="text" id="village" name="address" class="form-control form-control-sm" placeholder="Subdivision/Village"><br>
					<input type="text" id="barangay" name="address" class="form-control form-control-sm" placeholder="Barangay"></div>
					<div class="form-group col-md-3">
					<input type="text" id="city" name="address" class="form-control form-control-sm" placeholder="Municipality/City"><br>
					<input type="text" id="province" name="address" class="form-control form-control-sm" placeholder="Province"></div>
				</div>
				<div class="form-group row">
					<label for="inputPermanentAddress" class="col-sm-2 col-form label"> ZIPCode</label>
					<div class="form-group col-md-3">
					<input type="text" id="zipcode" name="address" class="form-control form-control-sm" placeholder="ZIPCODE"></div>

				</div>

				<div class="form-row">
					 <div class="form-group col-md-4">
				     	<label for="inputMobileNumber">Mobile Number</label>
				    	<input type="text" id="mobile_no" name="mobile_no" class="form-control form-control-sm" >
				    </div>
				     <div class="form-group col-md-4">
				     	<label for="inputTeleNumber">Telephone Number</label>
				    	<input type="text" id="telephone_no" name="telephone_no" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-4">
				     	<label for="inputEmailAddress">Email Address</label>
				    	<input type="email" id="email" class="form-control form-control-sm" >
				    </div> 
				</div>
		   <div class="form-row">
					 <div class="form-group col-md-4">
				     	<label for="GSIS">GSIS NO.</label>
				    	<input type="text" id="gsis_no" name="gsis_no" class="form-control form-control-sm" >
				    </div>
				     <div class="form-group col-md-4">
				     	<label for="pagibig_no">PAG-IBIG NO.</label>
				    	<input type="text" id="pagibig_no" name="pagibig_no" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-4">
				     	<label for="phil_no">PHILHEALTH NO.</label>
				    	<input type="text" id="phil_no" class="form-control form-control-sm" >
				    </div> 
				</div>
			<div class="form-row">
					 <div class="form-group col-md-4">
				     	<label for="SSS">SSS NO.</label>
				    	<input type="text" id="sss_no" name="sss_no" class="form-control form-control-sm" >
				    </div>
				     <div class="form-group col-md-4">
				     	<label for="tin_no">TIN NO.</label>
				    	<input type="text" id="tin_no" name="tin_no" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-4">
				     	<label for="ae_no">AGENCY EMPLOYMENT NO.</label>
				    	<input type="text" id="ae_no" class="form-control form-control-sm" >
				    </div> 
				</div>
		   
		</fieldset>
		</div>
	</div> <!--end of card(Basic Information)-->
		<br>

		<!--Family Background-->
		<div class="card">
			<div class="card-header" style="height: 3rem" id="c1">FAMILY BACKGROUND</div>
			<form>
	  	<br/>
	  		<div class="card-body">
			<fieldset enabled>
				<div class="form-row">
						<div class="form-group col-md-5">
				    	<label for="inputSpouseName">Spouse's Name</label>
				      	<input type="text" id="fname" class="form-control form-control-sm"><br>
				    	</div>
				    	<div class="form-group col-md-4">
				     	<label for="inputFathersOccupation">Occupation</label>
				     	<input type="text" id="spouse_occ" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-3">
				     	<label for="inputFathersMobileNumber">Mobile Number</label>
				    	<input type="text" id="spouse_mn" class="form-control form-control-sm">
				    </div>
				</div>

				<div class="form-row">
						<div class="form-group col-md-7">
				    	<label for="inputSpouseName">NAMES of CHILDREN</label>
				      	<input type="text" id="fName1" class="form-control form-control-sm"><br>
				      	<input type="text" id="fName2" class="form-control form-control-sm"><br>
				      	<input type="text" id="fName3" class="form-control form-control-sm"><br>
				      	<input type="text" id="fName4" class="form-control form-control-sm"><br>
				      	<input type="text" id="fName5" class="form-control form-control-sm"><br>
				      	<input type="text" id="fName6" class="form-control form-control-sm"><br>
				      	<input type="text" id="fName7" class="form-control form-control-sm"><br>
				      	<input type="text" id="fName8" class="form-control form-control-sm"><br>
				      	<input type="text" id="fName9" class="form-control form-control-sm"><br>
				      	<input type="text" id="fName10" class="form-control form-control-sm"><br>

				    	</div>
				    	<div class="form-group col-md-5">
				     	<label for="birthday">DATE OF BIRTH(mm/dd/yyyy)</label>
				     	<input type="text" id="date_of_birth1" class="form-control form-control-sm" ><br>
				     	<input type="text" id="date_of_birth2" class="form-control form-control-sm" ><br>
				     	<input type="text" id="date_of_birth3" class="form-control form-control-sm" ><br>
				     	<input type="text" id="date_of_birth4" class="form-control form-control-sm" ><br>
				     	<input type="text" id="date_of_birth5" class="form-control form-control-sm" ><br>
				     	<input type="text" id="date_of_birth6" class="form-control form-control-sm" ><br>
				     	<input type="text" id="date_of_birth7" class="form-control form-control-sm" ><br>
				     	<input type="text" id="date_of_birth8" class="form-control form-control-sm" ><br>
				     	<input type="text" id="date_of_birth9" class="form-control form-control-sm" ><br>
				     	<input type="text" id="date_of_birth10" class="form-control form-control-sm" ><br>
				    </div>
				</div>
				
				<div class="form-row">
				    <div class="form-group col-md-5">
				    	<label for="inputFatherName">Father's Name</label>
				      	<input type="text" id="FathersName" class="form-control form-control-sm">
				    </div>
				    <div class="form-group col-md-4">
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
				      	<input type="text" id="MothersName" class="form-control form-control-sm">
				    </div>
				    <div class="form-group col-md-4">
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
	<div class="card" id="Education">
	<div class="card-header" style="height: 3rem" id="education">ELEMENTARY EDUCATION</div>
	  	<div class="card-body">
			<fieldset enabled>
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
			<fieldset enabled>
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
			<fieldset enabled>
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
	<!-- Graduate Studies -->
	<div class="card">
	<div class="card-header" style="height: 3 rem"> GRADUATE STUDIES </div>
	  	<div class="card-body">
			<fieldset enabled>
				<div class="form-row">
					    <label for="inputMasteral">Education Degree | COURSE </label>
					     <div class="form-group col-md-5">
					    <input type="text" id="inputDegree4" class="form-control form-control-sm">
				    </div>
					    <div class="form-group col-md-3">
					    <input type="text" id="inputPeriodofAttendance4" class="form-control form-control-sm" placeholder="period of attendance">
				    </div>
				    <div class="form-group col-md-2">
					    <input type="text" id="inputYearGraduated4" class="form-control form-control-sm" placeholder="year Graduated">
				    </div>
				</div>
				<div class="form-row">
					    <label for="inputSchoolAddress4">School Address</label>
						<div class="form-group col-md-7">
					    <input type="text" id="inputSchoolAddress4" class="form-control form-control-sm" ></div>
					    <div class="form-group col-md-3 ">
					    <input type="text" id="inputUnitsEarned4" class="form-control form-control-sm" placeholder="Units Earned">
				</div>
			</div>
			</fieldset>
		</div>
	</div>
	<div class="card" id="trainingsAndSeminars">
	<!-- <fieldset disabled> -->	
	<div class="card-group">
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTrainingProgram"> <h6>CIVIL SERVICE ELIGIBILITY</h6></label><hr>
			<input type="text" id="inputTrainingProgram1" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram2" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram3" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram4" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram5" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram6" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram7" class="form-control form-control" ><br/>
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTrainingAttendance"><h6>RATINGS (if applicable)</h6></label><hr>
			<input type="text" id="inputRate1" class="form-control form-control" ><br/>
			<input type="text" id="inputRate2" class="form-control form-control" ><br/>
			<input type="text" id="inputRate3" class="form-control form-control" ><br/>
			<input type="text" id="inputRate4" class="form-control form-control" ><br/>
			<input type="text" id="inputRate5" class="form-control form-control" ><br/>
			<input type="text" id="inputRate6" class="form-control form-control" ><br/>
			<input type="text" id="inputRate7" class="form-control form-control" ><br/>
	    </div>
	</div>
	<div class="card bg-light">
	     <div class="card-body text-center">
	    	<label for="inputTrainingAttendance"><h6>Date of Examination</h6></label><hr>
			<input type="text" id="inputDateExam1" class="form-control form-control" ><br/>
			<input type="text" id="inputDateExam2" class="form-control form-control" ><br/>
			<input type="text" id="inputDateExam3" class="form-control form-control" ><br/>
			<input type="text" id="inputDateExam4" class="form-control form-control" ><br/>
			<input type="text" id="inputDateExam5" class="form-control form-control" ><br/>
			<input type="text" id="inputDateExam6" class="form-control form-control" ><br/>
			<input type="text" id="inputDateExam7" class="form-control form-control" ><br/>
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputSponsor"><h6>Place of examination|CONFERMENT</h6></label><hr>
			<input type="text" id="inputConferment1" class="form-control form-control" ><br/>
			<input type="text" id="inputConferment2" class="form-control form-control" ><br/>
			<input type="text" id="inputConferment3" class="form-control form-control" ><br/>
			<input type="text" id="inputConferment4" class="form-control form-control" ><br/>
			<input type="text" id="inputConferment5" class="form-control form-control" ><br/>
			<input type="text" id="inputConferment6" class="form-control form-control" ><br/>
			<input type="text" id="inputConferment7" class="form-control form-control" ><br/>
	    </div>
	    </div>
	     <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputSponsor"><h6>LICENSE NUMBER</h6></label><hr>
			<input type="text" id="inputLic_no1" class="form-control form-control" ><br/>
			<input type="text" id="inputLic_no2" class="form-control form-control" ><br/>
			<input type="text" id="inputLic_no3" class="form-control form-control" ><br/>
			<input type="text" id="inputLic_no4" class="form-control form-control" ><br/>
			<input type="text" id="inputLic_no5" class="form-control form-control" ><br/>
			<input type="text" id="inputLic_no6" class="form-control form-control" ><br/>
			<input type="text" id="inputLic_no7" class="form-control form-control" ><br/>
	    </div>
	    </div>
	     <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputSponsor"><h6>Date of Validity</h6></label><hr>
			<input type="text" id="inputDate_valid1" class="form-control form-control" ><br/>
			<input type="text" id="inputDate_valid2" class="form-control form-control" ><br/>
			<input type="text" id="inputDate_valid3" class="form-control form-control" ><br/>
			<input type="text" id="inputDate_valid4" class="form-control form-control" ><br/>
			<input type="text" id="inputDate_valid5" class="form-control form-control" ><br/>
			<input type="text" id="inputDate_valid6" class="form-control form-control" ><br/>
			<input type="text" id="inputDate_valid7" class="form-control form-control" ><br/>
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
			<input type="text" id="inputInclusiveDates1" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputInclusiveDates2" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputInclusiveDates3" class="form-control form-control-sm" ><br>
			<input type="text" id="inputInclusiveDates4" class="form-control form-control-sm" ><br>
			<input type="text" id="inputInclusiveDates5" class="form-control form-control-sm" ><br>
			<input type="text" id="inputInclusiveDates6" class="form-control form-control-sm" ><br>
			<input type="text" id="inputInclusiveDates7" class="form-control form-control-sm" ><br>
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTitle"><h6>Title | Position</h6></label>
			<input type="text" id="inputTitle1" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle2" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle3" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle4" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle5" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle6" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputTitle7" class="form-control form-control-sm" >
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputAgency"><h6> Agency | Office | Company</h6></label>
			<input type="text" id="inputAgency1" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency2" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency3" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency4" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency5" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency6" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputAgency7" class="form-control form-control-sm" >
	    </div>
	    </div>

	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputStatusofAppointment"><h6>Status of Appointment</h6></label>
			<input type="text" id="inputStatusofAppointment1" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputStatusofAppointment2" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputStatusofAppointment3" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputStatusofAppointment4" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputStatusofAppointment5" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputStatusofAppointment6" class="form-control form-control-sm" ><br/>
			<input type="text" id="inputStatusofAppointment7" class="form-control form-control-sm" >
	    </div>
    	</div>
	<br/>
	</div>
	</fieldset>
	</div>

	<div class="card" id="trainingsAndSeminars">
	<!-- <fieldset disabled> -->	
	<div class="card-group">
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTrainingProgram"> <h6>Training Program</h6></label>
			<input type="text" id="inputTrainingProgram1" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram2" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram3" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingProgram4" class="form-control form-control" ><br/>
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputTrainingAttendance"><h6>Date of Attendance</h6></label>
			<input type="text" id="inputTrainingAttendance1" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance2" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance3" class="form-control form-control" ><br/>
			<input type="text" id="inputTrainingAttendance4" class="form-control form-control" ><br/>
	    </div>
	    </div>
	    <div class="card bg-light">
	    <div class="card-body text-center">
	    	<label for="inputSponsor"><h6> Conducted / Sponsored By</h6></label>
			<input type="text" id="inputSponsor1" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor2" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor3" class="form-control form-control" ><br/>
			<input type="text" id="inputSponsor4" class="form-control form-control" >
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

	<div class="card" id="workExperiences">
	<fieldset enabled>	
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
	</form>
</div>
</div>
