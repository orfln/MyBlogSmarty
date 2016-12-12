<?php /* Smarty version 3.1.27, created on 2016-12-07 15:43:28
         compiled from "/srv/www/htdocs/myblog/templates/ajax.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:115237329058482e20db57e2_99385682%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e105a1abc8ffa010c4d21601e31f8b3f1c9af062' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/ajax.tpl',
      1 => 1479723590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115237329058482e20db57e2_99385682',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58482e20dbbb15_15215627',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58482e20dbbb15_15215627')) {
function content_58482e20dbbb15_15215627 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '115237329058482e20db57e2_99385682';
?>

<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8"> -->

<!--<?php echo '<script'; ?>
 src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" --> 
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.1.min.js" 
  type="text/javascript" charset="utf-8">
/* <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8"> */

var param = 0;
      
function waitForMsg() {
  $.ajax({          
      type: "POST",
      url: "../configs/models/getDataMySql.php?param=" + param,
      async: true,
      cache: false,     
    
      success: function(data) {
        var json = eval('(' + data + ')');
        if(json['msg'] != "") {
          alert(json['msg']);
        }
        param = json['param'];
        setTimeout('waitForMsg()',1000);
      },
  });
};
    
//$(document).ready(
$(function() {
  waitForMsg();
})
    
<?php echo '</script'; ?>
>

  <?php }
}
?>