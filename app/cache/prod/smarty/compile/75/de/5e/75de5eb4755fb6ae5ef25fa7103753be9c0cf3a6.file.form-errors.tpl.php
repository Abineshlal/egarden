<?php /* Smarty version Smarty-3.1.19, created on 2016-11-15 14:11:11
         compiled from "E:\capc-code-base\prestashop\themes\classic\templates\_partials\form-errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12057582aca27cffca9-09553717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75de5eb4755fb6ae5ef25fa7103753be9c0cf3a6' => 
    array (
      0 => 'E:\\capc-code-base\\prestashop\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1478144744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12057582aca27cffca9-09553717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582aca27d42335_63608443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582aca27d42335_63608443')) {function content_582aca27d42335_63608443($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
