<?php
/* Smarty version 3.1.29, created on 2016-04-20 17:32:25
  from "E:\xampp\htdocs\schoolNet\application\views\layout\boot_base.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5717a109803dd4_22576657',
  'file_dependency' => 
  array (
    'a9ee1a64e80a130c66952f5d6c8e8cd185268048' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\layout\\boot_base.html',
      1 => 1461166342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5717a109803dd4_22576657 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="校园网,人人,校园人人">
    <meta name="description" content="校园网，让我们离开校园后还能常联系~">
    <meta name="author" content="hzycaicai">
    <link rel="shortcut icon" href="http://www.baidu.com/favicon.ico">
    <title><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '校园网' : $tmp), ENT_QUOTES, 'UTF-8');?>
</title>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/css/libs/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/css/main.css" rel="stylesheet">
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_217305717a1097d1152_94597046',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/libs/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/libs/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body ng-app="SchoolNet">
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "body", array (
  0 => 'block_124035717a1097d4fd4_55748418',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/libs/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/libs/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/libs/angular.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/home/basis.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
static/js/libs/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var baseUrl = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
";
<?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_238545717a1097fff51_46642265',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</body>
</html><?php }
/* {block 'css'}  file:layout/boot_base.html */
function block_217305717a1097d1152_94597046($_smarty_tpl, $_blockParentStack) {
?>

    <?php
}
/* {/block 'css'} */
/* {block 'header'}  file:layout/boot_base.html */
function block_233445717a1097d8e55_06338816($_smarty_tpl, $_blockParentStack) {
?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
home">校园网</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
home">首页</a>
                </li>
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
my/relate">与我相关</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">我关注的<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
my/school">我的学校</a></li>
                        <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
my/college">我的班级</a></li>
                        <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
my/grade">我的班级</a></li>
                        <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
my/friend">特别好友</a></li>
                    </ul>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['isAdmin']) {?>
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
admin">管理后台</a></li>
                <?php }?>
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
about">关于</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if ($_smarty_tpl->tpl_vars['user']->value == null) {?>
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/login">登陆</a></li>
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/register">注册</a></li>
                <?php } else { ?>
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
my/index"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BASE_URL']->value, ENT_QUOTES, 'UTF-8');?>
user/logout">退出</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>
<?php
}
/* {/block 'header'} */
/* {block 'main'}  file:layout/boot_base.html */
function block_91295717a1097f8256_03022064($_smarty_tpl, $_blockParentStack) {
?>

    <?php
}
/* {/block 'main'} */
/* {block 'body'}  file:layout/boot_base.html */
function block_124035717a1097d4fd4_55748418($_smarty_tpl, $_blockParentStack) {
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_233445717a1097d8e55_06338816',
  1 => false,
  3 => 0,
  2 => 0,
), $_blockParentStack);
?>

<div class="container">
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main", array (
  0 => 'block_91295717a1097f8256_03022064',
  1 => false,
  3 => 0,
  2 => 0,
), $_blockParentStack);
?>

</div>
<?php
}
/* {/block 'body'} */
/* {block 'js'}  file:layout/boot_base.html */
function block_238545717a1097fff51_46642265($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'js'} */
}