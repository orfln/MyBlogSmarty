<?php /* Smarty version 3.1.27, created on 2016-12-11 20:41:48
         compiled from "/srv/www/htdocs/myblog/templates/outputonereport.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1274065413584dba0cdd0fa7_55034248%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a863e796f00cfbd63ffc402975b589c12119f54' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/outputonereport.tpl',
      1 => 1481488896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1274065413584dba0cdd0fa7_55034248',
  'variables' => 
  array (
    'result' => 0,
    'row' => 0,
    'result_comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584dba0cea6ac2_79438173',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584dba0cea6ac2_79438173')) {
function content_584dba0cea6ac2_79438173 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1274065413584dba0cdd0fa7_55034248';
?>
    
        <div class="content">
            <p>
                <?php
$_from = $_smarty_tpl->tpl_vars['result']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
                <?php echo $_smarty_tpl->tpl_vars['row']->value["ID"];?>
 <br/> <?php echo $_smarty_tpl->tpl_vars['row']->value["DATE"];?>
 <br/> <?php echo $_smarty_tpl->tpl_vars['row']->value["CONTENT"];?>
<br/>          
                <br/>
                <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                <br/>
                <a href="index.php?controller=index&action=addcommentform&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
" class="output"> 
                    Додати коментар </a> <br/>
            </p>

            <p>
                <?php
$_from = $_smarty_tpl->tpl_vars['result_comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
                <?php echo $_smarty_tpl->tpl_vars['row']->value["NAME"];?>
 <br/> <?php echo $_smarty_tpl->tpl_vars['row']->value["DATE"];?>
 <br/> <?php echo $_smarty_tpl->tpl_vars['row']->value["CONTENT"];?>
<br/>                
                <br/>
                <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                <br/>
            </p>
        </div>
    

<?php }
}
?>