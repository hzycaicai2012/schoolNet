<?php
/* Smarty version 3.1.29, created on 2016-04-25 15:10:11
  from "E:\xampp\htdocs\schoolNet\application\views\user\message_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571e173382bb52_06616058',
  'file_dependency' => 
  array (
    '65f3b72c35fa374f9e10a9c044d8434258512234' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\user\\message_list.html',
      1 => 1461465342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/boot_base.html' => 1,
  ),
),false)) {
function content_571e173382bb52_06616058 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_14671571e17338182e7_64323151',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_10460571e1733827ce6_94993593',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_7653571e173382bb57_57640811',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/boot_base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:user/message_list.html */
function block_14671571e17338182e7_64323151($_smarty_tpl, $_blockParentStack) {
?>

<div class="row" ng-controller="MessageController" ng-init="init()" ng-cloak>
    <div class="col-sm-8 blog-main">
        <div class="article-list-wrap">
            <div class="row article-list-item-wrap clearfix" ng-repeat="message in messageList track by $index">
                <div class="message-list-item-head clearfix">
                    <div class="col-sm-9 message-list-item-title">
                        {{message.status_name}}：{{message.title}}
                    </div>
                    <div ng-show="message.show_status == 0" ng-click="showMessage(message)"
                         class="col-sm-3 message-list-item-control">
                        展开详情
                    </div>
                    <div ng-show="message.show_status == 1"  ng-click="showMessage(message)"
                         class="col-sm-3 message-list-item-control">
                        收起详情
                    </div>
                </div>
                <div class="message-list-item-content-wrap clearfix"
                     ng-show="message.show_status == 1">
                    <div class="col-sm-9 message-list-item-content">
                        {{message.content}}
                    </div>
                </div>
            </div>
            <div class="article-empty" ng-show="articleList.length == 0">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/img/home/empty.gif">
                <p>啥都没有呢~</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <div class="user-info-avatar-wrap">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{{userInfo.id}}" target="_blank">
                        <img ng-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
{{userInfo.avatar}}">
                    </a>
                </div>
                <div class="user-info-block" style="margin-top: 10px;">
                    <div class="user-info-name">昵称：<span class="user-info-nick">{{userInfo.nick}}</span></div>
                    <div class="user-info-name">姓名：{{userInfo.name}}</div>
                    <div class="user-info-name">学校：{{userInfo.school_name}}</div>
                    <div class="user-info-name">学院：{{userInfo.college_name}}</div>
                    <div class="user-info-name">班级：{{userInfo.grade_name}}</div>
                    <div class="user-info-name" ng-if="userInfo.email != ''">邮箱：{{userInfo.email}}</div>
                </div>
                <div class="user-info-controls">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
/* {/block 'main'} */
/* {block 'css'}  file:user/message_list.html */
function block_10460571e1733827ce6_94993593($_smarty_tpl, $_blockParentStack) {
?>

<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/css/user/message.css" rel="stylesheet">
<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:user/message_list.html */
function block_7653571e173382bb57_57640811($_smarty_tpl, $_blockParentStack) {
?>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/user/message.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'js'} */
}
