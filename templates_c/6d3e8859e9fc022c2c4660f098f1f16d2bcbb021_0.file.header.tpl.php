<?php /* Smarty version 3.1.27, created on 2016-11-26 08:20:41
         compiled from "/srv/www/htdocs/smarty/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1879805301583945d9412943_14378549%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d3e8859e9fc022c2c4660f098f1f16d2bcbb021' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/header.tpl',
      1 => 1480148437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1879805301583945d9412943_14378549',
  'variables' => 
  array (
    'body_id' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583945d9525dd5_13982383',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583945d9525dd5_13982383')) {
function content_583945d9525dd5_13982383 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1879805301583945d9412943_14378549';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
   
<!-- <!DOCTYPE html PUBLIC "-//W3S//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> -->

<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"--> 

<!-- <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Blog</title>

        <link href="templates/main.css" rel="stylesheet" type="text/css" />

        <?php $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable('Мій перший блог', null, 0);?>
        
    </head>
    
    <body id=<?php echo $_smarty_tpl->tpl_vars['body_id']->value;?>
>
        <div id="pageContainer">

        <div id="logo">
            
            <?php echo $_smarty_tpl->tpl_vars['logo']->value;?>

        </div>
      <nav>
        <ul>
            <li> <a href="index.php?controller=index&amp;action=index" 
                    class="main-menu" id="item1">Головна</a> </li>
            <li> <a href="index.php?controller=index&amp;action=showallreports" 
                    class="main-menu" id="item2">Всі повідомлення</a> </li>
            <li> <a href="index.php?controller=index&amp;action=newreportform" 
                    class="main-menu" id="item3">Написати повідомлення</a> </li>
        </ul>
      </nav>    
        
    
<?php }
}
?>