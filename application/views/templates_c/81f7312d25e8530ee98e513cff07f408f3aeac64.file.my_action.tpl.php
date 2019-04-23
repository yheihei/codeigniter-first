<?php /* Smarty version Smarty-3.1.7, created on 2019-04-23 15:39:32
         compiled from "../application/views/templates/my_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12423614205cbeb0a438ae00-60883173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81f7312d25e8530ee98e513cff07f408f3aeac64' => 
    array (
      0 => '../application/views/templates/my_action.tpl',
      1 => 1556001569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12423614205cbeb0a438ae00-60883173',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cbeb0a44229e',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbeb0a44229e')) {function content_5cbeb0a44229e($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Smarty連携</title>
</head>
<body>
<h1>Smarty連携</h1>

<div id="container">
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<br>
ホゲホゲ
</div>
</body>
</html><?php }} ?>