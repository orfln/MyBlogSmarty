<?php /* Smarty version 3.1.27, created on 2016-11-25 17:47:40
         compiled from "/srv/www/htdocs/smarty/templates/output.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5248233125838793c0ed2a1_24107865%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95a1a6b7547b63183400d66367a1f8a8d82d3243' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/output.tpl',
      1 => 1480096036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5248233125838793c0ed2a1_24107865',
  'variables' => 
  array (
    'result1' => 0,
    'row' => 0,
    'result2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5838793c2e7827_33078051',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5838793c2e7827_33078051')) {
function content_5838793c2e7827_33078051 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5248233125838793c0ed2a1_24107865';
?>
    
        <div class="content">
            <p>
                <?php
$_from = $_smarty_tpl->tpl_vars['result1']->value;
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
 <br> 
                    <div class="reportcontent">
                        <?php echo $_smarty_tpl->tpl_vars['row']->value["CONTENT"];?>
<br>
                    </div>
                    <a href="index.php?controller=index&action=showselectedreport&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
" class="output">
                    <?php echo $_smarty_tpl->tpl_vars['row']->value["COMNUM"];?>
 коментарів</a> <br>
                    <br>
                    <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                    
                    <?php
$_from = $_smarty_tpl->tpl_vars['result2']->value;
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
 <br/> 
                    <div class="reportcontent">
                        <?php echo $_smarty_tpl->tpl_vars['row']->value["CONTENT"];?>
<br>
                    </div>
                    <a href="index.php?controller=index&action=showselectedreport&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
" class="output">
                    <?php echo $_smarty_tpl->tpl_vars['row']->value["COMNUM"];?>
 коментарів</a> <br>
                    <br>
                    <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                    
                <br>
            </p>
        </div>
    
<?php }
}
?>