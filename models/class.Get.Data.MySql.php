<?php
  /** Response on ajax request for new comment on reports */
  
  // Connect to database
  require_once 'class.Connect.php';
  
  $report_id = (int) isset($_GET['repid']) ? $_GET['repid'] : 0;
  
  // Request for last comment
  $sql = "SELECT `ID`, `CONTENT` 
          FROM `COMMENTS` 
          WHERE `REPORT_ID`='$report_id'
          ORDER BY `ID` DESC 
          LIMIT 1";

  //$last_id = (int) isset($_GET['repid']) ? $_GET['repid'] : 0;

  //echo 'Report_id';
  //echo $report_id;

  $newest_comment_result = $con->query($sql);

  // ****** if $last_id==0 and if not empty $newest_comment_result set real $last_id ********
  if ($row=$newest_comment_result->fetch_assoc()) {
	  $current_id = (int) $row["ID"];
	  //if ($last_id==0) {$last_id=$current_id;}
    $last_id=$current_id;
  }

  // Checking for new comment on report
  while ($current_id <= $last_id) {
    usleep(10000);
    clearstatcache();
     
    $newest_comment_result = $con->query($sql);
    $row=$newest_comment_result->fetch_assoc();
    
    $current_id = (int) $row["ID"];
    $content = $row["CONTENT"];	
  }
  
  /** Prepare and return response on ajax request ***
   * @param $response['new_comment_id']
   * @param $response['new_comment_content']  
   */
  $response = array();
  $response['new_comment_id'] = $current_id;
  $response['new_comment_content'] = "New comment is added: \n\n".$content;
  echo json_encode($response);
  
  $con->close();

