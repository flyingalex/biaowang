<!DOCTYPE html>
<html lang="zh-CN">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>标王 --- 后台管理系统</title>

<link rel="stylesheet" href="/dist/admin/css/common.css">
<link rel="stylesheet" href="/dist/admin/css/pages/login.css">

</head>

<body>

<div class="main">

<div class="login-wrap">
    <div class="login-mask"></div>
    <div action="" class="login-form-wrap">
        <h2 class="logo">
            <img src="/images/logo.png" class="logo-img">
        </h2>
        <form action="/admin/login" method="POST" class="login-form" id="login-form">
            <div class="username-wrap input-wrap">
                <input name="account" type="text" class="username-input input-area" id="username-input" placeholder="用户名"><!--
                --><span class="username-icon-wrap icon-wrap"><!--
                    --><img src="/images/icon/username.png" class="username-icon input-icon"><!--
                --></span>
            </div>
            <div class="password-wrap input-wrap">
                <input name="password" type="password" class="password-input input-area" id="password-input" placeholder="密码"><!--
                --><span class="password-icon-wrap icon-wrap"><!--
                    --><img src="/images/icon/password.png" class="password-icon input-icon"><!--
                --></span>
            </div>
            <div class="captcha-wrap input-wrap">
                <label class="captcha-label">验证码</label>
                <input name="captcha" type="text" class="captcha-input input-area" id="captcha-input">
                <span class="captcha-content">
                    <img src="/admin/captcha" class="captcha-img">
                </span>
            </div>
            <input type="submit" class="login-confirm input-wrap btn" value="登陆">
        </form>
    </div>
</div>

</div>

<script type="text/javascript" src="/lib/scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/dist/admin/js/pages/login.js"></script>
</body>

</html>