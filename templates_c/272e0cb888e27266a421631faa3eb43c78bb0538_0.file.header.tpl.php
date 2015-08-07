<?php /* Smarty version 3.1.27, created on 2015-08-06 01:38:04
         compiled from "D:\web\test\templates\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:646055c2ba7c133665_66282636%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '272e0cb888e27266a421631faa3eb43c78bb0538' => 
    array (
      0 => 'D:\\web\\test\\templates\\header.tpl',
      1 => 1437123726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '646055c2ba7c133665_66282636',
  'variables' => 
  array (
    'deviceIP' => 0,
    'mytitle' => 0,
    'isMobile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c2ba7c1eb012_24838439',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c2ba7c1eb012_24838439')) {
function content_55c2ba7c1eb012_24838439 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '646055c2ba7c133665_66282636';
?>
<!DOCTYPE html>
<html>
<head>
<?php if (!$_smarty_tpl->tpl_vars['deviceIP']->value) {?>
	<meta http-equiv="refresh" content="5">
<?php }?>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['mytitle']->value;?>
</title>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 10px;
		<?php if ($_smarty_tpl->tpl_vars['isMobile']->value == true) {?>
			font: 13px/20px normal Helvetica, Arial, sans-serif;
		<?php } else { ?>
			font: 13px/20px normal Helvetica, Arial, sans-serif;
		<?php }?>
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		<?php if ($_smarty_tpl->tpl_vars['isMobile']->value == true) {?>
			font-size: 19px;
		<?php } else { ?>
			font-size: 19px;
		<?php }?>
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		<?php if ($_smarty_tpl->tpl_vars['isMobile']->value == true) {?>
			font-size: 12px;
		<?php } else { ?>
			font-size: 12px;
		<?php }?>
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
	code_alarm {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		<?php if ($_smarty_tpl->tpl_vars['isMobile']->value == true) {?>
			font-size: 12px;
		<?php } else { ?>
			font-size: 12px;
		<?php }?>
		background-color: red;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
		-webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
    height: 80px;
	}
	a { text-decoration: none; }

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		<?php if ($_smarty_tpl->tpl_vars['isMobile']->value == true) {?>
			font-size: 11px;
		<?php } else { ?>
			font-size: 11px;
		<?php }?>
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	#menubar
{
	width:900px;
	height: 30px;
	padding-top:5px;
	padding-bottom:5px;
	text-decoration: none;
		<?php if ($_smarty_tpl->tpl_vars['isMobile']->value == true) {?>
			font-size: 11px;
		<?php } else { ?>
			font-size: 11px;
		<?php }?>
}



ul
{
	list-style-type:none;
	margin:auto;
	text-align:left;
	padding-left:50px;
	padding-right:50px;
	
}

li
{
	display:inline;
	padding:10px;
	
}

a:hover
{
	background-color:#ffd640;
}

ul#mcolor li:hover > a
{
	 background-color:#ffd640; <!-- sets all link color when hovering to yellow  -->
}

	
	
	</style>
</head>
<body>
<h1><a href='serviceCenter.php'>Service Center</a></h1>
<?php }
}
?>