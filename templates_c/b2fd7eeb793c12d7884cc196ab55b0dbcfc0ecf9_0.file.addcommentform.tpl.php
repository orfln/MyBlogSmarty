<?php /* Smarty version 3.1.27, created on 2016-12-07 15:43:29
         compiled from "/srv/www/htdocs/myblog/templates/addcommentform.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:35198739458482e21cc6111_32294270%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2fd7eeb793c12d7884cc196ab55b0dbcfc0ecf9' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/addcommentform.tpl',
      1 => 1481052892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35198739458482e21cc6111_32294270',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58482e21d1ad49_60925246',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58482e21d1ad49_60925246')) {
function content_58482e21d1ad49_60925246 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '35198739458482e21cc6111_32294270';
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