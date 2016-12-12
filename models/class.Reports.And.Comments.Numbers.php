<?php
  
  include 'class.Connect.php';

  // Визначення кількості повідомлень 
  $sql="SELECT COUNT(*) AS repnum FROM `REPORTS`";
  $result = $con->query($sql);
  $row=$result->fetch_assoc();
  $reports_number=$row["repnum"];

  // Визначення кількості коментарів
  $sql2="SELECT COUNT(*) AS comnum FROM `COMMENTS`";
  $result2 = $con->query($sql2);
  $row2=$result2->fetch_assoc();
  $comments_number=$row2["comnum"];
  
  $con->close();
  