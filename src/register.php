<html>

<head>
    <meta charset="utf8">
    <title>注册账号</title>
    <link href="../css/register.css" rel="stylesheet" type="text/css">

</head>
<body>
<h1>创建帐户</h1>
<script>
    function validate() {
        var pw1 = document.getElementById("pw1").value;
        var pw2 = document.getElementById("pw2").value;
        if(pw1 == pw2) {
            document.getElementById("tishi").innerHTML="<font color='green'>两次密码相同</font>";
            document.getElementById("submit").disabled = false;
        }
        else {
            document.getElementById("tishi").innerHTML="<font color='red'>两次密码不相同</font>";
            document.getElementById("submit").disabled = true;
        }
    }
</script>
<section>
    <form action="./php/reg.php" method="post">

        <p>

            用户名<br>

            <input type="text" name="text" pattern="^[A-Za-z0-9_]+$" required>

        </p>

        <p>

            请设置密码<br>

            <input type="password" name="password" id="pw1">

        </p>

        <p>

            请确认密码<br>

            <input type="password" name="password" id="pw2" onkeyup="validate()">
            <span id="tishi"></span>

        </p>

        <p>

            您的居住地<br>

            <select name="area">

                <option value="zhejiang">浙江</option>

                <option value="shanghai" selected>上海</option>

                <option value="beijing">北京</option>

                <option value="jiangsu">江苏</option>

                <option value="sichuan">四川</option>

                <option value="taiwan">台湾</option>
<option value="others">其他地方</option>

</select>

</p>

<p>

    您的手机号<br>

    <input type="tel" name="telephone" pattern="^1[0-9]{10}$" required>

</p>



<p>

    您的常用设备<br>

    <input type="checkbox" name="android" value="android">安卓手机

    <input type="checkbox" name="iphone" value="iphone" selected>iPhone

    <input type="checkbox" name="windows" value="windows">Windows

    <input type="checkbox" name="mac" value="mac">Mac

</p>

<p>

    请输入验证码<br>

    residue of 1/(z^2+4)^2 at z=2i<br>

    <input type="text" name="captcha">

    <input type="button" value="刷新">

</p>
<p>

    <input type="submit" value="注册" name="continue" onclick="location.href='login.php'">

</p>
</div>

<h5><a href="login.php">登录</a></h5>

</div>
</form>

</section>
<footer>
    <div class="col">
        <p><a>使用条款</a></p>
        <p><a>隐私保护</a></p>
        <p><a>Cookie</a></p>
    </div>

    <div class="col">
        <p><a>关于</a></p>
        <p><a>联系我们</a></p>
    </div>
    <div class="col">
        <div>

        </div>
    </div>
    <div class="col"></div>
    <div class="copyright">
        <p><a>Copyright © 2019-2021 SOFT130002 PJ1. All Rights Reserved. 备案号：Guoyuanyu19302010031</a></p>
    </div>
</footer>
</body>

</html>