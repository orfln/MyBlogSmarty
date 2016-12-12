<?php /* Smarty version 3.1.27, created on 2016-12-08 15:18:08
         compiled from "/srv/www/htdocs/myblog/templates/addcomment.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1658901877584979b06ab0c7_43890065%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81b8a2231ab601723763d6fa4cc1e7b6c78b6039' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/addcomment.tpl',
      1 => 1481053424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1658901877584979b06ab0c7_43890065',
  'variables' => 
  array (
    'report_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584979b06f0930_78959782',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584979b06f0930_78959782')) {
function content_584979b06f0930_78959782 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1658901877584979b06ab0c7_43890065';
?>
        <!--Confirmation of adding of comment -->
        
        <div class="content">
            <h2>подання коментаря</h2>
            Your comment is added.
            There are <?php echo $_smarty_tpl->tpl_vars['report_id']->value;?>
 reports on blog
        </div>


  


 
<?php }
}
?>