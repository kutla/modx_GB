<?php /* Smarty version 3.1.27, created on 2016-12-01 10:48:11
         compiled from "D:\sys\xamp\htdocs\modx\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4463583ff1db64d9f6_12126139%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45db5bfe1905b534ad0f9294139a6d774c63ff95' => 
    array (
      0 => 'D:\\sys\\xamp\\htdocs\\modx\\manager\\templates\\default\\welcome.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4463583ff1db64d9f6_12126139',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583ff1db64d9f9_70026790',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583ff1db64d9f9_70026790')) {
function content_583ff1db64d9f9_70026790 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4463583ff1db64d9f6_12126139';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>