<?php
/* Smarty version 3.1.29, created on 2016-04-25 15:06:03
  from "E:\xampp\htdocs\schoolNet\application\views\home\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571e163b60a7e0_23494202',
  'file_dependency' => 
  array (
    '3ca7cda2b7298710237ee59397fa69697c5611d6' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\home\\index.html',
      1 => 1461507488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/boot_base.html' => 1,
  ),
),false)) {
function content_571e163b60a7e0_23494202 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_8958571e163b5eb3d2_30423889',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_31327571e163b606960_26832175',
  1 => false,
  3 => 0,
  2 => 0,
  'append' => true,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/boot_base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:home/index.html */
function block_8958571e163b5eb3d2_30423889($_smarty_tpl, $_blockParentStack) {
?>

<div class="row" ng-controller="MainController" ng-init="init(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
)" ng-cloak>
    <div class="col-sm-8 blog-main">
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
        <div class="article-list-wrap">
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
/* {block 'js'}  file:home/index.html */
function block_31327571e163b606960_26832175($_smarty_tpl, $_blockParentStack) {
?>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/home/main.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'js'} */
}
