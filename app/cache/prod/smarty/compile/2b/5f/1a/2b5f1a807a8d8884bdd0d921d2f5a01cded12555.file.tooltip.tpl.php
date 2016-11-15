<?php /* Smarty version Smarty-3.1.19, created on 2016-11-15 14:11:01
         compiled from "E:\capc-code-base\prestashop\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31416582aca1df01359-46458810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b5f1a807a8d8884bdd0d921d2f5a01cded12555' => 
    array (
      0 => 'E:\\capc-code-base\\prestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1478145026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31416582aca1df01359-46458810',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582aca1df2c2e3_32347811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582aca1df2c2e3_32347811')) {function content_582aca1df2c2e3_32347811($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
