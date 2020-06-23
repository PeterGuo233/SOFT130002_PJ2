
<!DOCTYPE html>

<html lang="zh">

<head>

    <meta charset="UTF-8">

    <title>上传</title>

    <link href="../css/upload.css" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="../js/upload.js"></script>

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



<?php

if(isset($_GET['imageID'])){

    $imageID = $_GET['imageID'];

    require_once('php/detailsget.php');

    $row = getImageInfo($imageID);

    echo "<div class=\"main-top\">

    <div class=\"search-area\">

      <h4 class=\"search-title\">上传</h4>

      <form method=\"get\" enctype=\"multipart/form-data\" id=\"file_upload\" action=\"php/modify.php\">

        <input type=\"hidden\" name=\"imgID\" value=$imageID>

        <div class=\"file-img\">

          <div class=\"file-block\">

            <input type=\"hidden\" id=\"img_url\" name=\"img-url\" value=\"\">

            <img src=\"../img/travel-images/medium/{$row["PATH"]}\" alt=\"图片未上传\" id=\"img_id\" class=\"img-block\"><br>

            <input type=\"file\" onchange=\"showImg()\" id=\"img_file\" required>

  				</div>

        </div>

        <p id=\"test-file-info\"></p>

        <p>图片标题：</p>

        <div class=\"search-line\">

          <input type=\"text\" class=\"search-text\" name=\"title-text\" value='{$row["Title"]}' required>

        </div>

        <p>图片描述：</p>

        <div class=\"search-line\">

          <textarea class=\"search-textarea\" name=\"description-text\" required>{$row["Description"]}</textarea>

        </div>

          <p>主题：</p>

              <select class=\"select\" name=\"title\">

                  <option value=\"title\">主题</option>

                  <option value=\"title1\" selected>Scenery</option>

                  <option value=\"title2\">City</option>

                  <option value=\"title3\">People</option>

                  <option value=\"title4\">Animal</option>

                  <option value=\"title5\">Building</option>

                  <option value=\"title6\">Wonder</option>

                  <option value=\"title7\">Other</option>

              </select>

        <p>拍摄国家：</p>

            <select name=\"country\" class=\"select\" onChange=\"set_city(this, this.form.city);\">

                <option value=\"0\">国家</option>

                <option value=\"CA\">Canada</option>

                <option value=\"GR\">Greece</option>

                <option value=\"IT\">Italy</option>

                <option value=\"US\">United States</option>

            </select>

        <p>拍摄城市：</p>

            <select name=\"city\" class=\"select\" id=\"citys\">

                <option value=\"0\">选择城市</option>

            </select>

        <br>

        <input type=\"submit\" id=\"search-submit\">

      </form>

    </div>

  </div>";

}

else{

    echo "<div class=\"main-top\">

    <div class=\"search-area\">

      <h4 class=\"search-title\">上传</h4>

      <form method=\"get\" enctype=\"multipart/form-data\" id=\"file_upload\" action=\"php/uploading.php\">

        <div class=\"file-img\">

          <div class=\"file-block\">

            <input type=\"hidden\" id=\"img_url\" name=\"img-url\" value=\"\">

            <img src=\"\" alt=\"图片未上传\" id=\"img_id\" class=\"img-block\"><br>

            <input type=\"file\" onchange=\"showImg()\" id=\"img_file\" required>

  				</div>

        </div>

        <p id=\"test-file-info\"></p>

        <p>图片标题：</p>

        <div class=\"search-line\">

          <input type=\"text\" class=\"search-text\" name=\"title-text\" required>

        </div>

        <p>图片描述：</p>

        <div class=\"search-line\">

          <textarea class=\"search-textarea\" name=\"description-text\" required></textarea>

        </div>

          <p>主题：</p>

              <select class=\"select\" name=\"title\">

                  <option value=\"title\">主题</option>

                  <option value=\"title1\">Scenery</option>

                  <option value=\"title2\">City</option>

                  <option value=\"title3\">People</option>

                  <option value=\"title4\">Animal</option>

                  <option value=\"title5\">Building</option>

                  <option value=\"title6\">Wonder</option>

                  <option value=\"title7\">Other</option>

              </select>

        <p>拍摄国家：</p>

            <select name=\"country\" class=\"select\" onChange=\"set_city(this, this.form.city);\">

                <option value=\"0\">国家</option>

                <option value=\"CA\">Canada</option>

                <option value=\"GR\">Greece</option>

                <option value=\"IT\">Italy</option>

                <option value=\"US\">United States</option>

            </select>

        <p>拍摄城市：</p>

            <select name=\"city\" class=\"select\" id=\"citys\">

                <option value=\"0\">选择城市</option>

            </select>

        <br>

        <input type=\"submit\" id=\"search-submit\">

      </form>

    </div>

  </div>";

}

?>

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


</div>
</body>
</html>