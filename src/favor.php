<!DOCTYPE html>

<html lang="zh">

<head>

    <meta charset="UTF-8">

    <title>我的收藏</title>

    <link href="css/favor.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">

        function display_alert(){

            alert("alert!")

        }

    </script>

</head>

<body>

<header id="head">

    <nav>

        <h3><a href="../index.php">

                <img src="../img/icons/logo.jpg" class="logo">

            </a>

            <div class="div-left">

                <a href="../index.php" class="link">首页</a>

                <a href="browse.php" class="link">浏览页</a>

                <a href="search.php" class="link">搜索页</a>

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



<div class="main-bottom">

    <div class="filter">

        <h4 class="search-title">我的收藏</h4>

        <div class="filter-show">

            <?php

            $UID = $_SESSION['UID'];

            require_once('php/detailsget.php');

            $myPhoto = getMyFavor($UID);

            $isExisted = 0;

            foreach ($myPhoto as $imageID){

                require_once('php/favorcount.php');

                $ia = getImageArray();

                if ($ia->num_rows > 0) {

                    while ($row = $ia->fetch_assoc()) {

                        if ($row["ImageID"] == $imageID) {

                            $isExisted = 1;

                            echo "<div class=\"list-show\">

          <a href=\"details.php?imageID={$row["ImageID"]}\">

            <div class=\"list-image\" style='background: url(../img/travel-images/small/{$row["PATH"]})'>

            </div>

          </a>

          <br>

          <label class=\"list-name\">{$row["Title"]}</label>

          <p class=\"list-info\">{$row["Description"]}</p>

          <input type=\"submit\" value=\"删除\" class=\"modify\" onclick=\"location.href='php/myfavordelete.php?imageID=$imageID&UID={$_SESSION['UID']}'\">

        </div>";

                        }

                    }

                }

            }

            if($isExisted == 0){

                echo "<div class=\"list-show\">

          

          <br>

          <label class=\"list-name\">您还没有收藏照片，赶紧点击收藏按钮增加一张吧！</label>

        </div>";

            }

            ?>

            <div class="pages">

                < <span class="page">1</span> 2 3 4 5 6 ... 9 >

            </div>

        </div>

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