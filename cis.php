<?php
include('header.php');
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
    
     <section class="content">
    <div class="row">
      <div class="col-4">
      <div class="form-group has-search">
      <li class="nav-item d-none d-sm-inline-block">
      <span class="fa fa-search form-control-feedback"></span>
      <input type="text" class="form-control" placeholder="Search ID number">
      </li>
      </div>
      </div>

      <div class="col-4">
      <a href="add_personnel.php">
      <button type="button" class="btn btn-primary">Add Personnel</button>
      </a>

      <a href="edit_personnel.php">
      <button type="button" class="btn btn-secondary">Edit</button>
      </a>
      </div>

  </div>
</section>
   
   <section class="table">
    <div class="table-responsive">
      <table class="table">
        
          <thead>
      <tr>
        <th scope="col" align="center">Employee ID</th>
        <th scope="col" align="center">Name</th>
        <th scope="col" align="center">Academic Rank</th>
        <th scope="col" align="center">Position/Title</th>
        <th scope="col" align="center">Department/College</th>
        <th scope="col" align="center">Age</th>
        <th scope="col" align="center">Address</th>
        <th scope="col" align="center">Gender</th>
        <th scope="col" align="center">Status</th>
        <th scope="col" align="center">Birthdate</th>
        <th scope="col" align="center">Birthplace</th>
        <th scope="col" align="center">Contact Number</th>
        <th scope="col" align="center">Bachelors Degree</th>
        <th scope="col" align="center">Masters Degree</th>
        <th scope="col" align="center">Doctorate Degree</th>
        <th scope="col" align="center">Option</th>
        <th scope="col" align="center">Eligibility</th>
        <th scope="col" align="center">Plantilla Number</th>
        <th scope="col" align="center">Employee Status</th>
        <th scope="col" align="center">Tin Number</th>
        <th scope="col" align="center">Pag-ibig Number</th>
        <th scope="col" align="center">GSIS Number</th>
        <th scope="col" align="center">Campus</th>
        <th scope="col" align="center">Action</th>
        <tr><td></td></tr>
      </tr>
    </thead>
<tbody>
    <?php
                                    include('dbcon.php');
                                    $display = $con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_position ON tbl_personnel.pos_id =tbl_position.pos_id LEFT JOIN tbl_gass_rank ON tbl_personnel.gass_id = tbl_gass_rank.gass_id LEFT JOIN tbl_academic_rank ON tbl_personnel.rank_id = tbl_academic_rank.rank_id LEFT JOIN tbl_department ON tbl_personnel.dept_id = tbl_department.dept_id ORDER BY per_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                        $pos_id = $row['pos_id'];
                                        $gass_id = $row['gass_id'];
                                        $rank_id = $row['rank_id'];
                                        $bday = $row["per_date_of_birth"];
                                        $dooa = $row["per_date_of_original_appointment"];
                                        $date = new DateTime($bday);
                                        $date1 = new DateTime($dooa);
                                        $now = new DateTime();


                                        $difference = $date->diff($now)->format('%y');
                                        $length = $date1->diff($now)->format('%y');


                                  ?>
                                  <tr>
                                  <td class="hidden"<?php echo $row['per_id']; ?>></td>
                                  <td><a href="empro_PDSlinformation.php"><?php echo $row['per_lastname'].", ".$row['per_firstname']." ".$row['per_middlename']; ?></a></td>
                                  <td values="<?php echo $row['gass_id'].' '.$row['rank_id']; ?>"><?php echo $row['gass_name']." ".$row['rank_name']; ?></td>
                                  <td values="<?php echo $row['pos_id']; ?>"><?php echo $row['pos_name']; ?></td>
                                  <td values="<?php echo $row['dept_id']; ?>"><?php echo $row['dept_name']; ?></td>
                                  <td><?php echo $difference;?></td>
                                  <td><?php echo $row['per_gender']; ?></td>
                                  <td><?php echo $row['per_status']; ?></td>
                                  <td><?php echo $row['per_address']; ?></td>
                                  <td><?php echo $row['per_date_of_birth']; ?></td>
                                  <td><?php echo $row['per_place_of_birth']; ?></td>
                                  <td><?php echo $row['per_contact_no']; ?></td>
                                  <td><?php echo $row['per_date_of_original_appointment']; ?></td>
                                  <td><?php echo $row['bs_name']; ?></td>
                                  <td><?php echo $row['ms_name']; ?></td>
                                  <td><?php echo $row['dr_name']; ?></td>
                                  <td><?php echo $row['other_degree']; ?></td>
                                  <td><?php echo $length?></td>
                                  <td><?php echo $row['per_eligibility']; ?></td>
                                  <td><?php echo $row['per_plantilla_no']; ?></td>
                                  <td><?php echo $row['per_designation']; ?></td>
                                  <td><?php echo $row['per_tin_no']; ?></td>
                                  <td><?php echo $row['per_pagibig_no']; ?></td>
                                  <td><?php echo $row['per_gsis_bp_no']; ?></td>
                                  <td><?php echo $row['per_campus'];?></td>
                                  <td>     
                                    <a class="btn btn-success btn-sm" href="edit_personnel.php?per_id=<?php echo $row['per_id']?>">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Edit</span>
                                    </a>                                 
                                  </td>
                                </tr>                           
                                     <?php 
                                     } ?>
                                   </tbody>
      </table>
    </div>
     
   </section>

 <!--PROFILE START-->    

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
</ol>
</div>
</div>
</div>
</div>

</div>
          </section>