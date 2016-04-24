<?php
/* Smarty version 3.1.29, created on 2016-04-24 14:49:40
  from "E:\xampp\htdocs\schoolNet\application\views\user\register.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571cc0e47690f1_62698962',
  'file_dependency' => 
  array (
    '6f5b95e935cc2a636d639459b3f49d375091929b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\user\\register.html',
      1 => 1461317309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/boot_base.html' => 1,
  ),
),false)) {
function content_571cc0e47690f1_62698962 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_1518571cc0e4749ce1_45496640',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_14991571cc0e47596f1_56515428',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_12572571cc0e4765279_75512454',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/boot_base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:user/register.html */
function block_1518571cc0e4749ce1_45496640($_smarty_tpl, $_blockParentStack) {
?>

<div class="login-form-wrap" ng-controller="RegisterController" ng-init="init()">
    <h3 class="login-form-heading">请填写如下信息</h3>
    <label for="inputNick" class="sr-only">用户名</label>
    <input type="text" id="inputNick" ng-model="user.nick"
           ng-class="{'login-form-error-input' : (errorTips.nick)}"
           class="form-control login-form-input" placeholder="给自己选个昵称吧~" autofocus="">
    <label for="inputEmail" class="sr-only">邮箱</label>
    <input type="text" id="inputEmail" ng-model="user.email"
           ng-class="{'login-form-error-input' : (errorTips.email)}"
           class="form-control login-form-input" placeholder="请填写邮箱" autofocus="">
    <label for="inputName" class="sr-only">姓名</label>
    <input type="text" id="inputName" ng-model="user.name"
           ng-class="{'login-form-error-input' : (errorTips.name)}"
           class="form-control login-form-input" placeholder="请填写真实姓名~" autofocus="">
    <label for="inputPassword" class="sr-only">密码</label>
    <input type="password" id="inputPassword" ng-model="user.password"
           ng-class="{'login-form-error-input' : (errorTips.password)}"
           class="form-control login-form-input" placeholder="请填写密码">
    <label for="confirmPassword" class="sr-only">确认密码</label>
    <input type="password" id="confirmPassword" ng-model="user.confirm_password"
           ng-class="{'login-form-error-input' : (errorTips.confirm_password)}"
           class="form-control login-form-input" placeholder="请确认密码">
    <label for="inputPhone" class="sr-only">电话</label>
    <input type="text" id="inputPhone" ng-model="user.phone"
           ng-class="{'login-form-error-input' : (errorTips.phone)}"
           class="form-control login-form-input" placeholder="请填写电话~" autofocus="">
    <label for="inputSchool" class="sr-only">学校</label>
    <select class="form-control login-form-input"
            ng-class="{'login-form-error-input' : (errorTips.school)}"
            id="inputSchool" ng-change="schoolChange(user.school)"
            ng-model="user.school" ng-options="school.name for school in schoolList track by school.id">
    </select>
    <label for="inputCollege" class="sr-only">学院</label>
    <select class="form-control login-form-input"
            ng-class="{'login-form-error-input' : (errorTips.college)}"
            id="inputCollege" ng-change="collegeChange(user.college)"
            ng-model="user.college" ng-options="college.name for college in collegeList track by college.id">
    </select>
    <label for="inputGrade" class="sr-only">班级</label>
    <select class="form-control login-form-input" id="inputGrade"
            ng-class="{'login-form-error-input' : (errorTips.grade)}"
            ng-model="user.grade" ng-options="grade.name for grade in gradeList track by grade.id">
    </select>
    <button class="btn btn-lg btn-primary btn-block" ng-click="register()">注册</button>
</div>
<?php
}
/* {/block 'main'} */
/* {block 'css'}  file:user/register.html */
function block_14991571cc0e47596f1_56515428($_smarty_tpl, $_blockParentStack) {
?>

<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/css/user/login.css" rel="stylesheet">
<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:user/register.html */
function block_12572571cc0e4765279_75512454($_smarty_tpl, $_blockParentStack) {
?>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/user/register.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'js'} */
}
