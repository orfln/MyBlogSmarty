<?php /* Smarty version 3.1.27, created on 2016-12-11 21:10:33
         compiled from "/srv/www/htdocs/myblog/templates/ajaxrepnumcomnum.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1989880994584dc0c9215de9_42461782%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d74632eac3d286f15412f5b0f7b58db1131dd90' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/ajaxrepnumcomnum.tpl',
      1 => 1481490579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1989880994584dc0c9215de9_42461782',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584dc0c9313997_40046376',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584dc0c9313997_40046376')) {
function content_584dc0c9313997_40046376 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1989880994584dc0c9215de9_42461782';
?>
<!-- <!DOCTYPE html PUBLIC "-//W3S//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> -->  
  
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8"> -->

<!-- <?php echo '<script'; ?>
 src="../jquery/jquery-3.1.1.min.js" 
    src="http://jqueryjs.googlecode.com/files/jquery-3.1.1.min.js"--> 

 
   
 

 <?php echo '<script'; ?>
>

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