<?php /* Smarty version 3.1.27, created on 2016-12-11 20:21:58
         compiled from "/srv/www/htdocs/myblog/templates/ajax2.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:34929898584db566073348_11980915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3e1a19d954081621fcb06ad17b49d6bdf036ed' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/ajax2.tpl',
      1 => 1481487711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34929898584db566073348_11980915',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584db5660ed076_86536129',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584db5660ed076_86536129')) {
function content_584db5660ed076_86536129 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '34929898584db566073348_11980915';
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