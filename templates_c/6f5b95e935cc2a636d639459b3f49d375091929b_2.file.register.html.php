<?php
/* Smarty version 3.1.29, created on 2016-04-22 08:48:09
  from "E:\xampp\htdocs\schoolNet\application\views\user\register.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5719c929af3261_08957465',
  'file_dependency' => 
  array (
    '6f5b95e935cc2a636d639459b3f49d375091929b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\user\\register.html',
      1 => 1461307686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/boot_base.html' => 1,
  ),
),false)) {
function content_5719c929af3261_08957465 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_115105719c929ae3861_42460023',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_186795719c929aeb562_81796643',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_8685719c929aef3e9_94919878',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/boot_base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:user/register.html */
function block_115105719c929ae3861_42460023($_smarty_tpl, $_blockParentStack) {
?>

<div class="login-form-wrap" ng-controller="LoginController" >
    <h3 class="login-form-heading">请填写如下信息</h3>
    <label for="inputEmail" class="sr-only">用户名</label>
    <input type="text" id="inputEmail" ng-model="user.name"
           ng-class="{'login-form-error-input' : (nameError)}"
           class="form-control login-form-input" placeholder="请填写用户名/邮箱" autofocus="">
    <label for="inputPassword" class="sr-only">密码</label>
    <input type="password" id="inputPassword1" ng-model="user.password"
           ng-class="{'login-form-error-input' : (passwordError)}"
           class="form-control login-form-input" placeholder="请填写密码">
    <label for="inputPassword" class="sr-only">密码</label>
    <input type="password" id="inputPassword" ng-model="user.password"
           ng-class="{'login-form-error-input' : (passwordError)}"
           class="form-control login-form-input" placeholder="请填写密码">
    <button class="btn btn-lg btn-primary btn-block" ng-click="login()">注册</button>
</div>
<?php
}
/* {/block 'main'} */
/* {block 'css'}  file:user/register.html */
function block_186795719c929aeb562_81796643($_smarty_tpl, $_blockParentStack) {
?>

<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/css/user/login.css" rel="stylesheet">
<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:user/register.html */
function block_8685719c929aef3e9_94919878($_smarty_tpl, $_blockParentStack) {
?>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/user/register.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'js'} */
}
