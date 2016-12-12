<?php /* Smarty version 3.1.27, created on 2016-12-11 20:41:10
         compiled from "/srv/www/htdocs/myblog/templates/outputallreports.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1411847188584db9e6a75da7_56571130%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b70c049b420fa47fdc457c28fbfa8dbde874e297' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/outputallreports.tpl',
      1 => 1481488867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1411847188584db9e6a75da7_56571130',
  'variables' => 
  array (
    'result1' => 0,
    'row' => 0,
    'result2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584db9e6b21e43_83242297',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584db9e6b21e43_83242297')) {
function content_584db9e6b21e43_83242297 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1411847188584db9e6a75da7_56571130';
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
                    Report ID: <?php echo $_smarty_tpl->tpl_vars['row']->value["ID"];?>
 <br>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value["DATE"];?>
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
                    Report ID: <?php echo $_smarty_tpl->tpl_vars['row']->value["ID"];?>
 <br/>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value["DATE"];?>
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
                    
                <br>
            </p>
        </div>
    
<?php }
}
?>