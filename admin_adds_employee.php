<?php
include ('header.php');
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
	<div class="area-top">
	<div class="card">
		<div class="card-header">
			<ul class="nav nav-pills " id="pills-tab" role="tablist">
				<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
			    <div class="collapse navbar-collapse" id="navbarNav"> -->
			    	<li class="nav-item">
		        	<a class="nav-link" href="overview.php" ><h6>Overview</h6></a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link" href="c1.php" ><h6>C1</h6></a>
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
			        	<input type="submit" name="save" value="SAVE" class="btn btn-success" style ="float:right; margin-top: -30px;">  
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
		<form id="PDSForm">
		<div class="card">
		<div class="card-header" style="height: 3rem" id="c1">EMPLOYEE INFORMATION</div>
		
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
				    	<input type="text" id="ext_name" name="ext_name"class="form-control form-control-sm" placeholder="Last Name">
				    </div>
				</div>
				
				<div class="form-row">
				    <div class="form-group col-md-4">
				    	<label for="inputDateofBirth">Date of Birth</label>
				      	<input type="text" id="date_of_birth" name="date_of_birth" class="form-control form-control-sm" placeholder="">
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
          </select>
				</div>
			</div>
				<div class="form-row">
				    <div class="form-group col-md-4">
				     	<label for="inputBloodType">Height</label>
				    	<input type="text" id="height" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-4">
				    	<label for="inputCivilStatus">Weight</label>
				    	<input type="text" id="Weight" class="form-control form-control-sm" >
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

				<br/>
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
				    	<input type="email" id="email" class="form-control form-control-sm"  placeholder="personal email">
				    </div> 
				</div>
		  
			<div class="form-row">
				  <div class="form-group col-md-3">
				     	<label for="emp_no">Employee No</label>
				    	<input type="text" id="emp_no" class="form-control form-control-sm" >
				    </div>
					 <div class="form-group col-md-4">
				     	<label for="emp_status">Employee Status</label>
				    	<select class="form-control show-tick" id="emp_status" name="emp_status"> 
                                                    <option></option>
                                                    <?php
                                                    include("dbcon.php"); 
                                                    $employee_status = $con->prepare("SELECT * FROM lib_employment_status ORDER BY stat_id");
                                                    $employee_status->execute();
                                                    while($row1 = $employee_status->fetch()) {
                                                            $emp_full_stat = $row1['emp_status_full'];
                                                    ?>
                                                        <option value="<?php echo $row1['stat_id']; ?>"><?php echo $row1['emp_status_full']; ?></option>
                                                    <?php } ?>
                                                    </select>

				    </div>
				    <div class="form-group col-md-4">
				     	<label for="bsu_email">BSU Email</label>
				    	<input type="email" id="bsu_email" name="bsu_email" class="form-control form-control-sm" placeholder="BSU Email purposes">
				    </div>
				     <div class="form-group col-md-3">
				     	<label for="pla_id">Plantilla No.</label>
				    	<input type="text" id="pla_id" name="pla_id" class="form-control form-control-sm" >
				    </div> 
				</div>
		   
		</fieldset>
		
		</div>

	</div> <!--end of card(Basic Information)-->
	<br>

		<div class="card-body">
		<fieldset enabled>
			<div class="form-row">
				<div class="input-group col-md-4">
						<span class="input-group-addon">
							<label for="position">Position Title</label>
						</span>
						<select class="form-control show-tick" name="position_title_name"> 
                                                    <option></option>
                                                    <?php
                                                    include("dbcon.php"); 
                                                    $pos_title = $con->prepare("SELECT * FROM lib_position_title ORDER BY position_title_id");
                                                    $pos_title->execute();
                                                    while($row1 = $pos_title->fetch()) {
                                                            $position_title_name = $row1['position_title_name'];
                                                    ?>
                                                        <option value="<?php echo $row1['position_title_id']; ?>"><?php echo $row1['position_title_name']; ?></option>
                                                    <?php } ?>
                                                    </select>
                </div>
					<div class="input-group col-md-4">
						<span class="input-group-addon">
							<label for="assignment">Assignment</label>
						</span>
						<select class="form-control show-tick" name="assignment_id"> 
                                                    <option></option>
                                                    <?php
                                                    include("dbcon.php"); 
                                                    $assignment = $con->prepare("SELECT * FROM lib_assignment ORDER BY assignment_id");
                                                    $assignment->execute();
                                                    while($row1 = $assignment->fetch()) {
                                                            $assignment_name = $row1['assignment_name'];
                                                    ?>
                                                        <option value="<?php echo $row1['assignment_id']; ?>"><?php echo $row1['assignment_name']; ?></option>
                                                    <?php } ?>
                                                    </select>
                </div>

					<div class="input-group col-md-4">
						<span class="input-group-addon">
							<label for="Campus">Campus</label>
						</span>
						<select class="form-control show-tick" name="campus" id="campus_id"> 
                                                    <option></option>
                                                    <?php
                                                    include("dbcon.php"); 
                                                    $campus = $con->prepare("SELECT * FROM lib_campus ORDER BY campus_id");
                                                    $campus->execute();
                                                    while($row1 = $campus->fetch()) {
                                                            $campus_name = $row1['campus_name'];
                                                    ?>
                                                        <option value="<?php echo $row1['campus_id']; ?>"><?php echo $row1['campus_name']; ?></option>
                                                    <?php } ?>
                                                    </select>
					</div>
				</div>
		</fieldset>
	</div>
</form>

<!-- script -->

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
    <!-- <script type="text/javascript">
    	$(() => {
		$("#Save").click(function(ev){
		var form = $("#PDSForm");
		var url = form.attr('action');

		$.ajax({
			type: "POST",
			url: 'add_personnel_query.php',
			data: form.serialize(),
			succes: function(data){

			alert("Saved Successfully");

			},
			error: function(data){
			alert("Some Error");
			}
		});
		});
});


    </script> -->
 <!-- <script>
        $(document).ready(function(){
            $("#Save").click(function(){
                var first_name=$("#first_name").val();
                var middle_name=$("#middle_name").val();
                var last_name=$("#last_name").val();
                var ext_name = $("#ext_name").val();
                var date_of_birth = $("#date_of_birth").val();
                var place_of_birth = $("#place_of_birth").val();
                var gender = $("#gender").val();
                var height = $("#height").val();
                var weight = $("#weight").val();
                var civil_status = $("#civil_status").val();
                var citizenship = $("#citizenship").val();
                var mobile_no = $("#mobile_no").val();
                var telephone_no = $("#telephone_no").val();
                var email = $("#email").val();
                var emp_no = $("#emp_no").val();
                var emp_status = $("#emp_status").val();
                var pla_id = $("#pla_id").val();

                $.ajax({
                    url:'add_personnel_query.php',
                    method:'POST',
                    data:{
                        first_name: first_name,
                        middle_name: middle_name,
                        last_name: last_name,
                        ext_name: ext_name,
                        date_of_birth: date_of_birth,
                        place_of_birth: place_of_birth,
                        gender: gender,
                        height: height,
                        weight: weight,
                        civil_status: civil_status,
                        citizenship : citizenship,
                        mobile_no :  mobile_no,
                        telephone_no : telephone_no,
                        email : email,
                        emp_no : emp_no,
                        emp_status : emp_status,
                        pla_id : pla_id
                    },
                   success:function(data){
                       alert(data);
                       alert('')
                   }
                });
            });
        });
    </script> -->