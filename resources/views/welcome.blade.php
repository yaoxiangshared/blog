<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>简历美容院</title>

    <!-- Google fonts -->
    <!--<link href='http://fonts.googleapis.com/css?family=Rthird/oboto:400,300,700' rel='stylesheet' type='text/css'>-->
    <!--<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>-->

    <!-- font awesome -->
    <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="{{ URL::asset('/assets/third/font-awesome/font-awesome.min.css')}}" rel="stylesheet">


    <!-- bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('assets/third/bootstrap/css/bootstrap.min.css')}}" />

    <!-- animate.css -->
    <link rel="stylesheet" href="{{URL::asset('assets/third/animate/animate.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/third/animate/set.css')}}" />

    <!-- gallery -->
    <link rel="stylesheet" href="{{URL::asset('assets/third/gallery/blueimp-gallery.min.css')}}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.jpg')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::asset('assets/images/favicon.jpg')}}" type="image/x-icon">


    <link rel="stylesheet" href="{{URL::asset('assets/welcome/style.css')}}">

</head>

<body>


<div id="home">
    <!-- Slider Starts -->
    <div class="banner">
        <img src="{{URL::asset('assets/images/welcome/back.jpg')}}" alt="banner" class="img-responsive">
        <div class="caption">
            <div class="caption-wrapper">
                <div class="caption-info">
                    <!--<img src="images/profile.jpg" class="img-circle profile">-->
                    <h1 class="animated bounceInUp">生活不止眼前的苟且，还有诗和远方的田野</h1>
                    <p class="animated bounceInLeft">公元前我们太小，公元后我们又太老，没有谁见过，那一次真正美丽的微笑  </p>
                    <div class="animated bounceInDown"><a href="#works" class="btn btn-default explore">快去寻找远方吧</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #Slider Ends -->
</div>


