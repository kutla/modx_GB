<?php /* Smarty version 3.1.27, created on 2016-12-26 13:46:53
         compiled from "D:\sys\xamp\htdocs\modx\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:97345861113d6f5545_10990879%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf78562fe9f3c2c4ca1c2f8b2a955867d74aa4ec' => 
    array (
      0 => 'D:\\sys\\xamp\\htdocs\\modx\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97345861113d6f5545_10990879',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5861113d704f44_67886454',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5861113d704f44_67886454')) {
function content_5861113d704f44_67886454 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '97345861113d6f5545_10990879';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>