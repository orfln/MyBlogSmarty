<?php /* Smarty version 3.1.27, created on 2016-12-06 19:40:35
         compiled from "/srv/www/htdocs/smarty/templates/addcommentform.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:188268502358471433a05ea3_55432823%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29e78e7c3ab67383cd3071e85dd794f838c98b84' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/addcommentform.tpl',
      1 => 1481052892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188268502358471433a05ea3_55432823',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58471433a68ca0_88134760',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58471433a68ca0_88134760')) {
function content_58471433a68ca0_88134760 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '188268502358471433a05ea3_55432823';
?>


 <!-- Form for adding of comments on report with id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 -->   
<form class="content" method="post" action="index.php?controller=index&action=addcomment&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> 
    <h2>Форма для подання коментаря на повідомлення з id= <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h2> 
    Name: <input type="text" name="name">
    <br><br>
    Comment: <textarea name="content" rows="5" cols="40"></textarea>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
</form>
<?php }
}
?>