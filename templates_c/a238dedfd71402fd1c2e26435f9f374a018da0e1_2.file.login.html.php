<?php
/* Smarty version 3.1.29, created on 2016-04-23 15:59:36
  from "E:\xampp\htdocs\schoolNet\application\views\user\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571b7fc8b80179_98220835',
  'file_dependency' => 
  array (
    'a238dedfd71402fd1c2e26435f9f374a018da0e1' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\user\\login.html',
      1 => 1461165970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/boot_base.html' => 1,
  ),
),false)) {
function content_571b7fc8b80179_98220835 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_22854571b7fc8b64bf1_88683938',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_1799571b7fc8b6c8f0_41711721',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_20532571b7fc8b7c2f3_94791250',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/boot_base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:user/login.html */
function block_22854571b7fc8b64bf1_88683938($_smarty_tpl, $_blockParentStack) {
?>

<div class="login-form-wrap" ng-controller="LoginController" >
    <h2 class="login-form-heading">请登陆</h2>
    <label for="inputEmail" class="sr-only">用户名</label>
    <input type="text" id="inputEmail" ng-model="user.name"
           ng-class="{'login-form-error-input' : (nameError)}"
           class="form-control login-form-input" placeholder="请填写用户名/邮箱" autofocus="">
    <label for="inputPassword" class="sr-only">密码</label>
    <input type="password" id="inputPassword" ng-model="user.password"
           ng-class="{'login-form-error-input' : (passwordError)}"
           class="form-control login-form-input" placeholder="请填写密码">
    <div class="checkbox login-form-checkbox">
        <label>
            <input type="checkbox" value="remember-me"> 记住我
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" ng-click="login()">登陆</button>
</div>
<?php
}
/* {/block 'main'} */
/* {block 'css'}  file:user/login.html */
function block_1799571b7fc8b6c8f0_41711721($_smarty_tpl, $_blockParentStack) {
?>

<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/css/user/login.css" rel="stylesheet">
<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:user/login.html */
function block_20532571b7fc8b7c2f3_94791250($_smarty_tpl, $_blockParentStack) {
?>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/user/login.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'js'} */
}
