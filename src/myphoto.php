<!DOCTYPE html>
< lang="gy">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>我的照片</title>
    <link href="../css/myphoto.css" rel="stylesheet" type="text/css">

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

        <h4 class="search-title">我的照片</h4>

        <div class="filter-show">

            <?php

            $UID = $_SESSION['UID'];

            require_once('php/detailsget.php');

            $myPhoto = getMyPhoto($UID);

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

            <div class=\"list-image\" style='background: url(../img/travel-images/normal/small/{$row["PATH"]})'>

            </div>

          </a>

          <br>

          <label class=\"list-name\">{$row["Title"]}</label>

          <p class=\"list-info\">{$row["Description"]}</p>

          <a href=\"upload.php?imageID=$imageID\"><input type=\"submit\" value=\"修改\" class=\"modify\"></a>

          <input type=\"submit\" value=\"删除\" class=\"modify\" onclick=\"location.href='php/myphotodelete.php?imageID=$imageID&UID={$_SESSION['UID']}'\">

        </div>";
                        }
                    }
                }
            }
            if($isExisted == 0){
                echo "<div class=\"list-show\">
          <br>
          <label class=\"list-name\">您还没有上传照片，赶紧点击个人中心的上传按钮增加一张吧！</label>
        </div>";
            }
            ?>
            <div class="pages">
                < <span class="page">1</span> 2 3 4 5 6 ... 9 >
            </div>
        </div>
    </div>
</div>
</body>