<!-- works -->
<div id="works"  class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{URL::asset('assets/images/welcome/portfolio/1.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>常规简历</h2>
            <p>这里有最通用的简历模板<br>
                <a target="_blank" href="{{route('list',[])}}" title="1" >查看全部</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{URL::asset('assets/images/welcome/portfolio/2.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>表格简历模板</h2>
            <p>简介的表格简历<br>
                <a href="{{URL::asset('assets/images/welcome/portfolio/2.jpg')}}" title="1" data-gallery>查看全部</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{URL::asset('assets/images/welcome/portfolio/3.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>英文简历</h2>
            <p>面试外企必备<br>
                <a href="{{URL::asset('assets/images/welcome/portfolio/3.jpg')}}" title="1" data-gallery>查看全部</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{URL::asset('assets/images/welcome/portfolio/4.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>创意简历模板</h2>
            <p>最快捕获hr的心<br>
                <a href="{{URL::asset('assets/images/welcome/portfolio/4.jpg')}}" title="1" data-gallery>查看全部</a></p>
        </figcaption>
    </figure>

    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{URL::asset('assets/images/welcome/portfolio/5.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>院校简历模板</h2>
            <p>代表你的学校<br>
                <a href="{{URL::asset('assets/images/welcome/portfolio/5.jpg')}}" title="1" data-gallery>查看全部</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{URL::asset('assets/images/welcome/portfolio/6.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>自荐信</h2>
            <p>有效提升面试率<br>
                <a href="{{URL::asset('assets/images/welcome/portfolio/6.jpg')}}" title="1" data-gallery>查看全部</a></p>
        </figcaption>
    </figure>
    <!--<figure class="effect-oscar  wowload fadeInUp">-->
    <!--<img src="images/portfolio/1.jpg" alt="img01"/>-->
    <!--<figcaption>-->
    <!--<h2>Cappuchino</h2>-->
    <!--<p>Lily likes to play with crayons and pencils<br>-->
    <!--<a href="images/portfolio/1.jpg" title="1" data-gallery>View more</a></p>            -->
    <!--</figcaption>-->
    <!--</figure>-->
    <!--<figure class="effect-oscar  wowload fadeInUp">-->
    <!--<img src="images/portfolio/2.jpg" alt="img01"/>-->
    <!--<figcaption>-->
    <!--<h2>Latte</h2>-->
    <!--<p>Lily likes to play with crayons and pencils<br>-->
    <!--<a href="images/portfolio/2.jpg" title="1" data-gallery>View more</a></p>            -->
    <!--</figcaption>-->
    <!--</figure>-->
    <!--<figure class="effect-oscar  wowload fadeInUp">-->
    <!--<img src="images/portfolio/3.jpg" alt="img01"/>-->
    <!--<figcaption>-->
    <!--<h2>Ambience</h2>-->
    <!--<p>Lily likes to play with crayons and pencils<br>-->
    <!--<a href="images/portfolio/3.jpg" title="1" data-gallery>View more</a></p>            -->
    <!--</figcaption>-->
    <!--</figure>-->
    <!--<figure class="effect-oscar  wowload fadeInUp">-->
    <!--<img src="images/portfolio/4.jpg" alt="img01"/>-->
    <!--<figcaption>-->
    <!--<h2>Fruits</h2>-->
    <!--<p>Lily likes to play with crayons and pencils<br>-->
    <!--<a href="images/portfolio/4.jpg" title="1" data-gallery>View more</a></p>            -->
    <!--</figcaption>-->
    <!--</figure>-->
    <!---->
    <!--<figure class="effect-oscar  wowload fadeInUp">-->
    <!--<img src="images/portfolio/5.jpg" alt="img01"/>-->
    <!--<figcaption>-->
    <!--<h2>Breakfast</h2>-->
    <!--<p>Lily likes to play with crayons and pencils<br>-->
    <!--<a href="images/portfolio/5.jpg" title="1" data-gallery>View more</a></p>            -->
    <!--</figcaption>-->
    <!--</figure>-->
    <!--<figure class="effect-oscar  wowload fadeInUp">-->
    <!--<img src="images/portfolio/6.jpg" alt="img01"/>-->
    <!--<figcaption>-->
    <!--<h2>Kitchen</h2>-->
    <!--<p>Lily likes to play with crayons and pencils<br>-->
    <!--<a href="images/portfolio/6.jpg" title="1" data-gallery>View more</a></p>            -->
    <!--</figcaption>-->
    <!--</figure>-->





</div>
<!-- works -->


<div id="testimonials" class="container spacer ">
    <h2 class="text-center  wowload fadeInUp">漂亮的简历让他们找到心仪的工作</h2>
    <div class="clearfix">
        <div class="col-sm-6 col-sm-offset-3">


            <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active animated bounceInRight row">
                        <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="{{URL::asset('assets/images/welcome/team/gao.jpg')}}" width="100" class="img-circle img-responsive"></div>
                        <div  class="col-xs-10">
                            <p> 高晓松（1969年11月14日－），出生于北京，作曲、填词人、音乐制作人、导演、作家以及脱口秀主持人，“校园民谣”的代表人物。 </p>
                            <span>高晓松 - <b>清华大学</b></span>
                        </div>
                    </div>
                    <div class="item  animated bounceInRight row">
                        <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="{{URL::asset('assets/images/welcome/team/mayun.jpg')}}" width="100" class="img-circle img-responsive"></div>
                        <div  class="col-xs-10">
                            <p>马云（英文名：Jack Ma，1964年9月10日－），祖籍浙江省绍兴嵊州市（原嵊县）谷来镇，后父母移居杭州，出生于浙江省杭州市，中国大陆企业家，亚洲首富，现任阿里巴巴集团董事局主席[3]、淘宝网、支付宝的创始人。</p>
                            <span>马云 - <b>杭州师范学院</b></span>
                        </div>
                    </div>
                    <div class="item  animated bounceInRight row">
                        <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="{{URL::asset('assets/images/welcome/team/cai.jpg')}}" width="100" class="img-circle img-responsive"></div>
                        <div  class="col-xs-10">
                            <p>蔡康永（英语：Kevin Tsai，1962年3月1日－），出生于台北，著名的台湾节目主持人及作家。1990年加州大学洛杉矶分校戏剧电影及电视学院编导制作硕士毕业。</p>
                            <span>蔡康永 - <b>美国加州大学洛杉矶分校</b></span>
                        </div>
                    </div>
                </div>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                </ol>
                <!-- Indicators -->
            </div>



        </div>
    </div>



</div>

















<!-- Footer Starts -->
<div class="footer text-center spacer">
    <p class="wowload flipInX"><a href="javascript:void 0"><i class="fa fa-wechat fa-2x"></i></a> <a href="javascript:void 0"><i class="fa fa-weibo fa-2x"></i></a> <a href="javascript:void 0"><i class="fa fa-qq fa-2x"></i></a> <a href="javascript:void 0"><i class="fa fa-tencent-weibo fa-2x"></i></a> </p>
    © 2003-2016  版权所有
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>



<!-- jquery -->
<script src="{{URL::asset('assets/third/jquery/jquery.js')}}"></script>



<!-- wow script -->
<script src="{{URL::asset('assets/third/wow/wow.min.js')}}"></script>


<!-- boostrap -->
<script src="{{URL::asset('assets/third/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="{{URL::asset('assets/third/mobile/touchSwipe.min.js')}}"></script>
<script src="{{URL::asset('assets/third/respond/respond.js')}}"></script>

<!-- gallery -->
<script src="{{URL::asset('assets/third/gallery/jquery.blueimp-gallery.min.js')}}"></script>




<!-- custom script -->
{{--<script src="{{URL::asset('assets/welcome/script.js')}}"></script>--}}

</body>
</html>