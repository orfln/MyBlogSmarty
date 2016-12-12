<?php /* Smarty version 3.1.27, created on 2016-12-08 16:02:02
         compiled from "/srv/www/htdocs/myblog/templates/addreport.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1664152806584983faa8f424_79013603%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80eeedd14c994b87e860777d909579169da818ce' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/addreport.tpl',
      1 => 1481052821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1664152806584983faa8f424_79013603',
  'variables' => 
  array (
    'textreport' => 0,
    'repnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584983fab47d63_90096455',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584983fab47d63_90096455')) {
function content_584983fab47d63_90096455 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1664152806584983faa8f424_79013603';
?>

        <!-- Confirmation of report adding -->
        <div class="content">
            <h2>подання повідомлення</h2>
            Your report has been added!
            <?php echo $_smarty_tpl->tpl_vars['textreport']->value;?>

            There are <?php echo $_smarty_tpl->tpl_vars['repnum']->value;?>
 reports on blog now
        </div>


  


 
<?php }
}
?>