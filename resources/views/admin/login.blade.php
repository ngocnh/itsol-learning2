<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Themes Lab - Creative Laborator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description"/>
    <meta content="themes-lab" name="author"/>
    <link rel="shortcut icon" href="resources/assets/images/favicon.png">
    <link href="{!! url('resources/assets/css/style.css') !!}" rel="stylesheet">
    <link href="{!! url('resources/assets/css/ui.css') !!}" rel="stylesheet">
    <link href="{!! url('resources/assets/plugins/bootstrap-loading/lada.min.css') !!}" rel="stylesheet">
</head>
<body class="account2" data-page="login">
<div class="container" id="login-block">
    <i class="user-img icons-faces-users-03"></i>
    <div class="account-info">
        <a href="dashboard.html" class="logo"></a>
        <h3>Modular &amp; Flexible Admin.</h3>
        <ul>
            <li><i class="icon-magic-wand"></i> Fully customizable</li>
            <li><i class="icon-layers"></i> Various sibebars look</li>
            <li><i class="icon-arrow-right"></i> RTL direction support</li>
            <li><i class="icon-drop"></i> Colors options</li>
        </ul>
    </div>
    <div class="account-form">
        <form class="form-signin" role="form" method="post" action="{!! route('postLogin') !!}">
            <h3><strong>Sign in</strong> to your account</h3>
            <div class="append-icon">
                <input type="email" name="email" id="email" class="form-control form-white username"
                       placeholder="Username" required
                value="{!! old('email') !!}">
                <i class="icon-user"></i>
            </div>
            <div class="append-icon m-b-20">
                <input type="password" name="password" class="form-control form-white password" placeholder="Password"
                       required
                value="{!! old('password') !!}">
                <i class="icon-lock"></i>
            </div>
            <button type="submit" id="submit-form" class="btn btn-lg btn-dark btn-rounded ladda-button"
                    data-style="expand-left">Sign In
            </button>
            <span class="forgot-password"><a id="password" href="account-forgot-password.html">Forgot
                    password?</a></span>
        </form>
    </div>
</div>
</body>
</html>