<?php /* Smarty version 3.1.27, created on 2016-12-11 21:12:11
         compiled from "/srv/www/htdocs/myblog/templates/ajaxnewcomment.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1519380858584dc12b01b4e3_17104818%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78d9cd1d2f569e9968ba8d56237a32fa9c07cdfa' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/ajaxnewcomment.tpl',
      1 => 1481490676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1519380858584dc12b01b4e3_17104818',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584dc12b145710_57370430',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584dc12b145710_57370430')) {
function content_584dc12b145710_57370430 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1519380858584dc12b01b4e3_17104818';
?>

<?php echo '<script'; ?>
>

  report_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;

function waitForNewComRep() {
  $.ajax({
    type: "POST",
    url: "../models/class.Get.Data.MySql.php?repid="+report_id,
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
   waitForNewComRep(); })
<?php echo '</script'; ?>
><?php }
}
?>