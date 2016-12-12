<?php
  include_once 'class.Connect.php';
  
  /******************* Reports number calculation ***********************/
  
  // Визначення кількості повідомлень 
  $sql="SELECT COUNT(*) AS repnum FROM `REPORTS`";
  $result = $con->query($sql);
  $row=$result->fetch_assoc();
  $Reports_Number=$row["repnum"];
      
  $comment_Date=date("Y-m-d h:i:s"); 

  $name=mysql_real_escape_string($_POST[name]); 
  $title=mysql_real_escape_string($_POST[title]); 
  $content=mysql_real_escape_string($_POST[content]); 
  
  $sql = "INSERT INTO `REPORTS` 
          SET `NAME`='$name', `TITLE`='$title', `CONTENT`='$content', 
          `DATE`='$comment_Date', `COMNUM`=0, `LAST_COMMENT_DATE`='0000-00-00 00:00:00'";

  $result = $con->query($sql);
  // Text message for tpl file
  $Report_Text='';
  if (mysql_error($con)==0) {
      $Report_Text= $Report_Text."Your report has been added!".'<br/>';
      $Reports_Number++;
  };
   
  // ========= Reduce Reports number down to 50 deleting oldest reports ========= 
  while ($Reports_Number>50) {
    $aa=$con->query("SELECT `ID` 
                     FROM `REPORTS` 
                     ORDER BY `DATE` 
                     LIMIT 1");
    $row_aa=$aa->fetch_assoc();
    
    // *** Delete all comments on this report ***
    $id=$row_aa["ID"];

    // ******** Delete COMMENTS with REPORT_ID= $ID ********
    $bb=$con->query("`DELETE` FROM `COMMENTS` WHERE `REPORT_ID`='$id'");
    // ******** Delete REPORT with id=$id ********
    $con->query("DELETE FROM `REPORTS` 
                 ORDER BY `DATE` LIMIT 1");
    $Reports_Number--;
    $Report_Text=$Report_Text."1 OLDEST REPORT IS DELETED".'<br/>';
  };

  $con->close();

