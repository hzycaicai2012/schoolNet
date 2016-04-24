<?php
/* Smarty version 3.1.29, created on 2016-04-24 15:09:36
  from "E:\xampp\htdocs\schoolNet\application\views\admin\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571cc590ba0d63_66500024',
  'file_dependency' => 
  array (
    'fb85e4658c53298f86b86a2c5097c926b189e533' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\admin\\index.html',
      1 => 1461503373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/boot_base.html' => 1,
  ),
),false)) {
function content_571cc590ba0d63_66500024 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_2922571cc590b3f2c3_71105281',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_22619571cc590b951e3_57194933',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_2296571cc590b9cee7_56742424',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/boot_base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:admin/index.html */
function block_2922571cc590b3f2c3_71105281($_smarty_tpl, $_blockParentStack) {
?>

<div class="row" ng-controller="AdminController" ng-init="init()" ng-cloak>
    <div class="col-sm-8 blog-main">
        <div class="admin-operation-head">
            <div class="admin-operation-head-wrap">
                <div class="admin-op-button" ng-click="switchPage('school')"
                     ng-class="{'admin-op-active-button' : (currentPage == 'school')}">添加学校</div>
                <div class="admin-op-button" ng-click="switchPage('college')"
                     ng-class="{'admin-op-active-button' : (currentPage == 'college')}">添加学院</div>
                <div class="admin-op-button" ng-click="switchPage('grade')"
                     ng-class="{'admin-op-active-button' : (currentPage == 'grade')}">添加班级</div>
            </div>
        </div>
        <div class="admin-page-operate-wrap" ng-show="currentPage == 'school'">
            <div class="admin-page-operate-controls clearfix">
                <input type="text" class="form-control" ng-model="schoolName" placeholder="请填写学校名">
                <button type="button" class="btn btn-primary"
                        ng-disabled="schoolName == ''" ng-click="addNewSchool()">提交</button>
            </div>
            <div class="admin-page-operate-content">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>序号</th>
                        <th>校名</th>
                        <th>创建时间</th>
                    </tr>
                    <tr ng-repeat="school in schoolList track by $index">
                        <th scope="row" ng-bind="($index+1)"></th>
                        <td ng-bind="school.name"></td>
                        <td ng-bind="school.created"></td>
                    </tr>
                </table>
            </div>
            <div class="article-list-item-wrap" ng-repeat="article in articleList track by $index">
                <div class="article-list-item-head clearfix">
                    <div class="article-user-avatar">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{{article.article.user_id}}" target="_blank">
                            <img ng-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
{{article.article.avatar}}"
                                 width="50" title="{{article.article.user_name}}">
                        </a>
                    </div>
                    <div class="article-user-info-wrap">
                        <div class="article-user-name" ng-bind="article.article.user_name">
                        </div>
                        <div class="article-create-info"
                             ng-bind="article.article.type_name + ' | ' + article.article.created">
                        </div>
                    </div>
                </div>
                <div class="article-list-item" ng-bind="article.article.content">
                </div>
                <div class="article-comment-list-wrap">
                    <div class="article-comment-list-item-wrap clearfix"  ng-repeat="comment in article.comment">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{{comment.user_id}}"
                           target="_blank" class="article-comment-avatar">
                            <img ng-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
{{comment.avatar}}" class="user-avatar">
                        </a>
                        <div class="article-comment-item">
                            <p class="article-comment-item-info clearfix">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{{comment.user_id}}"
                                   target="_blank" class="user-name" target="_blank" ng-bind="comment.user_name"></a>
                                <span class="article-comment-item-time" ng-bind="comment.created"></span>
                            </p>
                            <div class="article-comment-item-content"
                                 ng-click="replyComment(comment.user_id, comment.user_name, article.userComment)">
                                {{comment.content}}
                            </div>
                        </div>
                    </div>
                    <div class="article-comment-list-item-wrap clearfix">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                           target="_blank" class="article-comment-avatar">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['avatar'], ENT_QUOTES, 'UTF-8');?>
" class="user-avatar">
                        </a>
                        <div class="article-comment-item clearfix">
                            <input type="text" class="form-control comment-text-input" placeholder="输入回复"
                                   ng-model="article.userComment.content">
                            <button type="submit" class="btn btn-primary"
                                    ng-disabled="article.userComment == null || article.userComment == ''"
                                    ng-click="submitResponse(article)">回复</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="admin-page-operate-wrap" ng-show="currentPage == 'college'">
            <div class="admin-page-operate-controls clearfix">
                <select class="form-control"
                        ng-model="currentSchool" ng-change="schoolChange(currentSchool)"
                        ng-options="school.name for school in schoolList track by school.id">
                </select>
                <input type="text" class="form-control" ng-model="collegeName" placeholder="请填写学院名">
                <button type="button" class="btn btn-primary"
                        ng-disabled="collegeName == '' || currentSchool == null"
                        ng-click="addNewCollege()">提交</button>
            </div>
            <div class="admin-page-operate-content" ng-show="schoolList.length > 0">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>序号</th>
                        <th>校名</th>
                        <th>学院名</th>
                        <th>创建时间</th>
                    </tr>
                    <tr ng-repeat="college in collegeList track by $index">
                        <th scope="row" ng-bind="($index+1)"></th>
                        <td ng-bind="currentSchool.name"></td>
                        <td ng-bind="college.name"></td>
                        <td ng-bind="college.created"></td>
                    </tr>
                </table>
            </div>
            <div class="article-list-item-wrap" ng-repeat="article in articleList track by $index">
                <div class="article-list-item-head clearfix">
                    <div class="article-user-avatar">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{{article.article.user_id}}" target="_blank">
                            <img ng-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
{{article.article.avatar}}"
                                 width="50" title="{{article.article.user_name}}">
                        </a>
                    </div>
                    <div class="article-user-info-wrap">
                        <div class="article-user-name" ng-bind="article.article.user_name">
                        </div>
                        <div class="article-create-info"
                             ng-bind="article.article.type_name + ' | ' + article.article.created">
                        </div>
                    </div>
                </div>
                <div class="article-list-item" ng-bind="article.article.content">
                </div>
                <div class="article-comment-list-wrap">
                    <div class="article-comment-list-item-wrap clearfix"  ng-repeat="comment in article.comment">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{{comment.user_id}}"
                           target="_blank" class="article-comment-avatar">
                            <img ng-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
{{comment.avatar}}" class="user-avatar">
                        </a>
                        <div class="article-comment-item">
                            <p class="article-comment-item-info clearfix">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{{comment.user_id}}"
                                   target="_blank" class="user-name" target="_blank" ng-bind="comment.user_name"></a>
                                <span class="article-comment-item-time" ng-bind="comment.created"></span>
                            </p>
                            <div class="article-comment-item-content"
                                 ng-click="replyComment(comment.user_id, comment.user_name, article.userComment)">
                                {{comment.content}}
                            </div>
                        </div>
                    </div>
                    <div class="article-comment-list-item-wrap clearfix">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                           target="_blank" class="article-comment-avatar">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['avatar'], ENT_QUOTES, 'UTF-8');?>
