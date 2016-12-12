<?php /* Smarty version 3.1.27, created on 2016-11-25 17:47:44
         compiled from "/srv/www/htdocs/smarty/templates/outputone.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1320789029583879404c2031_74877795%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd65d7350e2f4ded583bbad27be41be2bfca5143' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/outputone.tpl',
      1 => 1480096053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1320789029583879404c2031_74877795',
  'variables' => 
  array (
    'result' => 0,
    'row' => 0,
    'result_comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583879405ee014_75569166',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583879405ee014_75569166')) {
function content_583879405ee014_75569166 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1320789029583879404c2031_74877795';
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