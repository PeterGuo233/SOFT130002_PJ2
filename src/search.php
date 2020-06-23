<!DOCTYPE html>

<html lang="zh">

<head>

    <meta charset="UTF-8">

    <title>搜索页</title>

    <link href="../css/search.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">

        function display_alert(){

            alert("alert!")

        }

    </script>

</head>

<body>

<header id="head">

    <nav>

        <h3><a href="index.php">



            </a>

            <div class="div-left">

                <a href="index.php" class="link">首页</a>

                <a href="view.php" class="link">浏览页</a>

                <a href="search.php" class="link" style="color:#7693AD">搜索页</a>

            </div>

        </h3>

    </nav>

    <div class="div-right">

        <h3>

            <ul id="main">

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

    </div>

    </ul>

    </li>

    </ul>

    </h3>

    </div>

</header>

<br>

<br>

<br>

<br>

<br>



<div class="main-top">

    <div class="search-area">

        <h4 class="search-title">搜索</h4>

        <form method="get" action="php/searchback.php">

            <input type="radio" name="search-radio" value="bytitle" checked>标题筛选<br>

            <div class="search-line">

                <input type="text" class="search-text" name="title-text">

            </div>

            <input type="radio" name="search-radio" value="bydescription">描述筛选<br>

            <div class="search-line">

                <textarea class="search-textarea" name="description-text"></textarea>

            </div>

            <input type="submit" id="search-submit" value="筛选">

        </form>

    </div>

</div>



<div class="main-bottom">

    <div class="filter">

        <h4 class="search-title">结果</h4>

        <div class="filter-show">

            <?php

            if(isset($_SESSION['search-rs'])){

                $result = $_SESSION['search-rs'];

                foreach ($result as $r){

                    echo "<div class=\"list-show\">

          <a href=\"details.php?imageID={$r["ImageID"]}\">

            <div class=\"list-image\" style='background: url(../img/travel-images/normal/small/{$r["PATH"]})'>

            </div>

          </a>

          <br>

          <label class=\"list-name\">{$r["Title"]}</label>

          <p class=\"list-info\">{$r["Description"]}</p>

        </div>";

                }

            }

            ?>

            <div class="pages">

                < <span class="page">1</span> 2 3 4 5 6 ... 9 >

            </div>

        </div>

    </div>

</div><footer>
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