" class="user-avatar">
                        </a>
                        <div class="article-comment-item clearfix">
                            <input type="text" class="form-control comment-text-input" placeholder="输入回复"
                                   ng-model="article.userComment.content">
                            <button type="submit" class="btn btn-primary"
                                    ng-disabled="article.userComment == null || article.userComment == ''"
                                    ng-click="submitResponse(article)">回复</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="admin-page-operate-wrap" ng-show="currentPage == 'grade'">
            <div class="admin-page-operate-controls clearfix">
                <select class="form-control"
                        ng-model="currentSchool" ng-change="schoolChange()"
                        ng-options="school.name for school in schoolList track by school.id">
                </select>
                <select class="form-control"
                        ng-model="currentCollege" ng-change="collegeChange()"
                        ng-options="college.name for college in collegeList track by college.id">
                </select>
                <input type="text" class="form-control" ng-model="gradeName" placeholder="请填写班级名">
                <button type="button" class="btn btn-primary"
                        ng-disabled="gradeName == '' || currentSchool == null || currentCollege == null"
                        ng-click="addNewGrade()">提交</button>
            </div>
            <div class="admin-page-operate-content" ng-show="schoolList.length > 0">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>序号</th>
                        <th>校名</th>
                        <th>学院名</th>
                        <th>班级名</th>
                        <th>创建时间</th>
                    </tr>
                    <tr ng-repeat="grade in gradeList track by $index">
                        <th scope="row" ng-bind="($index+1)"></th>
                        <td ng-bind="currentSchool.name"></td>
                        <td ng-bind="currentCollege.name"></td>
                        <td ng-bind="grade.name"></td>
                        <td ng-bind="grade.created"></td>
                    </tr>
                </table>
            </div>
            <div class="article-list-item-wrap" ng-repeat="article in articleList track by $index">
                <div class="article-list-item-head clearfix">
                    <div class="article-user-avatar">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{{article.article.user_id}}" target="_blank">
                            <img ng-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
{{article.article.avatar}}"
                                 width="50" title="{{article.article.user_name}}">
                        </a>
                    </div>
                    <div class="article-user-info-wrap">
                        <div class="article-user-name" ng-bind="article.article.user_name">
                        </div>
                        <div class="article-create-info"
                             ng-bind="article.article.type_name + ' | ' + article.article.created">
                        </div>
                    </div>
                </div>
                <div class="article-list-item" ng-bind="article.article.content">
                </div>
                <div class="article-comment-list-wrap">
                    <div class="article-comment-list-item-wrap clearfix"  ng-repeat="comment in article.comment">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{{comment.user_id}}"
                           target="_blank" class="article-comment-avatar">
                            <img ng-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
{{comment.avatar}}" class="user-avatar">
                        </a>
                        <div class="article-comment-item">
                            <p class="article-comment-item-info clearfix">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{{comment.user_id}}"
                                   target="_blank" class="user-name" target="_blank" ng-bind="comment.user_name"></a>
                                <span class="article-comment-item-time" ng-bind="comment.created"></span>
                            </p>
                            <div class="article-comment-item-content"
                                 ng-click="replyComment(comment.user_id, comment.user_name, article.userComment)">
                                {{comment.content}}
                            </div>
                        </div>
                    </div>
                    <div class="article-comment-list-item-wrap clearfix">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                           target="_blank" class="article-comment-avatar">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['avatar'], ENT_QUOTES, 'UTF-8');?>
" class="user-avatar">
                        </a>
                        <div class="article-comment-item clearfix">
                            <input type="text" class="form-control comment-text-input" placeholder="输入回复"
                                   ng-model="article.userComment.content">
                            <button type="submit" class="btn btn-primary"
                                    ng-disabled="article.userComment == null || article.userComment == ''"
                                    ng-click="submitResponse(article)">回复</button>
                        </div>
                    </div>
                </div>
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
/* {block 'css'}  file:admin/index.html */
function block_22619571cc590b951e3_57194933($_smarty_tpl, $_blockParentStack) {
?>

<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/css/admin/admin.css" rel="stylesheet">
<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:admin/index.html */
function block_2296571cc590b9cee7_56742424($_smarty_tpl, $_blockParentStack) {
?>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/admin/admin.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'js'} */
}
