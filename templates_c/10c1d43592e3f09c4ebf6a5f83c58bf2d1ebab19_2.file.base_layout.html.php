<?php
/* Smarty version 3.1.29, created on 2016-04-20 14:48:01
  from "E:\xampp\htdocs\schoolNet\application\views\layout\base_layout.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57177a81a70422_88635019',
  'file_dependency' => 
  array (
    '10c1d43592e3f09c4ebf6a5f83c58bf2d1ebab19' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\layout\\base_layout.html',
      1 => 1461156474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/base.html' => 1,
  ),
),false)) {
function content_57177a81a70422_88635019 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "body", array (
  0 => 'block_2187157177a81a60a25_54028358',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_2637357177a81a68720_00338641',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_495457177a81a6c5a6_08962756',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>



<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:layout/base_layout.html */
function block_2521257177a81a648a4_56080548($_smarty_tpl, $_blockParentStack) {
?>

    <?php
}
/* {/block 'main'} */
/* {block 'body'}  file:layout/base_layout.html */
function block_2187157177a81a60a25_54028358($_smarty_tpl, $_blockParentStack) {
?>

<div class="main-header">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8');?>

</div>
<div class="container">
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_2521257177a81a648a4_56080548',
  1 => false,
  3 => 0,
  2 => 0,
), $_blockParentStack);
?>

</div>
<?php
}
/* {/block 'body'} */
/* {block 'css'}  file:layout/base_layout.html */
function block_2637357177a81a68720_00338641($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:layout/base_layout.html */
function block_495457177a81a6c5a6_08962756($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'js'} */
}
