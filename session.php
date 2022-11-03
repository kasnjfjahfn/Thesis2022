<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['emp_id']) || (trim($_SESSION['emp_id']) == '')) {
    header("location: login.php");
    exit();
$session_id=$_SESSION['emp_id'];
}
?>