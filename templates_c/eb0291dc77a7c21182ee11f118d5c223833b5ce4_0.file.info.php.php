<?php /* Smarty version 3.1.27, created on 2015-08-06 01:42:29
         compiled from "D:\web\test\info.php" */ ?>
<?php
/*%%SmartyHeaderCode:889555c2bb85acd2f5_30721885%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0291dc77a7c21182ee11f118d5c223833b5ce4' => 
    array (
      0 => 'D:\\web\\test\\info.php',
      1 => 1438744185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '889555c2bb85acd2f5_30721885',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c2bb85b13809_12823278',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c2bb85b13809_12823278')) {
function content_55c2bb85b13809_12823278 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '889555c2bb85acd2f5_30721885';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.10.2.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="//code.jquery.com/ui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <?php echo '<script'; ?>
>
  $(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme",
      "王永慶"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  <?php echo '</script'; ?>
>
</head>
<body>
 
<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>
 
 
</body>
</html><?php }
}
?>