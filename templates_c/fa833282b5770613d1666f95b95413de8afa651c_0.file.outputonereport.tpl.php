<?php /* Smarty version 3.1.27, created on 2016-12-07 09:24:09
         compiled from "/srv/www/htdocs/smarty/templates/outputonereport.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2409848455847d539447f82_14437159%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa833282b5770613d1666f95b95413de8afa651c' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/outputonereport.tpl',
      1 => 1480096053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2409848455847d539447f82_14437159',
  'variables' => 
  array (
    'result' => 0,
    'row' => 0,
    'result_comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5847d53954f0c4_44832327',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847d53954f0c4_44832327')) {
function content_5847d53954f0c4_44832327 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2409848455847d539447f82_14437159';
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