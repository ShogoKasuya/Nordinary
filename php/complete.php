<?php
    mb_language("japanese");
    mb_internal_encoding("UTF-8");

    $to = 'eatalot0613@gmail.com';
    $subject = "任意の件名";
    $header = "From: 任意の送信元メールアドレス";
    $header .= "\n";
    $header .= "Bcc: 任意のBccメールアドレス";
    $message = "以下の通りにお問い合わせがありました。"."\n"."\n".
    "お名前（漢字）｜".$_POST["name"]."\n".
    "お名前（かな）｜".$_POST["kana"]."\n".
    "メールアドレス｜".$_POST["email"]."\n".
    "電話番号｜".$_POST["number"]."\n".
    "お問い合わせ内容｜".$_POST["message"];

    mb_send_mail($to, $subject, $message, $header);
?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex">
<title>Nordinary</title>
	<meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--ファビコン-->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!--css-->
    <link rel="stylesheet" href="css/sanitize.css">
	  <link rel="stylesheet" href="../css/style_contact.css">
    </head>
    <body>
    <!-- header -->
    <!-- header -->
    <header class="header">
        <div class="wrapper page-header">
        <h1><a href="index.html"><img class="main-logo" src="../images/logo.svg" alt="Nordinary TOPページ"></a></h1>
        <!-- メニューバー -->
        <!-- ここからハンバーガーメニュー -->
        <div class="line-list" id="js-hamburger">
            <span></span>
            <span></span>
        </div>  
        <div class="menu-bg" id="js-menu-bg"></div>
        <!-- ここまでハンバーガーメニュー -->
        <nav class="global-nav">
            <ul class="main-nav link-list">
                <li><a href="#news">NEWS</a></li>
                <li><a href="#item">ITEM</a></li>
                <li><a href="#">ONLINESHOP</a></li>
                <li><a href="event.html">EVENT</a></li>
                <li><a href="shoplist.html">SHOPLIST</a></li>
                <li><a href="#"> COMPANY</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>
    </div>
    </header>
        <!-- top画像 -->
        <div id="shop-list" class="bg-img">
            <div class="page-title">
            <h2 class="ttl">CONTACT</h2>
                <p class="sub-ttl">お問い合わせ</p>
            </div>
        </div>
        <!-- サブタイトル -->
        <div class="wrapper">
            <div class="cont-contents">
                <div class="title-line">
                    <h2 class="sub-title">お問い合わせ</h2>
                </div>
                    <h3>ご記入頂きました情報は送信されました。</h3>
                    <p>お問い合わせありがとうございます。<br>後日、ご入力頂いたメールアドレス宛てに返信をいたします。</p>
                    <div class="cont-back-link">
                        <a href="index.html" class="cont-back-a>トップに戻る"></a>
                    </div>
                </div>
            </div>
        </div>

        
    <!-- footer -->
    <footer>
        <div class="wrapper">
            <div class="page-footer">
            <a href="index.html"><img class="footer-logo" src="../images/logofooter.svg" alt="Nordinary TOPページ"></a>
            <nav>
                <!-- footer差し替え -->
                <div class="footer-nav">
                    <p><a href="header.html">トップ</a></p>
                    <p><a href="shoplist.html">  |  店舗・施設情報</a></p>
                    <p><a href="#">  |  商品紹介</a></p>
                    <p><a href="#">  |  オンラインショップ</a></p>
                    <p><a href="event.html">イベント</a></p>
                    <p><a href="#">  |  企業情報</a></p>
                    <p><a href="#">  |  採用情報</a></p>
                    <p><a href="contact.html">  |  お問い合わせ</a></p>
                    <p><a href="#">プライバシーポリシー</a></p>
                </div>
                <!-- footer差し替え -->
            </nav>
        </div>
            <div class="sns-logo">
                <a href="#"><img src="../images/sns1.png" alt="Facebook"></a>
                <a href="#"><img src="../images/sns2.png" alt="Twitter"></a>
                <a href="#"><img src="../images/sns3.png" alt="Instagram"></a>
            </div>
            <p class="copy-right">© 2021 COPYRIGHT</p>
        
        </div>
    </footer>
    <!-- jquery -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/smooth-scroll.min.js"></script>
    <script src="../https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- ハンバーガーメニュー用 -->
    <script>
        $(function() {
            function toggleNav() {
                var body = document.body;
                var hamburger = document.getElementById("js-hamburger");
                var blackBg = document.getElementById("js-menu-bg");
                // クリックしたときにクラス付与
                hamburger.addEventListener("click", function() {
                body.classList.toggle("nav-open");
                hamburger.classList.toggle("active");
                });
                // クリックしたときにクラス付与
                blackBg.addEventListener("click", function() {
                body.classList.remove("nav-open");
                hamburger.classList.remove("active");
                });
            }
            toggleNav();
        });
      </script>
    </body>
</html>
