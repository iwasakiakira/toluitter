@extends('layouts.header')

    

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex" />
    <title>SAMPLE COMPANY | Bootstrap Template Site #001</title>


    
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="css/app.css">
    <!--Font Awesome5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- AniCollection.css library -->
    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">

    <!--自作CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        <!--
        /* ここに調整CSS記述 */
        -->
    </style>
</head>
<body>
<!-- 動画背景 -->
<div class="jumbotron jumbotron-fluid mb-0 wrap" id="header">
    <!-- 背景用の動画ファイル -->
    <video id="bg-video" autoplay loop muted poster="images/main.jpg">
        <source src="video/sample.mp4" />
    </video>
    <!-- 背景の上に表示させたいコンテンツ -->
    <div class="container">
        <h1 class="display-4" data-anijs="if: scroll, on:window, do: bounce animated, before: scrollReveal">JAMP</h1>
        <p class="lead" data-anijs="if: scroll, on:window, do: shake animated, before: scrollReveal">Friendship / effort / victory</p>
        <!--<a class="btn btn-secondary btn-lg" href="https://laraweb.net/" target="_blank" role="button" data-anijs="if: scroll, on:window, do: fadeInUp animated, before: scrollReveal">もっと学ぼう</a>-->
    </div>
</div><!-- /.jumbotron -->

<header class="sticky-top">
    <nav class="navbar navbar-expand-md navbar-light bg-primary">
        <!-- ロゴ -->
        <a class="navbar-brand text-white" href="#">Sample Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="ナビゲーションの切替">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-header">
            <!-- nav-item 左寄せ -->
            <!-- この下の行に mr-auto クラスを付与するだけ -->
            <ul class="navbar-nav mr-auto">　
                <li class="nav-item"><a class="nav-link active text-white js-smooth-scroll" href="#header"><i class="fas fa-home mr-1"></i></i>TOP</a></li>
                <li class="nav-item"><a class="nav-link text-white js-smooth-scroll" href="#sec01"><i class="fas fa-braille mr-1"></i>VISION</a></li>
                <li class="nav-item"><a class="nav-link text-white js-smooth-scroll" href="#sec02"><i class="fas fa-comments mr-1"></i>MESSAGE</a></li>
                <li class="nav-item"><a class="nav-link text-white js-smooth-scroll" href="#sec03"><i class="fab fa-servicestack mr-1"></i></i>SERVICE</a></li>
                <li class="nav-item"><a class="nav-link text-white js-smooth-scroll" href="#sec04"><i class="fas fa-history mr-1"></i>STORY</a></li>
                <li class="nav-item"><a class="nav-link text-white js-smooth-scroll" href="#sec05"><i class="fas fa-user mr-1"></i>PROFILE</a></li>
            </ul>
            <!-- nav-item 右寄せ -->
            <ul class="navbar-nav nav nav-pills">
                <!--<li class="nav-item"><a class="nav-link active text-white" href="#"><i class="far fa-envelope mr-1"></i>お問い合わせ</a></li>-->
            </ul>
        </div>
    </nav>
</header>

<!-- VISION -->
<section id="sec01">
    <div class="container">
        <h2 class="mt-3" data-anijs="if: scroll, on:window, do: flipInX animated, before: scrollReveal">VISION</h2>
        <p data-anijs="if: scroll, on:window, do: flipInY animated, before: scrollReveal">
            ちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいうには及ばないはずである。上にいったようなことがらについては、曖昧あいまいな態度をとり、または真実でない知識を強いて注入していたことも、明かな事実である。
        </p>
    </div><!-- /.container -->
</section>
<!-- // VISION -->

<!-- MESSAGE -->
<section id="sec02">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-sm-12" data-anijs="if: scroll, on:window, do: fadeInLeft animated, before: scrollReveal">
                <img class="img-fluid" src="images/sec02_01.jpg">
            </div>
            <div class="col-md-6 col-sm-12 p-5" data-anijs="if: scroll, on:window, do: fadeInRight animated, before: scrollReveal">
                <h2>MESSAGE</h2>
                <p>ちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいうには及ばないはずである。上にいったようなことがらについては、曖昧あいまいな態度をとり、または真実でない知識を強いて注入していたことも、明かな事実である。</p>
            </div>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-md-6 col-sm-12" data-anijs="if: scroll, on:window, do: fadeInRight animated, before: scrollReveal">
                <img class="img-fluid" src="images/sec02_02.jpg">
            </div>
            <div class="col-md-6 col-sm-12 p-5" data-anijs="if: scroll, on:window, do: fadeInLeft animated, before: scrollReveal">
                <h2>MESSAGE</h2>
                <p>ちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
            </div>
        </div>
    </div><!-- /.container -->
