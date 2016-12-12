<?php /* Smarty version 3.1.27, created on 2016-12-07 09:26:30
         compiled from "/srv/www/htdocs/smarty/templates/outputallreports.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3860728705847d5c6a1e675_90043622%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdea9d1bbf652ffa9c7007e71e4312f1d8e81eba' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/outputallreports.tpl',
      1 => 1480096036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3860728705847d5c6a1e675_90043622',
  'variables' => 
  array (
    'result1' => 0,
    'row' => 0,
    'result2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5847d5c6b061e8_24002523',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847d5c6b061e8_24002523')) {
function content_5847d5c6b061e8_24002523 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3860728705847d5c6a1e675_90043622';
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