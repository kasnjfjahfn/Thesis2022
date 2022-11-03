<?php
require 'dbcon.php';
if(isset($_POST['Save'])) {
	// extract($_POST);
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$extension_name = $_POST['extension_name'];
	$gender = $_POST['gender'];
	$civil_status = $_POST['civil_status'];
	$address = $_POST['address'];
	$position_title_name = $_POST['position_title_name']; //non-teaching 
	$per_rank = $_POST['rank_name'];
	$per_eligibility = $_POST['per_eligibility'];
	$dept_id = $_POST['dept_id'];
	$per_designation = $_POST['per_designation'];
	$per_date_of_birth  = $_POST['per_date_of_birth'];
	$per_place_of_birth = $_POST['per_place_of_birth'];
	$per_tin_no = $_POST['per_tin_no'];
	$per_gsis_bp_no = $_POST['per_gsis_bp_no'];
	$per_pagibig_no = $_POST['per_pagibig_no'];
	$per_contact_no = $_POST['per_contact_no'];
	$per_plantilla_no = $_POST['per_plantilla_no'];
	$per_date_of_original_appointment = $_POST['per_date_of_original_appointment'];
	$per_campus = $_POST['per_campus'];
	$bs_name = $_POST['bs_name'];
	$bs_year = $_POST['bs_year'];
	$bs_school = $_POST['bs_school'];
	$ms_name = $_POST['ms_name'];
	$ms_with_unit = $_POST['ms_with_unit'];
	$ms_year = $_POST['ms_year'];
	$ms_school = $_POST['ms_school'];
	$dr_name = $_POST['dr_name'];
	$dr_with_unit = $_POST['dr_with_unit'];
	$dr_year = $_POST['dr_year'];
	$dr_school = $_POST['dr_school'];
	$other_degree = $_POST['other_degree'];
	$other_year = $_POST['other_year'];
	$other_school = $_POST['other_school'];
	$gass_id = $_POST['gass_name'];


	$add_employee = $con->prepare("INSERT INTO tbl_employee (emp_id, first_name, middle_name, last_name, ext_name, sex,birthdays, place_of_birth, email, bsu_email, civil_status, citizenship, weight, height, telephone_no, mobile_no, emp_status, pla_id, bio_no,  date_created, profile_image) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ? )");
	$add_employee->execute(array($emp_id, $first_name, $middle_name, $last_name, $ext_name, $sex, $birthdays, $place_of_birth, $email, $bsu_email, $civil_status, $citizenship, $weight, $height, $telephone_no, $mobile_no,  $emp_status, $date_created));

	header('location:tbl_employee.php');
}
?>