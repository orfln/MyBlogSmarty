<?php /* Smarty version 3.1.27, created on 2016-11-08 17:19:07
         compiled from "/srv/www/htdocs/smarty/templates/selector.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2370061475822090b709b86_96433035%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2866766b0f22647fd41328c6daa9d4f4fce60370' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/selector.tpl',
      1 => 1478625542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2370061475822090b709b86_96433035',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5822090b74c512_12328153',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5822090b74c512_12328153')) {
function content_5822090b74c512_12328153 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2370061475822090b709b86_96433035';
?>
<! DOCTYPE html>
<html>
<body>

<select id="selectid" onchange="setColorCookie()">
      <option value="red">Red</option>
      <option value="green">Green</option>
      <option value="blue">Blue</option>
</select>

<?php echo '<script'; ?>
 type="text/javascript">

 window.onload=function(){
  if (document.cookie.length!=0) {
    var nameArray=document.cookie.split("=");
    document.bgColor=nameArray[1];
    document.getElementById("selectid").value=nameArray[1];
  }
}

function setColorCookie(){
  var setColor=document.getElementById("selectid").value;
  document.bgColor=setColor;
  document.cookie="color="+setColor+";expires=Fri, 5 Aug 01:00:00 UTC;";
};

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>