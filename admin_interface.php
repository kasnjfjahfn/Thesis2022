<?php
include('header.php');
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">University Dashboard</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- Management Report for Applicants -->

<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-2 col-4">

<div class="small-box" style="background-color: #008000;">
<div class="inner">
  <?php 
    include('dbcon.php');

     $permanent = $con->prepare("SELECT COUNT(*) FROM lib_employment_status where stat_id = '4'");
                                    $permanent->execute();
                                    $fetch = $permanent->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];
  }?>
<h3 class="number count-to"><?php echo $total; ?></h3>
<p>PERMANENT</p>
</div>
<div class="icon">
<i class="fas fa-user"></i>
</div>
<a href="tbl_employee.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>


<div class="col-lg-2 col-4">

<div class="small-box" style="background-color: #009900;">
<div class="inner">
  <?php 
    include('dbcon.php');

     $cos = $con->prepare("SELECT COUNT(*) FROM lib_employment_status where stat_id = '1'");
                                    $cos->execute();
                                    $fetch = $cos->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];
  }?> 
<h3 class="number count-to"><?php echo $total; ?></h3>
<p>Contract of Service</p>
</div>
<div class="icon">
<i class="fas fa-user"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-2 col-4">

<div class="small-box" style="background-color: #00b300;">
<div class="inner">
  <?php 
    include('dbcon.php');

     $job_order = $con->prepare("SELECT COUNT(*) FROM lib_employment_status where stat_id = '2'");
                                    $job_order->execute();
                                    $fetch = $job_order->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];
  }?> 
<h3 class="number count-to"><?php echo $total; ?></h3>
<p>Job Order</p>
</div>
<div class="icon">
<i class="fas fa-user"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-2 col-4">

<div class="small-box" style="background-color: #00cc00;">
<div class="inner">
  <?php 
    include('dbcon.php');

     $casual = $con->prepare("SELECT COUNT(*) FROM lib_employment_status where stat_id = '3'");
                                    $casual->execute();
                                    $fetch = $casual->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];
  }?> 
<h3 class="number count-to"><?php echo $total; ?></h3>
<p>Casual</p>
</div>
<div class="icon">
<i class="fas fa-user"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-2 col-4">

<div class="small-box" style="background-color: #00e600;">
<div class="inner">
  <?php 
    include('dbcon.php');

     $fixed_term = $con->prepare("SELECT COUNT(*) FROM lib_employment_status where stat_id = '5'");
                                    $fixed_term->execute();
                                    $fetch = $fixed_term->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];
  }?> 
<h3 class="number count-to"><?php echo $total; ?></h3>
<p>Fixed Term</p>
</div>
<div class="icon">
<i class="fas fa-user"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-2 col-4">

<div class="small-box" style="background-color:#b3ffb3;">
<div class="inner">
  <?php 
    include('dbcon.php');

     $coterminus = $con->prepare("SELECT COUNT(*) FROM lib_employment_status where stat_id = '6'");
                                    $coterminus->execute();
                                    $fetch = $coterminus->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];
  }?> 
<h3 class="number count-to"><?php echo $total; ?></h3>
<p>Coterminus</p>
</div>
<div class="icon">
<i class="fas fa-user"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
</div>


<div class="row">

<section class="col-lg-7 connectedSortable ui-sortable">

<div class="card direct-chat direct-chat-primary">
<div class="card-header ui-sortable-handle" style="cursor: move;">
<h3 class="card-title">Direct Chat</h3>
<div class="card-tools">
<span title="3 New Messages" class="badge badge-primary">3</span>
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
<i class="fas fa-comments"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body">

<div class="direct-chat-messages">

<div class="direct-chat-msg">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Alexander Pierce</span>
<span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
</div>

<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">

<div class="direct-chat-text">
Is this template really for free? That's unbelievable!
</div>

</div>


<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Sarah Bullock</span>
<span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
</div>

 <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">

<div class="direct-chat-text">
You better believe it!
</div>

</div>


<div class="direct-chat-msg">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Alexander Pierce</span>
<span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
</div>

<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">

<div class="direct-chat-text">
Working with AdminLTE on a great new app! Wanna join?
</div>

</div>


<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Sarah Bullock</span>
<span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
</div>

<img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">

<div class="direct-chat-text">
I would love to.
</div>

</div>

</div>


<div class="direct-chat-contacts">
<ul class="contacts-list">
<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Count Dracula
<small class="contacts-list-date float-right">2/28/2015</small>
</span>
<span class="contacts-list-msg">How have you been? I was...</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Sarah Doe
<small class="contacts-list-date float-right">2/23/2015</small>
</span>
<span class="contacts-list-msg">I will be waiting for...</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Nadia Jolie
<small class="contacts-list-date float-right">2/20/2015</small>
</span>
<span class="contacts-list-msg">I'll call you back at...</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Nora S. Vans
<small class="contacts-list-date float-right">2/10/2015</small>
</span>
<span class="contacts-list-msg">Where is your new...</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
John K.
<small class="contacts-list-date float-right">1/27/2015</small>
</span>
<span class="contacts-list-msg">Can I take a look at...</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Kenneth M.
<small class="contacts-list-date float-right">1/4/2015</small>
</span>
<span class="contacts-list-msg">Never mind I found...</span>
</div>

</a>
</li>

</ul>

</div>

</div>

<div class="card-footer">
<form action="#" method="post">
<div class="input-group">
<input type="text" name="message" placeholder="Type Message ..." class="form-control">
<span class="input-group-append">
<button type="button" class="btn btn-primary">Send</button>
</span>
</div>
</form>
</div>

</div>


