<?php /* Smarty version 3.1.27, created on 2016-10-02 16:55:49
         compiled from "/srv/www/htdocs/smarty/templates/addreport.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11037942757f13c1577dff9_48286553%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '896c779447e58534ff30b60b3fc8db5ab44f9fa0' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/addreport.tpl',
      1 => 1475259872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11037942757f13c1577dff9_48286553',
  'variables' => 
  array (
    'textreport' => 0,
    'repnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f13c157e9da7_05457498',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f13c157e9da7_05457498')) {
function content_57f13c157e9da7_05457498 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11037942757f13c1577dff9_48286553';
?>

        <div class="content">
            <h2>подання повідомлення</h2>
            <?php echo $_smarty_tpl->tpl_vars['textreport']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['repnum']->value;?>
 reports on blog
        </div>


  


 
<?php }
}
?>