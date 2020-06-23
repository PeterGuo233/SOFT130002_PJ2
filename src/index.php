<!DOCTYPE html>
<html lang="gy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">

</head>
<header>
    <nav>
        <h4>
            <div class="topleft">
                <a href="index.php" style="color: #66ccff">首页</a>
                <a href="view.php">浏览</a>
                <a href="search.php" >搜索页</a>
            </div>
        </h4>
    </nav>
    <div class="topright">
        <h4>
            <ul id="personal">
                <?php
                session_start();
                if(isset($_SESSION['user'])) {
                    echo "<li>个人中心
            <ul class=\"drop\">
              <div>
                <li><a href=\"upload.php\">上传</a></li>
                <li><a href=\"myphoto.php\">我的照片</a></li>
                <li><a href=\"favor.php\">我的收藏</a></li>
                <li><a href=\"php/logout.php\">登出</a></li>";
                }
                else
                    echo "<li><a href=\"login.php\">登入</a></li>";
                ?>
            </ul>
        </h4>
    </div>
</header>
<script type="text/javascript">
    function display_alert(){
        alert("Reload!")
    }
    <!--未登录无法进入主页-->
    if(sessionStorage.user !=1){
        alert("请登录您的账号");
        window.location.href = "login.php";
    }

</script>
<div class="main">
    <img src="../img/travel-images/normal/medium/6114904363.jpg" class="main">
</div>

<div class="test-area">
    <div class="list-photo">
        <a href="detail.php">
            <div class="list-image">
            </div>
        </a>
        <label class="list-name">图片一</label>
        <p class="list-info">万千利器莫过于你的信念</p>
    </div>
    <div class="list-photo">
        <a href="detail.html">
            <div class="list-image">
            </div>
        </a>
        <label class="list-name">图片2</label>
        <p class="list-info">梨花香 缠着衣角掠过熙攘 复悄入红帘深帐 听枝头黄鹂逗趣儿 细风绕指淌 坐船舫 兰桨拨开雾霭迷茫 不觉已一日过半 过眼的葱郁风光 悉数泛了黄 </p>
    </div>
    <div class="list-photo">
        <a href="detail.html">
            <div class="list-image">
            </div>
        </a>
        <label class="list-name">图片3</label>
        <p class="list-info">褪尽温度的风 无言牵引中 便清晰了在此的眉目 暮色的消融 隐约了晦朔葱茏 在这老街回眸 烟云中追溯我是谁 只消暮雨点滴 便足以粉饰这是非
            待这月色涌起 谁人轻叩这门扉 苔绿青石板街 斑驳了流水般岁月 小酌三盏两杯 理不清缠绕的情结 在你淡漠眉间 瞥见离人的喜悲霜雪</p>
    </div>
    <div class="list-photo">
        <a href="detail.html">
            <div class="list-image">
            </div>
        </a>
        <label class="list-name">4</label>
        <p class="list-info">⾄每个人都有属于自己的一片森林，迷失的人迷失了，相逢的人会再相逢</p>
    </div>
    <div class="list-photo">
        <a href="detail.html">
            <div class="list-image">
            </div>
        </a>
        <label class="list-name">5</label>
        <p class="list-info">博学而笃志</p>
    </div>
    <div class="list-photo">
        <a href="detail.html">
            <div class="list-image">
            </div>
        </a>
        <label class="list-name">6</label>
        <p class="list-info">切问而近思</p>
    </div>
</div>
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
            <img src="../img/other/wechat.jpg" width="100px">
        </div>
    </div>
    <div class="col"><img src="../img/other/xuenai.jpg" width="100px"></div>
    <div class="copyright">
        <p><a>Copyright © 2019-2021 SOFT130002 PJ1. All Rights Reserved. 备案号：Guoyuanyu19302010031</a></p>
    </div>
</footer>
<div id="totop">
    <a href="#top">
        <img src="../img/other/totop.jpg" width="40px">
    </a>
</div>

<div id="reload" onclick="display_alert()">
    <a>
        <img src="../img/other/reload.jpg" width="40px">
    </a>

</div>
</body>
</html>