<div class="card">
<div class="card-header ui-sortable-handle" style="cursor: move;">
<h3 class="card-title">
<i class="ion ion-clipboard mr-1"></i>
To Do List
</h3>
<div class="card-tools">
<ul class="pagination pagination-sm">
<li class="page-item"><a href="#" class="page-link">«</a></li>
<li class="page-item"><a href="#" class="page-link">1</a></li>
<li class="page-item"><a href="#" class="page-link">2</a></li>
<li class="page-item"><a href="#" class="page-link">3</a></li>
<li class="page-item"><a href="#" class="page-link">»</a></li>
</ul>
</div>
</div>

<div class="card-body">
<ul class="todo-list ui-sortable" data-widget="todo-list">
<li>

<span class="handle ui-sortable-handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>

<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value="" name="todo1" id="todoCheck1">
<label for="todoCheck1"></label>
</div>

<span class="text">Design a nice theme</span>

<small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>

<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li class="done">
<span class="handle ui-sortable-handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
<label for="todoCheck2"></label>
</div>
<span class="text">Make the theme responsive</span>
<small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle ui-sortable-handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value="" name="todo3" id="todoCheck3">
<label for="todoCheck3"></label>
</div>
<span class="text">Let theme shine like a star</span>
<small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle ui-sortable-handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value="" name="todo4" id="todoCheck4">
<label for="todoCheck4"></label>
</div>
<span class="text">Let theme shine like a star</span>
<small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle ui-sortable-handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value="" name="todo5" id="todoCheck5">
<label for="todoCheck5"></label>
</div>
<span class="text">Check your messages and notifications</span>
 <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle ui-sortable-handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value="" name="todo6" id="todoCheck6">
<label for="todoCheck6"></label>
</div>
<span class="text">Let theme shine like a star</span>
<small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
</ul>
</div>

</section>


<section class="col-lg-5 connectedSortable ui-sortable">


<div class="card bg-gradient-success">
<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
<h3 class="card-title">
<i class="far fa-calendar-alt"></i>
Calendar
</h3>

<div class="card-tools">

<div class="btn-group">
<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
<i class="fas fa-bars"></i>
</button>
<div class="dropdown-menu" role="menu">
<a href="#" class="dropdown-item">Add new event</a>
<a href="#" class="dropdown-item">Clear events</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">View calendar</a>
</div>
</div>
<button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>

</div>

<div class="card-body pt-0">

<div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">October 2022</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="09/25/2022" class="day old weekend">25</td><td data-action="selectDay" data-day="09/26/2022" class="day old">26</td><td data-action="selectDay" data-day="09/27/2022" class="day old">27</td><td data-action="selectDay" data-day="09/28/2022" class="day old">28</td><td data-action="selectDay" data-day="09/29/2022" class="day old">29</td><td data-action="selectDay" data-day="09/30/2022" class="day old">30</td><td data-action="selectDay" data-day="10/01/2022" class="day weekend">1</td></tr><tr><td data-action="selectDay" data-day="10/02/2022" class="day weekend">2</td><td data-action="selectDay" data-day="10/03/2022" class="day">3</td><td data-action="selectDay" data-day="10/04/2022" class="day">4</td><td data-action="selectDay" data-day="10/05/2022" class="day">5</td><td data-action="selectDay" data-day="10/06/2022" class="day">6</td><td data-action="selectDay" data-day="10/07/2022" class="day">7</td><td data-action="selectDay" data-day="10/08/2022" class="day weekend">8</td></tr><tr><td data-action="selectDay" data-day="10/09/2022" class="day active today weekend">9</td><td data-action="selectDay" data-day="10/10/2022" class="day">10</td><td data-action="selectDay" data-day="10/11/2022" class="day">11</td><td data-action="selectDay" data-day="10/12/2022" class="day">12</td><td data-action="selectDay" data-day="10/13/2022" class="day">13</td><td data-action="selectDay" data-day="10/14/2022" class="day">14</td><td data-action="selectDay" data-day="10/15/2022" class="day weekend">15</td></tr><tr><td data-action="selectDay" data-day="10/16/2022" class="day weekend">16</td><td data-action="selectDay" data-day="10/17/2022" class="day">17</td><td data-action="selectDay" data-day="10/18/2022" class="day">18</td><td data-action="selectDay" data-day="10/19/2022" class="day">19</td><td data-action="selectDay" data-day="10/20/2022" class="day">20</td><td data-action="selectDay" data-day="10/21/2022" class="day">21</td><td data-action="selectDay" data-day="10/22/2022" class="day weekend">22</td></tr><tr><td data-action="selectDay" data-day="10/23/2022" class="day weekend">23</td><td data-action="selectDay" data-day="10/24/2022" class="day">24</td><td data-action="selectDay" data-day="10/25/2022" class="day">25</td><td data-action="selectDay" data-day="10/26/2022" class="day">26</td><td data-action="selectDay" data-day="10/27/2022" class="day">27</td><td data-action="selectDay" data-day="10/28/2022" class="day">28</td><td data-action="selectDay" data-day="10/29/2022" class="day weekend">29</td></tr><tr><td data-action="selectDay" data-day="10/30/2022" class="day weekend">30</td><td data-action="selectDay" data-day="10/31/2022" class="day">31</td><td data-action="selectDay" data-day="11/01/2022" class="day new">1</td><td data-action="selectDay" data-day="11/02/2022" class="day new">2</td><td data-action="selectDay" data-day="11/03/2022" class="day new">3</td><td data-action="selectDay" data-day="11/04/2022" class="day new">4</td><td data-action="selectDay" data-day="11/05/2022" class="day new weekend">5</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2022</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month active">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year active">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
</div>

</div>

</section>

</div>

</div>
</section>

</div>

 
     
          </section>
         