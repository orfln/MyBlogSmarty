<?php /* Smarty version 3.1.27, created on 2016-09-11 17:17:49
         compiled from "/srv/www/htdocs/smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:74234907557d591bd586684_10990244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8723d0992006a816736aa252964d40cdefc90027' => 
    array (
      0 => '/srv/www/htdocs/smarty/templates/index.tpl',
      1 => 1473614194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74234907557d591bd586684_10990244',
  'variables' => 
  array (
    'pagetitle' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d591bd5da622_67998128',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d591bd5da622_67998128')) {
function content_57d591bd5da622_67998128 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '74234907557d591bd586684_10990244';
?>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
  </head>
  <body>
    <?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
!
  </body>
</html> 
<?php }
}
?>