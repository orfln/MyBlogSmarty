<?php /* Smarty version 3.1.27, created on 2016-11-21 10:38:55
         compiled from "/srv/www/htdocs/smarty/templates/ajax.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4396739905832cebfdc19f7_40631007%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75e4627ddca6ea1130998cdf5a419632c2a37256' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/ajax.tpl',
      1 => 1479723590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4396739905832cebfdc19f7_40631007',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5832cebfe40a95_49485441',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5832cebfe40a95_49485441')) {
function content_5832cebfe40a95_49485441 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4396739905832cebfdc19f7_40631007';
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