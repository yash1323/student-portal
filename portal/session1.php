<?php
   include('init.php');
   session_start();
   $db = mysqli_select_db($conn,'simplestresult');
	$user_check1 = $_SESSION['login_user1'];
   $user_class = $_SESSION['login_userclass'];
   $ses_sql1 = mysqli_query($conn,"select rno from students where rno= '$user_check1'");
   $row1 = mysqli_fetch_array($ses_sql1);
   
   $login_session1 = $row1['rno'];
   
   if(!isset($_SESSION['login_user1'])){
      header("Location:index.php");
   }
   ?>