<?php /* Smarty version 3.1.27, created on 2016-12-26 15:34:14
         compiled from "D:\sys\xamp\htdocs\modx\manager\templates\default\element\chunk\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:488958612a664010d0_27006663%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85baf9ba7eb59553ae54bfdbdba11ceca6cdb1cc' => 
    array (
      0 => 'D:\\sys\\xamp\\htdocs\\modx\\manager\\templates\\default\\element\\chunk\\update.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '488958612a664010d0_27006663',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58612a66404f52_10952128',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58612a66404f52_10952128')) {
function content_58612a66404f52_10952128 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '488958612a664010d0_27006663';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>