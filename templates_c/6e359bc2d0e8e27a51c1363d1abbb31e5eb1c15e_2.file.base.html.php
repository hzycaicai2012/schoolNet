<?php
/* Smarty version 3.1.29, created on 2016-04-20 14:48:01
  from "E:\xampp\htdocs\schoolNet\application\views\layout\base.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57177a81ab6936_72435492',
  'file_dependency' => 
  array (
    '6e359bc2d0e8e27a51c1363d1abbb31e5eb1c15e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\schoolNet\\application\\views\\layout\\base.html',
      1 => 1461156167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57177a81ab6936_72435492 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\xampp\\htdocs\\schoolNet\\application\\libraries\\smarty3\\plugins\\modifier.date_format.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>校园网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="校园网,人人,校园人人">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <link rel="shortcut icon" href="http://www.baidu.com/favicon.ico">
    <!--[if lte IE 8]>
    <?php echo '<script'; ?>
 src="http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <style>
        [ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-start{clip:rect(0,auto,auto,0);-ms-zoom:1.0001;}.ng-animate-active{clip:rect(-1px,auto,auto,0);-ms-zoom:1;}
    </style>
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_1085657177a81a7bfa2_06220197',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</head>
<body>
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "body", array (
  0 => 'block_2828957177a81a7fe20_19929158',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_285457177a81a83ca3_38910839',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<!--[if lt IE 8]><?php echo '<script'; ?>
 src="http://test.baidu.com/crowdtest/js/json3.min.js"><?php echo '</script'; ?>
><![endif]-->
<!--[if lte IE 8]><?php echo '<script'; ?>
 src="/static/js/test.js"><?php echo '</script'; ?>
><![endif]-->
<?php echo '<script'; ?>
 src="http://apps.bdimg.com/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://passport.baidu.com/passApi/js/uni_login_wrapper.js?cdnversion=<?php echo htmlspecialchars(smarty_modifier_date_format(time(),'%Y%m%d%H%M'), ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://s1.bdstatic.com/r/www/cache/ecom/esl/2-0-2/esl.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_87157177a81ab2ab3_86291047',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</body>
</html><?php }
/* {block 'css'}  file:layout/base.html */
function block_1085657177a81a7bfa2_06220197($_smarty_tpl, $_blockParentStack) {
?>

    <?php
}
/* {/block 'css'} */
/* {block 'body'}  file:layout/base.html */
function block_2828957177a81a7fe20_19929158($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'body'} */
/* {block 'footer'}  file:layout/base.html */
function block_285457177a81a83ca3_38910839($_smarty_tpl, $_blockParentStack) {
?>

<div class="footer-quotes container">
    <hr>
    <span>充满希望的旅途胜过终点的到达</span>
</div>
<div class="footer">
    <div class="footer-icp">
        <p>
            &copy;<?php echo htmlspecialchars(smarty_modifier_date_format(time(),"%Y"), ENT_QUOTES, 'UTF-8');?>
 Baidu
            &nbsp;&nbsp;
            <a href="http://www.baidu.com/duty/">使用百度前必读</a>
            &nbsp;&nbsp;
            <a rel="nofollow" target="_blank" href="http://www.miibeian.gov.cn">京ICP证030173号</a>
        </p>
    </div>
</div>
<?php
}
/* {/block 'footer'} */
/* {block 'js'}  file:layout/base.html */
function block_87157177a81ab2ab3_86291047($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'js'} */
}
