<?php /* Smarty version 3.1.27, created on 2016-12-06 19:37:54
         compiled from "/srv/www/htdocs/smarty/templates/addreportform.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13783441875847139296de82_99350651%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89e607b631e9d09e579e8cc99f18a20ea1ce9cd0' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/addreportform.tpl',
      1 => 1481052763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13783441875847139296de82_99350651',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58471392a6f0e3_50365172',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58471392a6f0e3_50365172')) {
function content_58471392a6f0e3_50365172 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13783441875847139296de82_99350651';
?>

        <!-- Form for adding new report -->
        <div class="content">
            <h2>Форма для подання повідомлення</h2>
            <?php echo '<script'; ?>
>
              function validate_form() {
                if (addreportform.name.value=="") {
                    addreportform.name.focus();
                    alert ("Enter your name");
                    return false;
                }
                if (addreportform.name.value.length<3) {
                    addreportform.name.focus();
                    alert ("Minimal name length is 3 symbolls!");
                    return false;
                }
                if (addreportform.name.value.length>10) {
                    addreportform.name.focus();
                    alert ("Maximal name length is 10 symbolls!");
                    return false;
                }
              }
            <?php echo '</script'; ?>
>
            <form name="addreportform" method="post" onsubmit="return validate_form()" 
                action="index.php?controller=index&action=addreport";>
                
                Name: <input type="text" name="name" onclick="validate_name()">
                <br><br>
                Title: <input type="text" name="title">
                <br><br>
                Report: <textarea name="content" rows="5" cols="30"></textarea>
                <br><br> 
                <input type="submit" name="submit" value="Submit">  
            </form>
        
        </div>

                
                <!-- 
                    //NAME='$_POST[name]', TITLE='$_POST[title]', 
                    //CONTENT='$_POST[content]', DATE='$dt', COMNUM=0, LAST_COMMENT_DATE='0000-00-00 00:00:00'";
                -->

  


 
<?php }
}
?>