</section>
<!-- // MESSAGE -->

<!-- MESSAGE -->
<section id="sec03"  data-anijs="if: scroll, on:window, do: fadeInUp animated, before: scrollReveal">
    <div class="container">
        <h2>SERVICE</h2>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card mb-4">
                    <img class="card-img-top" src="images/sec03_01.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">機密性</h4>
                        <p class="card-text">科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
                        <div class="text-center"><a href="#" class="btn btn-primary">Read More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card mb-4">
                    <img class="card-img-top" src="images/sec03_02.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">完全性</h4>
                        <p class="card-text">日本歴史の科学的研究ということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば意義であるならば。</p>
                        <div class="text-center"><a href="#" class="btn btn-primary">Read More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card mb-4">
                    <img class="card-img-top" src="images/sec03_03.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">可用性</h4>
                        <p class="card-text">科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
                        <div class="text-center"><a href="#" class="btn btn-primary">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section>
<!-- // MESSAGE -->

<!-- STORY -->
<section class="mb-5" id="sec04" data-parallax="scroll" data-image-src="images/processed_main.png">
    <div class="container" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal">
        <h2 class="text-white">STORY</h2>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                科学的研究というのが近代史学の学問的方法によるちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれている。研究という意義であるならば、研究という意義であるならばこれは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいうには及ばないはずである。
            </div>
            <div class="col-md-6 col-sm-12">
                ちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれているということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいうには及ばないはずである。
            </div>
        </div>
    </div><!-- /.container -->
</section>
<!-- // STORY -->

<!-- PROFILE -->
<section id="sec05">
    <div class="container mb-0">
        <h2>PROFILE</h2>
        <div class="row">
            <div class="col-md-6 col-sm-12" data-anijs="if: scroll, on:window, do: zoomInLeft animated, before: scrollReveal">
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">社名</th>
                        <td>Sample Company</td>
                    </tr>
                    <tr>
                        <th scope="row">代表取締役</th>
                        <td>見本 太郎</td>
                    </tr>
                    <tr>
                        <th scope="row">住所</th>
                        <td>見本県見本市仮区見本町1-3-5</td>
                    </tr>
                    <tr>
                        <th scope="row">電話番号</th>
                        <td>01234-567-8901</td>
                    </tr>
                    <tr>
                        <th scope="row">設立</th>
                        <td>20XX年5月5日</td>
                    </tr>
                    <tr>
                        <th scope="row">資本金</th>
                        <td>1,000,000円</td>
                    </tr>
                    <tr>
                        <th scope="row">主な取引先</th>
                        <td>
                            本商事株式会社<br>
                            株式会社年中無休商事<br>
                            株式会社仮称
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 col-sm-12" data-anijs="if: scroll, on:window, do: zoomInRight animated, before: scrollReveal">
                <!-- GOOGLE MAP -->
                <div id="map">
                    <iframe src="http://maps.google.co.jp/maps?&output=embed&q=京都駅"></iframe>
                </div>
                <!-- // GOOGLE MAP -->
            </div>
        </div>
    </div>
</section>
<!-- // PROFILE -->

<!-- フッタ -->
<footer class="footer">
    <div class="container mb-0">
        <div class="text-white text-center" data-anijs="if: scroll, on:window, do: fadeInUp animated, before: scrollReveal">
            Copyright(c) 20XX Sample Inc. All Rights Reserved. Design by <a href="https://laraweb.net/surrounding_knowledge/boostrap4/" target="_blank">https://laraweb.net</a><!-- ←クレジット表記を外す場合はシリアルキーが必要です https://laraweb.net/surrounding_knowledge/boostrap4/ -->
        </div>
    </div><!-- /.container -->
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- AniJS core library -->
<script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script>
<!-- ScrollReveal Helper-->
<script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>
<!-- Parallax library -->
<script src="js/parallax.min.js"></script>
<!-- スムーズスクロール部分の記述 -->
<script src="js/smoothscroll.js"></script>

<!--シェアボタン　各自「AddThis」にアクセスしてご自分のシェアボタンを作成してください。-->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d91a99854086150"></script>
<script>
    // iPad だけ.wrapの高さを変更する
    $(function () {
        var ua = navigator.userAgent;
        if (ua.indexOf('iPad') > 0) {
            $(".wrap").addClass("height-changed");
        }
    })
</script>
</body>
</html>
