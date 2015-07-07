<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/reset.css">
<link type="text/css" rel="stylesheet" href="styles/main.css">
<title>
后台登陆
</title>

</head>
<body>
    <div align="center">
    <h3>管理员登陆</h3>
    <form name="loginform" method="post" action="doLogin.php">
    <ul class="login">
    <li><span>用户名：</span><input type="text" name="username" placeholder="请输入用户名"></li>
     <li><span>密码：</span><input type="password" name="userpass" placeholder="请输入用户密码"></li>
    <li><span>自动登陆：</span><input type="checkbox" id="a1" name="autoLogin" value="1"><label for="a1">自动登陆（一周内自动登陆）</label></li>
    <li><input type="submit" class="login_btn" value=""></li>
    </ul>
    </form>
    </div>
</body>
</html>