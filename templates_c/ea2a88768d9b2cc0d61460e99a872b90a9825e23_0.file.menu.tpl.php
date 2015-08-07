<?php /* Smarty version 3.1.27, created on 2015-08-06 01:38:32
         compiled from "D:\web\test\templates\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1190055c2ba988428a5_13245057%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea2a88768d9b2cc0d61460e99a872b90a9825e23' => 
    array (
      0 => 'D:\\web\\test\\templates\\menu.tpl',
      1 => 1437125712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1190055c2ba988428a5_13245057',
  'variables' => 
  array (
    'MenuLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c2ba988a04b2_27634852',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c2ba988a04b2_27634852')) {
function content_55c2ba988a04b2_27634852 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1190055c2ba988428a5_13245057';
?>
<div id="menubar">
  <ul id="mcolor">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['name'] = 'sec1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['MenuLink']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total']);
?>
					<li><a href="./<?php echo $_smarty_tpl->tpl_vars['MenuLink']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['link'];?>
"><font color="#000000"> <?php echo $_smarty_tpl->tpl_vars['MenuLink']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['menu'];?>
 </font></a></li>
			<?php endfor; endif; ?>
	</ul>	
</div>
<?php }
}
?>