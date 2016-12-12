<?php /* Smarty version 3.1.27, created on 2016-12-11 11:11:52
         compiled from "/srv/www/htdocs/myblog/templates/ajaxshowonereport.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1366370948584d34783032d8_39178080%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '218096b1f3a34f8da064663cc46d68193872a07d' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/ajaxshowonereport.tpl',
      1 => 1481454708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1366370948584d34783032d8_39178080',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584d34784136e7_04825739',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584d34784136e7_04825739')) {
function content_584d34784136e7_04825739 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1366370948584d34783032d8_39178080';
?>
 <?php echo '<script'; ?>
 type="text/javascript">

var report_id = this->get_templates_var('id') ;
      
function waitForNewComRep() {
  $.ajax({          
    type: "POST",
    url: "../models/class.Get.Data.MySql.php?repid=" + $report_id,
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