<?php
    $name = isset($_POST["name"])? $_POST["name"] : "";
    $name = isset($_POST["kana"])? $_POST["kana"] : "";
    $email = isset($_POST["email"])? $_POST["email"] : "";
    $name = isset($_POST["number"])? $_POST["number"] : "";
    $message = isset($_POST["message"])? $_POST["message"] : "";
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
	<link rel="icon" type="image/png" href="../images/favicon.png">
	<!--css-->
    <link rel="stylesheet" href="../css/sanitize.css">
	  <link rel="stylesheet" href="../css/style_contact.css">
    </head>
    <body>
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
            <div class="faq-contents">
                <div class="title-line">
                    <h2 class="sub-title"> よくあるご質問</h2>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-grid">
                        <div class="faq-li">
                            <a href="#" class="faq-display">
                                    <div class="faq-icon">
                                    <img src="../images/right_arrow.svg" alt="faq_icon">
                                </div>
                                <div class="faq-text">
                                    <p>商品の購入について</p>
                                </div>
                            </a>
                        </div>
                        <div class="faq-li">
                            <a href="#" class="faq-display">
                                <div class="faq-icon">
                                    <img src="../images/right_arrow.svg" alt="faq_icon">
                                </div>
                                <div class="faq-text">  
                                    <p>施設・店舗</p>
                                </div>
                            </a>
                        </div>
                        <div class="faq-li">
                            <a href="#" class="faq-display">
                                <div class="faq-icon">
                                    <img src="../images/right_arrow.svg" alt="faq_icon">
                                </div>
                                <div class="faq-text">
                                    <P>製品の取り扱い</P>
                                </div>
                            </a>
                        </div>
                        <div class="faq-li">
                            <a href="#" class="faq-display">
                                <div class="faq-icon">
                                    <img src="../images/right_arrow.svg" alt="faq_icon">
                                </div>
                                <div class="faq-text">
                                    <p>商品の返品交換</p>
                                </div>
                            </a>
                        </div>
                        <div class="faq-li">
                            <a href="#" class="faq-display">
                                <div class="faq-icon">
                                    <img src="../images/right_arrow.svg" alt="faq_icon">
                                </div>
                                <div class="faq-text">
                                    <p>修理・メンテナンス</p>
                                </div>
                            </a>
                        </div>
                        <div class="faq-li">
                            <a href="#" class="faq-display">
                                <div class="faq-icon">
                                    <img src="../images/right_arrow.svg" alt="faq_icon">
                                </div>
                                <div class="faq-text">
                                    <p>その他</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont-contents">
                <div class="title-line">
                    <h2 class="sub-title">お問い合わせ</h2>
                </div>
                <div class="cont-form">
                    <form action="complete.php" method="post">

                    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
                    <input type="hidden" name="kana" value="<?php echo htmlspecialchars($kana,ENT_QUOTES,"UTF-8"); ?>">
                    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?>">
                    <input type="hidden" name="number" value="<?php echo htmlspecialchars($number,ENT_QUOTES,"UTF-8"); ?>">
                    <input type="hidden" name="message" value="<?php echo htmlspecialchars($message,ENT_QUOTES,"UTF-8"); ?>">

                        <div>
                            <div class="cont-li">
                                <div class="cont-li-tit">お名前（漢字）<p class="annotation">※</p></div>
                                <div class="cont-dd"><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?></div>
                            </div>
                            <div class="cont-li">
                                <div class="cont-li-tit">お名前（かな）<p class="annotation">※</p></div>
                                <div class="cont-dd"><?php echo htmlspecialchars($kana,ENT_QUOTES,"UTF-8"); ?> </div>
                            </div>
                            <div class="cont-li">
                                <div class="cont-li-tit">メールアドレス<p class="annotation">※</p></div>
                                <div class="cont-dd"><?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?> </div>
                            </div>
                            <div class="cont-li">
                                <div class="cont-li-tit">電話番号</div>
                                <div class="cont-dd"><?php echo htmlspecialchars($number,ENT_QUOTES,"UTF-8"); ?> </div>
                            </div>
                            <div class="cont-li">
                                <div class="cont-li-tit">お問い合わせ内容<p class="annotation">※</p></div>
                                <div class="cont-dd"><?php echo htmlspecialchars($message,ENT_QUOTES,"UTF-8"); ?></div>
                            </div>
                        </div>
                        
                        <input type="button" value="戻る" class="cont-btn" onClick="history.back()">
                        <input type="submit" value="送信" class="cont-btn">
                    </form>
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
