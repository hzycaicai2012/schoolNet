<?php
/* Smarty version 3.1.29, created on 2016-04-20 16:42:22
  from "E:\xampp\htdocs\schoolNet\application\views\user\test.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5717954e856d58_30426737',
  'file_dependency' => 
  array (
    '893ecc37b2d73c4adc5fa943cfb34665c5ed24ec' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\user\\test.html',
      1 => 1461162549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/boot_base.html' => 1,
  ),
),false)) {
function content_5717954e856d58_30426737 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_209415717954e852ed5_21761944',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/boot_base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:user/test.html */
function block_209415717954e852ed5_21761944($_smarty_tpl, $_blockParentStack) {
?>

<p>test block</p>
<?php
}
/* {/block 'main'} */
}