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
		        	<a class="nav-link" href="overview.php" ><h6>Overview</h6></a>
		        </li>
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
		<form id="PDSForm">
		<div class="card">
		<div class="card-header" style="height: 3rem" id="c1">PERSONAL INFORMATION</div>
		
	  	<br/>
	  	<div class="card-body">
			<fieldset disabled>
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
				    	<input type="text" id="suffix" name="suffix"class="form-control form-control-sm" placeholder="Last Name">
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-4">
				    	<label for="inputDateofBirth">Date of Birth</label>
				      	<input type="text" id="DateofBirth" name="" class="form-control form-control-sm" placeholder="">
				    </div>
				    <div class="form-group col-md-4">
				     	<label for="inputPlaceofBirth">Place of Birth</label>
				     	<input type="text" id="BirthPlace" class="form-control form-control-sm" placeholder="">			   
					</div>
					 <div class="form-group col-md-4">
					 <div class="input-group-prepend">
          <label class="inputGender" for="gender">Gender</label>
          </div>
          <select class="custom-select" id="per_gender">
            <option selected>Choose...</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
          </select>
				</div>
			</div>
				<div class="form-row">
				    <div class="form-group col-md-4">
				     	<label for="inputBloodType">Height</label>
				    	<input type="text" id="BloodType" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-4">
				    	<label for="inputCivilStatus">Weight</label>
				    	<input type="text" id="BloodType" class="form-control form-control-sm" >
				    </div>
				</div>
				 <div class="form-row">
				    <div class="form-group col-md-4">
				    	<label for="inputCivilStatus">Civil Status</label>
				    	<input type="text" id="BloodType" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-4">
				     	<label for="inputCitizenship">Citizenship</label>
				     	<input type="text" id="BloodType" class="form-control form-control-sm" >
					</div>
				</div>
				<br/>
				<div class="form-row">
				    <div class="form-group col-md-4">
				    	<label for="plantilla">Plantilla No.</label>
				    	<input type="text" id="pla_id" class="form-control form-control-sm" >
				    </div>
				   
				</div>

				<br/>
				<div class="form-row">
					 <div class="form-group col-md-4">
				     	<label for="inputMobileNumber">Mobile Number</label>
				    	<input type="text" id="mobile_no" name="per_contact_no" class="form-control form-control-sm" >
				    </div>
				     <div class="form-group col-md-4">
				     	<label for="inputMobileNumber">Telephone Number</label>
				    	<input type="text" id="per_contact_no" name="per_contact_no" class="form-control form-control-sm" >
				    </div>
				    <div class="form-group col-md-4">
				     	<label for="inputEmailAddress">Email Address</label>
				    	<input type="email" id="per_email" class="form-control form-control-sm" >
				    </div> 
				</div>
		   
		</fieldset>
		</div>
	</div> <!--end of card(Basic Information)-->
		<br>
