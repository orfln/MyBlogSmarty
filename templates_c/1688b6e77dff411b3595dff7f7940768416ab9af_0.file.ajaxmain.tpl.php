<?php /* Smarty version 3.1.27, created on 2016-12-07 09:18:48
         compiled from "/srv/www/htdocs/smarty/templates/ajaxmain.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9212370155847d3f8d096e8_36373209%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1688b6e77dff411b3595dff7f7940768416ab9af' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/ajaxmain.tpl',
      1 => 1481102324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9212370155847d3f8d096e8_36373209',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5847d3f8d90eb8_95606725',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847d3f8d90eb8_95606725')) {
function content_5847d3f8d90eb8_95606725 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9212370155847d3f8d096e8_36373209';
?>
<!-- <!DOCTYPE html PUBLIC "-//W3S//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> -->  
  
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8"> -->

<!-- <?php echo '<script'; ?>
 src="../jquery/jquery-3.1.1.min.js" 
    src="http://jqueryjs.googlecode.com/files/jquery-3.1.1.min.js"--> 

 
   
 <?php echo '<script'; ?>
 type="text/javascript" src="../jquery/jquery-3.1.1.min.js" charset="utf-8"><?php echo '</script'; ?>
>

 <?php echo '<script'; ?>
 type="text/javascript">
 //<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8">
 
 //<?php echo '<script'; ?>
 src="http://jqueryjs.googlecode.com/files/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8">

var repnum = 0;
var comnum = 0;
//alert("Begin of ajaxmain");
function waitForReportsAndCommentsNumbers() {
  $.ajax( {          
    type: "POST",
    url: "../models/class.Get.Reports.Number.Comments.Number.php?repnum=" + repnum + "&comnum=" + comnum,
    async: true,
    cache: false,

    complete: function () {    
      //alert("Complete");
      //$("#ml").html("complete");
    },

    success: function(data) {
      json=$.parseJSON(data);
      if(json['repnum'] != "") 
      {                                               
      repnum = json['repnum'];
      comnum = json['comnum'];
      s='Зараз на сайті '+'<br>'+'Повідомлень: ' + repnum + '<br>' + 'Коментарів: ' + comnum;     
      $("#ml").html(s);                       
      }
      setTimeout('waitForReportsAndCommentsNumbers()', 500); 
    },

    error: function () {    
      setTimeout('waitForReportsAndCommentsNumbers()', 500);
    //$("#ml").html("error");
    }             
  });
};

var new_comment_id = 0;
      
function waitForNewComRep() {
  $.ajax({          
    type: "POST",
    url: "../models/class.Get.Data.MySql.php?repid=" + new_comment_id,
    async: true,
    cache: false,

    success: function(data) {
      json=$.parseJSON(data);
      if(json['new_comment_content'] != "") {
        alert(json['new_comment_content']);
      }
      new_comment_id = json['new_comment_id'];
      setTimeout('waitForNewComRep()',10000);
    },             
  });
};
        
$(document).ready(function() {
    waitForReportsAndCommentsNumbers();
    waitForNewComRep(); })  
           
<?php echo '</script'; ?>
> 

<?php }
}
?>