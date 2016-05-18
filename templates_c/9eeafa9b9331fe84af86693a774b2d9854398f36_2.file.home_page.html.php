<?php
/* Smarty version 3.1.29, created on 2016-05-01 18:58:54
  from "E:\xampp\htdocs\schoolNet\application\views\user\home_page.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572635ce6a6956_00955926',
  'file_dependency' => 
  array (
    '9eeafa9b9331fe84af86693a774b2d9854398f36' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\user\\home_page.html',
      1 => 1461507578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/boot_base.html' => 1,
  ),
),false)) {
function content_572635ce6a6956_00955926 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_11086572635ce6548c8_47566068',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_25711572635ce69add4_28625806',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_17788572635ce6a2ad1_29446380',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/boot_base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:user/home_page.html */
function block_11086572635ce6548c8_47566068($_smarty_tpl, $_blockParentStack) {
?>

<div class="row user-info-wrap">
</div>
<div class="row" ng-controller="HomePageController" ng-init="init(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
)" ng-cloak>
    <div class="col-sm-8 blog-main">
        <?php if ($_smarty_tpl->tpl_vars['is_me']->value == 1) {?>
        <div class="publish-area-wrap">
            <textarea class="form-control publish-area-textarea"
                      ng-model="publishArticle.content" rows="3"></textarea>
            <div class="publish-area-controls">
                <div class="ui-button" ng-click="changeArticleType(1)"
                     ng-class="{'ui-active-button' : (publishArticle.type == 1)}">校内公开</div>
                <div class="ui-button" ng-click="changeArticleType(2)"
                     ng-class="{'ui-active-button' : (publishArticle.type == 2)}">院内公开</div>
                <div class="ui-button" ng-click="changeArticleType(3)"
                     ng-class="{'ui-active-button' : (publishArticle.type == 3)}">班内公开</div>
                <div class="textarea-tips">还可输入{{1000-publishArticle.content.length}}字</div>
            </div>
            <div class="publish-area-submit clearfix">
                <div type="button" ng-click="submitMessage()"
                     class="btn btn-success publish-area-submit-btn">发布</div>
            </div>
        </div>
        <?php }?>
        <div class="article-list-wrap">
            <div class="article-list-item-wrap" ng-repeat="article in articleList track by $index">
                <div class="article-list-item-head clearfix">
                    <div class="article-user-avatar">
                        <img ng-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
{{userInfo.avatar}}" width="50" title="冷兔">
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
user/homePage/id/{comment.user_id}"
                           target="_blank" class="article-comment-avatar">
                            <img ng-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
{{comment.avatar}}" class="user-avatar">
                        </a>
                        <div class="article-comment-item">
                            <p class="article-comment-item-info clearfix">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/homePage/id/{comment.user_id}"
                                   class="user-name" target="_blank" ng-bind="comment.user_name"></a>
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
                            <input type="text" class="form-control comment-text-input"
                                   placeholder="输入回复" ng-model="article.userComment.content">
                            <button type="submit" class="btn btn-primary"
                                    ng-disabled="article.userComment == null || article.userComment.content == ''"
                                    ng-click="submitResponse(article)">回复</button>
                        </div>
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
/* {block 'css'}  file:user/home_page.html */
function block_25711572635ce69add4_28625806($_smarty_tpl, $_blockParentStack) {
?>

<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/css/user/home_page.css" rel="stylesheet">
<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:user/home_page.html */
function block_17788572635ce6a2ad1_29446380($_smarty_tpl, $_blockParentStack) {
?>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/user/home_page.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'js'} */
}
