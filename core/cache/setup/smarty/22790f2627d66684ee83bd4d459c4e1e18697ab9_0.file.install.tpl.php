<?php
/* Smarty version 4.5.2, created on 2026-02-26 12:10:59
  from 'C:\xampp\htdocs\srilankarentacar.com\setup\templates\install.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_69a02a430dfb04_09466665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22790f2627d66684ee83bd4d459c4e1e18697ab9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\srilankarentacar.com\\setup\\templates\\install.tpl',
      1 => 1743569434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69a02a430dfb04_09466665 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="install" action="?action=install" method="post">
    <div class="setup_body">
        <h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['install_summary'];?>
</h2>
        <p><?php if ($_smarty_tpl->tpl_vars['failed']->value) {
echo $_smarty_tpl->tpl_vars['_lang']->value['errors_occurred'];
} else {
echo $_smarty_tpl->tpl_vars['_lang']->value['install_success'];
}?></p>
        <ul class="checklist">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
            <li class="<?php echo $_smarty_tpl->tpl_vars['result']->value['class'];?>
 finalsuccess"> <?php echo $_smarty_tpl->tpl_vars['result']->value['msg'];?>
 </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <div class="setup_navbar">
        <?php if ($_smarty_tpl->tpl_vars['failed']->value) {?>
            <input type="button" onclick="MODx.go('install');" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['retry'];?>
 &#xf021;" id="modx-next" class="button">
            <input type="button" onclick="MODx.go('summary');" value="&#xf053; <?php echo $_smarty_tpl->tpl_vars['_lang']->value['back'];?>
" id="modx-back" class="button">
        <?php } else { ?>
            <input type="submit" id="modx-next" class="button" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['next'];?>
 &#xf054;" autofocus="autofocus">
        <?php }?>
    </div>
</form>
<?php }
}
