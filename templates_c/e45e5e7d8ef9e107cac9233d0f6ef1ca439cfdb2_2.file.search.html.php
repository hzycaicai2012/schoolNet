<?php
/* Smarty version 3.1.29, created on 2016-05-02 15:04:32
  from "E:\xampp\htdocs\schoolNet\application\views\user\search.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572750607e7276_80982757',
  'file_dependency' => 
  array (
    'e45e5e7d8ef9e107cac9233d0f6ef1ca439cfdb2' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\user\\search.html',
      1 => 1462162411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/boot_base.html' => 1,
  ),
),false)) {
function content_572750607e7276_80982757 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_22272572750607cbcf6_70526773',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_15161572750607d7876_00091823',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_17790572750607e33f0_47856454',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/boot_base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:user/search.html */
function block_22272572750607cbcf6_70526773($_smarty_tpl, $_blockParentStack) {
?>

<div class="row" ng-controller="SearchController" ng-init="init()" ng-cloak>
    <div class="col-sm-8 blog-main">
        <div class="admin-page-operate-wrap">
            <div class="admin-page-operate-controls clearfix">
                <select class="form-control"
                        ng-model="currentSchool" ng-change="schoolChange()"
                        ng-options="school.name for school in schoolList track by school.id">
                </select>
                <select class="form-control"
                        ng-model="currentCollege" ng-change="collegeChange()"
                        ng-options="college.name for college in collegeList track by college.id">
                </select>
                <select class="form-control"
                        ng-model="currentGrade"
                        ng-options="grade.name for grade in gradeList track by grade.id">
                </select>
                <input type="text" class="form-control"
                       ng-change="searchUser()"
                       ng-model="userName" placeholder="请填写用户名">
            </div>
            <div class="admin-page-operate-content" ng-show="userList.length > 0">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>序号</th>
                        <th>昵称</th>
                        <th>姓名</th>
                        <th>学校</th>
                        <th>邮箱</th>
                        <th>操作</th>
                    </tr>
                    <tr ng-repeat="user in userList track by $index">
                        <th scope="row" ng-bind="($index+1)"></th>
                        <td ng-bind="user.nick"></td>
                        <td ng-bind="user.name"></td>
                        <td ng-bind="user.schoolName"></td>
                        <td ng-bind="user.email"></td>
                        <td>添加好友</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>关于</h4>
                <p><b>校园网</b>，致力于让同学们在毕业之后还可以交流互动，可以发布学校、学院或者班级的相关通知，增加大家直接的友谊。</p>
                <p>好吧，我编不下去了~~</p>
            </div>
        </div>
    </div>
</div>
<?php
}
/* {/block 'main'} */
/* {block 'css'}  file:user/search.html */
function block_15161572750607d7876_00091823($_smarty_tpl, $_blockParentStack) {
?>

<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/css/admin/admin.css" rel="stylesheet">
<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:user/search.html */
function block_17790572750607e33f0_47856454($_smarty_tpl, $_blockParentStack) {
?>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/user/search.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'js'} */
}
