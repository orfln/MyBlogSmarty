<?php /* Smarty version 3.1.27, created on 2016-10-03 11:05:54
         compiled from "/srv/www/htdocs/smarty/templates/addcomment.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:153535079457f23b9261c872_40387601%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aef8158d17586aff34684d3a1bbfea1cf241aa1' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/addcomment.tpl',
      1 => 1475260156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153535079457f23b9261c872_40387601',
  'variables' => 
  array (
    'report_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f23b926fe836_00745367',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f23b926fe836_00745367')) {
function content_57f23b926fe836_00745367 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153535079457f23b9261c872_40387601';
?>

        <div class="content">
            <h2>подання коментаря</h2>
            
            <?php echo $_smarty_tpl->tpl_vars['report_id']->value;?>
 reports on blog
        </div>


  


 
<?php }
}
?>