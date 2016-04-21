<?php
/* Smarty version 3.1.29, created on 2016-04-20 16:55:06
  from "E:\xampp\htdocs\schoolNet\application\views\home\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5717984a6c7311_10593804',
  'file_dependency' => 
  array (
    '3ca7cda2b7298710237ee59397fa69697c5611d6' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\home\\index.html',
      1 => 1461163515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/boot_base.html' => 1,
  ),
),false)) {
function content_5717984a6c7311_10593804 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_291175717984a6c7316_65606558',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/boot_base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:home/index.html */
function block_291175717984a6c7316_65606558($_smarty_tpl, $_blockParentStack) {
?>

<p>这是主页</p>
<?php
}
/* {/block 'main'} */
}
