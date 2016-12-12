<?php /* Smarty version 3.1.27, created on 2016-12-08 16:01:46
         compiled from "/srv/www/htdocs/myblog/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:964299077584983ea6767c3_71181144%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2597faf35ea81364fd1a125b30a4a70f367cc5d7' => 
    array (
      0 => '/srv/www/htdocs/myblog/templates/header.tpl',
      1 => 1481212902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '964299077584983ea6767c3_71181144',
  'variables' => 
  array (
    'body_id' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584983ea769b84_58385832',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584983ea769b84_58385832')) {
function content_584983ea769b84_58385832 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '964299077584983ea6767c3_71181144';
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
        <?php echo '<script'; ?>
 type="text/javascript" src="../jquery/jquery-3.1.1.min.js" charset="utf-8"><?php echo '</script'; ?>
>

        <?php $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable('Мій перший блог', null, 0);?>
        
    </head>
    
    <body id=<?php echo $_smarty_tpl->tpl_vars['body_id']->value;?>
>
        <div class="pageContainer">

        <div class="logo">
            
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
      
      <?php echo '<script'; ?>
>
        $(window).resize(function() {
          var height = $("nav").height()+$(".logo").height();
            $("#ml").css("top",height);
            $(".content").css("top",height);
        });
        $(document).ready(function() {
          var height = $("nav").height()+$(".logo").height();
            $("#ml").css("top",height);
            $(".content").css("top",height);
        });
      <?php echo '</script'; ?>
>
        
    
<?php }
}
?>