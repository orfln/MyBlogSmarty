<?php /* Smarty version 3.1.27, created on 2016-09-18 12:53:07
         compiled from "/srv/www/htdocs/smarty/templates/output.php" */ ?>
<?php
/*%%SmartyHeaderCode:190338567757de8e335f1950_04795827%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b87645476fe3839642279c095220cb0e9fb563c4' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/output.php',
      1 => 1474203085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190338567757de8e335f1950_04795827',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57de8e3364a2e2_85993711',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57de8e3364a2e2_85993711')) {
function content_57de8e3364a2e2_85993711 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '190338567757de8e335f1950_04795827';
?>

<?php echo '<?php
  
  ';?>$servername = "localhost";
  $username = "blogadmin";
  $password = "12345678";
  $dbname = "Blogdb2";

  // Створюємо з'єднання
  $con = new mysqli($servername, $username, $password, $dbname);

  // Перевіряємо з'єднання
  if ($con->connect_error) {
      die("Помилка з'єднання: " . $con->connect_error);
    }


// ***** Calculate Comments Number ******  
  $sql = "SELECT `ID`, `COMNUM` FROM `REPORTS`";
  $result = $con->query($sql);
  while($row = $result->fetch_assoc()) 
    {   
      $report_id=$row["ID"];
      $result_comments = $con->query("SELECT * FROM `COMMENTS` WHERE `REPORT_ID`=$report_id");
      $report_num=0;
      while($row_ = $result_comments->fetch_assoc()) 
	{
	  $report_num++;
	};
	
      $aa=$con->query("UPDATE `REPORTS` SET `COMNUM`=$report_num where `ID`=$report_id");
      //echo "Report_id=".$report_id."     Report_num=  ".$report_num."<br>";
    };
    
  // ***** Ordering by last comment date *****
  $sql = "SELECT * FROM `REPORTS` WHERE `COMNUM`<30 ORDER BY `LAST_COMMENT_DATE` DESC, DATE DESC";
  $result = $con->query($sql);
  while($row = $result->fetch_assoc()) {
  if ($result->num_rows > 0) {
// виводимо дані кожного рядка таблиці

  echo "id: " . $row["ID"]. " - Name: " . $row["NAME"]. '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.
      "Comments: ".$row["COMNUM"]."<br>"."<br>".
      $row["CONTENT"]. "<br>". "<br>"."Date: " .$row["DATE"]." (". strtotime($row["DATE"]).") ".'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.
      "<a href=\"outputone.php?id=".$row["ID"]."\">Переглянути коментарі</a>"."<br>"."Коментарів: ".$row["COMNUM"]."<br>"."<br>"."<br>";
    }
   else {
	  echo "0 results";
	}
    };
  $sql = "SELECT * FROM `REPORTS` WHERE `COMNUM`>=30 ORDER BY `LAST_COMMENT_DATE` DESC, DATE";
  $result = $con->query($sql);
  while($row = $result->fetch_assoc()) {
  if ($result->num_rows > 0) {
// виводимо дані кожного рядка таблиці

  echo "id: " . $row["ID"]. " - Name: " . $row["NAME"]. '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.
      "Comments: ".$row["COMNUM"]."<br>"."<br>".
      $row["CONTENT"]. "<br>". "<br>"."Date: " .$row["DATE"]." (". strtotime($row["DATE"]).") ".'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.
      "<a href=\"outputone.php?id=".$row["ID"]."\">Переглянути коментарі</a>"."<br>"."Коментарів: ".$row["COMNUM"]."<br>"."<br>"."<br>";
    }
   else {
	  echo "0 results";
	}
    };
  
$con->close();


  // ***** Calculate Comments Number ******  
  //$sql = "SELECT ID, COMNUM FROM REPORTS";
  //$result = $con->query($sql);
  //$row = $result->fetch_assoc();
  //$smarty->assign('rowID',$row["ID"]);

       
      
<?php }
}
?>