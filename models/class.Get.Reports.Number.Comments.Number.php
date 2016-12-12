<?php

  // Response on ajax request for reports and comments numbers in case of any change
  
  $last_reports_number = (int) isset($_GET['repnum']) ? $_GET['repnum'] : 0;
  $last_comments_number = (int) isset($_GET['comnum']) ? $_GET['comnum'] : 0;

  require_once '../configs/config.php';
  include 'class.Reports.And.Comments.Numbers.php';

  while (($last_reports_number==$reports_number) AND
         ($last_comments_number==$comments_number)) {
    usleep(500000);
    //clearstatcache();
    include 'class.Reports.And.Comments.Numbers.php';
  }

  $smarty->templates_c = "templates_c";

  $response = array();
  $response['repnum']=$reports_number;
  $response['comnum']=$comments_number;
  
  echo json_encode($response);


