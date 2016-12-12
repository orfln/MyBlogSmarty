<?php

  include_once 'class.Connect.php';
  $date=date("Y-m-d h:i:s"); 
  $report_id=$_GET['id'];

  // Додавання нового коментаря до таблиці COMMENTS
  $sql = "INSERT INTO `COMMENTS` 
          SET `REPORT_ID`='$report_id', `NAME`='$_POST[name]', `CONTENT`='$_POST[content]', `DATE`='$date';";
  $result = $con->query($sql);


  // Зчитування кількості коментарів до запису нового
  $sql2 = "SELECT `COMNUM` 
           FROM `REPORTS` 
           WHERE `ID`='$report_id';";
           
  $result = $con->query($sql2);
  $xx = $result->fetch_assoc();
  $comments_number = $xx["COMNUM"]+1;

  // Запис часу подання останнього коментаря і кількості коментарів у запис відповідного повідомлення
  $sql2 = "UPDATE `REPORTS` 
           SET `LAST_COMMENT_DATE`='$date', `COMNUM`='$comments_number' 
           WHERE `ID`='$report_id';";

  $result = $con->query($sql2);

  
  $con->close();

