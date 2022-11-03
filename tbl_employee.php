<?php
include('header.php');


?>
  <!-- Content Wrapper. Contains page content -->
<script type="text/javascript" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
<script type="text/javascript" href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
     
} );
  

</script>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Benguet State University Personnels</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- /.content-header -->

    <section class="content">
    <div class="form-row">
      <div class="col-4">
      <div class="form-group has-search">
      <li class="nav-item d-none d-sm-inline-block">
      <span class="fa fa-search form-control-feedback"></span>
      <input type="text" class="form-control" placeholder="Search ID number">
      </li>
      </div>
      </div>

      <div class="col-md-4">
      <a href="BSU_Non_teaching.php">
      <button type="button" class="btn btn-success">Non-Teaching</button>
      </a>
      <a href="BSU_teaching.php">
      <button type="button" class="btn btn-warning">Teaching</button>
      </a>
      <a href="admin_adds_employee.php" >
      <button type="button" class="btn btn-primary">Add Personnel</button>
      </a>
      </div>
     </div>
</section>
   
   <section class="table">
    <div class="table-responsive">
      <table id="myTable" class="table table-striped table-bordered" style="width:100%">
        
          <thead>
      <tr>
        <th scope="col" align="center">Employee ID</th>
        <th scope="col" align="center">Name</th>
        <th scope="col" align="center">Assignment</th>
        <th scope="col" align="center">Position/Title</th>
        <th scope="col" align="center">Department/College</th>
        <th scope="col" align="center">Telephone Number</th>
        <th scope="col" align="center">Mobile Number</th>
        <th scope="col" align="center">Employee Status</th>   
        <th scope="col" align="center">Action</th>
        <tr></tr>
      </tr>
    </thead>
<tbody>
  <?php
                                   include('dbcon.php');
                                    $display = $con->prepare("SELECT * FROM lib_plantilla FULL JOIN lib_assignment, lib_plantilla, lib_campus, lib_colleges, lib_countries, lib_degree, lib_department, lib_designation, lib_doctorate, lib_employment_status, lib_fund, lib_geo_barangay, lib_geo_city, lib_geo_province, lib_geo_region, lib_masteral, lib_office, lib_officials, lib_position_title, lib_qualification, lib_salary_grade, lib_services, lib_tranche;");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                        $position_title_id = $row['position_title_id'];
                                        $assignment_id = $row['assignment_id'];
                                        $date = new DateTime($bday);
                                        $date1 = new DateTime($dooa);
                                        $now = new DateTime();


                                        $difference = $date->diff($now)->format('%y');
                                        $length = $date1->diff($now)->format('%y');


                                ?> 
                                  <tr>
                                  <td class="hidden"<?php echo $row['emp_id']; ?>></td>
                                  <td><a href="view_employee_info.php"><?php echo $row['last_name'].", ".$row['first_name']." ".$row['middle_name']; ?></a></td>
                                  <td values="<?php echo $row['assignment_id'].' '.$row['position_title_id']; ?>"><?php echo $row['assignment_name']." ".$row['position_title_name']; ?></td>
                                  <td values="<?php echo $row['department_id']; ?>"><?php echo $row['department_name']; ?></td>
                                  <td values="<?php echo $row['college_id']; ?>"><?php echo $row['college_name']; ?></td>
                                  <td><?php echo $difference;?></td>
                                  <td><?php echo $row['telephone_no']; ?></td>
                                  <td><?php echo $row['mobile_no']; ?></td>
                                  <td><?php echo $row['campus_name'];?></td>
                                  <td>     
                                    <a class="btn btn-success btn-sm" href="edit_personnel.php?per_id=<?php echo $row['per_id']?>">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Edit</span>
                                    </a>                                 
                                  </td>
                                </tr>                           
                                    <?php }?>
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
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
        
            
            
         
          </section>

          <!--PROFILE END-->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<style type="text/css">
  .has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
};
</style>
