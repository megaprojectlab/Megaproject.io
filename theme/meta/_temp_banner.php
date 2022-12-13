<?php
include_once "./_common.php";

/*if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_banner.php" ) );
}*/

$g5['title'] = "배너";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Static Slider 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section static-slider1">
        <div class="container">
            <!-- Row  -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-5 align-self-center" data-aos="fade-right" data-aos-duration="1200">
                    <h1 class="title">
                        대한민국 <span class="text-success-gradiant typewrite" data-period="1000" data-type='["유통", "의류", "물류"]'></span>전문기업<br/>
                        Korea Company
                    </h1>
                    <a class="btn btn-success-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href=""><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
                <div class="col-md-7 img-anim m-t-40" data-aos="fade-up" data-aos-duration="2200">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider1/img1.png" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Static Slider 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Static Slider 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section static-slider2 spacer">
        <div class="container">
            <!-- Row  -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-7 align-self-center" data-aos="fade-right" data-aos-duration="1200">
                    <h1 class="title">
                        <span class="typewrite" data-period="1500" data-type='[ "다양한 게시판 스킨", "다양한 최근게시물 스킨", "섹션 템플릿 라이브러리"]'></span><br/>
                        기본 제공
                        <span class="text-info">.</span>
                    </h1>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20 m-b-10" data-toggle="collapse" href=""><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                    <a class="btn btn-link btn-md btn-arrow m-t-20 m-b-10 font-medium" data-toggle="collapse" href=""><span class="underline">다운로드 바로가기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
                <div class="col-md-5 img-anim" data-aos="fade-up" data-aos-duration="2200">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider2/img1.png" alt="" class="img-responsive m-t-20" />
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Static Slider 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Static Slider 3  -->
    <!-- ============================================================== -->
    <div class="_ct_section static-slider3">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center ">
                <!-- Column -->
                <div class="col-md-10 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                    <h1 class="title">
                        에이스테마의 특징<br/>
                        아래와 같은 기능들을 기본으로 제공<br/>
                        <span class="text-success-gradiant font-bold typewrite" data-period="1200" data-type='[ "다양한 게시판 스킨", "다양한 최근게시물 스킨", "섹션 템플릿 라이브러리", "11종류의 헤더(메뉴바) 제공", "6종류의 푸터 제공", "사이드바 제공" ]'></span>
                    </h1>
                    <a class="btn btn-success-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href=""><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Static Slider 3  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Static Slider 4  -->
    <!-- ============================================================== -->
    <div class="_ct_section static-slider4">
        <div class="container">
            <!-- Row  -->
            <div class="row">
                <div class="col-md-4 img-anim" data-aos="fade-up" data-aos-duration="2200">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider4/img1.png" alt="" class="img-responsive" />
                </div>
                <!-- Column -->
                <div class="col-md-7 ml-auto align-self-center" data-aos="fade-right" data-aos-duration="1200">
                    <h1 class="title">
                        <!--I’m Angelina Flintoff <b class="font-bold">Marketing & <span class="text-info-gradiant typewrite" data-period="2000" data-type='[ "SEO Expert", "HTML Expert", "CSS3 Expert"]'></span></b>-->
                        에이스테마의 특징<br/>
                        아래와 같은 기능들을 기본으로 제공<br/>
                        <span class="text-info-gradiant font-bold typewrite" data-period="1200" data-type='[ "다양한 게시판 스킨", "다양한 최근게시물 스킨", "섹션 템플릿 라이브러리", "11종류의 헤더(메뉴바) 제공", "6종류의 푸터 제공", "사이드바 제공" ]'></span>
                    </h1>
                    <a class="btn btn-outline-info btn-md btn-arrow m-t-20" data-toggle="collapse" href=""><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
            </div>
        </div>
        <div class="bg-info-gradiant">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 ml-auto info-box">
                        <div class="d-flex">
                            <div class="text-white m-r-20"><i class="fa fa-play-circle fa-4x"></i></div>
                            <div class="align-self-center">
                                <h4 class="font-light m-b-0">
                                    <a href="#" data-toggle="modal" data-target="#static-slide3" class="text-white">
                                        <b class="font-bold">에이스테마와 함께하는 쉽고 빠른 웹사이트 구축</b><br/>
                                        웹사이트 제작 더 이상 고민하지 마세요!
                                    </a>
                                </h4>
                            </div>
                            <div class="modal fade" id="static-slide3">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">동영상 보기</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="yt-player">
                                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/DDwbjWCgxVM?" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Static Slider 4  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Static Slider 5  -->
    <!-- ============================================================== -->
    <div class="_ct_section static-slider5 bg-success-gradiant">
        <div class="left-right-bg" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider5/img1.png), url(<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider5/img2.png)">
            <div class="container">
                <!-- Row  -->
                <div class="row justify-content-center ">
                    <!-- Column -->
                    <div class="col-md-8 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                        <h1 class="title text-white">에이스테마로 멋진 웹사이트 만들기</h1>
                        <p class="text-white op-8">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                        <a class="btn btn-rounded btn-light btn-md btn-arrow m-t-20 m-r-10" href=""><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                        <a class="btn btn-rounded btn-outline-light btn-md btn-arrow m-t-20" href=""><span>다운로드 <i class="fas fa-arrow-right"></i></span></a>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                    <!-- Column -->
                    <div class="col-md-12 text-center">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider5/img3.png" class="img-responsive shadow " alt="" />
                    </div>
                </div>
            </div>
            <!--<div class="bg-white p-40"></div>-->
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Static Slider 5  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Static Slider 6  -->
    <!-- ============================================================== -->
    <div class="_ct_section static-slider6 bg-danger-gradiant">
        <div class="left-right-bg" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider6/img2.png)">
            <div class="container">
                <!-- Row  -->
                <div class="row justify-content-center">
                    <!-- Column -->
                    <div class="col-md-8 align-self-center" data-aos="fade-right" data-aos-duration="1200">
                        <span class="badge badge-warning p-10">ACE Theme</span>
                        <h1 class="title text-white">
                            <!--<b>Powerful Solution </b>for People who believe in <b>Quality</b> and <b>Ready to Rock!</b>-->
                            에이스테마로 멋진 웹사이트 만들기
                        </h1>
                        <p class="text-white op-8">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                    <!-- Column -->
                    <div class="col-md-8 text-center m-t-20 middle-image" data-aos="fade-up" data-aos-duration="1200">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider6/img1.jpg" class="video-img img-responsive rounded" alt="" />
                        <div class="embed-responsive hide embed-responsive-16by9" data-animation="animated fadeIn">
                            <video class="video" controls>
                                <source src="<?php echo G5_THEME_URL ?>/assets/videos/running.mp4" type="video/mp4"> Your browser does not support HTML5 video.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <script>
        // This is for the static slider 6
        $('.video-img').on('click', function() {
            $(this).addClass('hide');
            $('.embed-responsive').show()
                .removeClass('hide');
            $("video").each(function () { this.play() });
        });
    </script>
    <!-- ============================================================== -->
    <!-- End Static Slider 6  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Static Slider 7  -->
    <!-- ============================================================== -->
    <div class="_ct_section static-slider7" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider7/img1.jpg)">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center ">
                <!-- Column -->
                <div class="col-md-10 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                    <h1 class="title text-white typewrite" data-period="1200" data-type='[ "다양한 게시판 스킨", "다양한 최근글 스킨", "섹션 라이브러리", "11종류의 헤더 제공", "6종류의 푸터 제공", "사이드바 제공" ]'></h1>
                    <h4 class="text-white">에이스테마와 함께하는 쉽고 빠른 웹사이트 구축</h4>
                    <a class="btn btn-danger-gradiant btn-rounded btn-md btn-arrow m-t-20 m-r-10" data-toggle="collapse" href=""><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                    <a class="btn btn-outline-light btn-rounded btn-md m-t-20" data-toggle="modal" data-target="#static-slide7" href=""><i class="fa fa-play m-r-10"></i> 동영상 보기 </a>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
                <div class="modal fade" id="static-slide7">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">동영상 보기</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="yt-player1">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/DDwbjWCgxVM?" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Static Slider 7  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Static Slider 8  -->
    <!-- ============================================================== -->
    <div class="_ct_section static-slider8" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider8/img1.jpg)">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center ">
                <!-- Column -->
                <div class="col-md-8 align-self-center text-center">
                    <h1 class="title text-white typewrite" data-period="1200" data-type='[ "다양한 게시판 스킨", "다양한 최근게시물 스킨", "섹션 템플릿 라이브러리", "11종류의 헤더", "6종류의 푸터", "사이드바 제공" ]'></h1>
                    <h4 class="text-white font-light">에이스테마와 함께하는 쉽고 빠른 웹사이트 구축</h4>
                    <a class="btn btn-danger-gradiant btn-rounded btn-md btn-arrow m-t-20 m-b-40" data-toggle="collapse" href=""><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                    <br/>
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider8/img2.png" alt="" class="showcase-img" data-aos="fade-up" data-aos-duration="2200" />
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Static Slider 8  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Static Slider 9  -->
    <!-- ============================================================== -->
    <div class="_ct_section static-slider9 po-relative">
        <!-- Row  -->
        <div class="row">
            <div class="container">
                <!-- Column -->
                <div class="col-md-5 info-detail align-self-center">
                    <h1 class="title">
                        에이스테마로<br/>
                        멋진 웹사이트 만들기
                    </h1>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    <p class="text-dark font-bold mb-1">뉴스레터를 구독하시면 최신소식을 보내드립니다!</p>
                    <form class="form-inline">
                        <div class="input-group  input-group-lg mb-3">
                            <input type="text" class="form-control" placeholder="email address">
                            <div class="input-group-append">
                                <button class="btn btn-success-gradiant font-bold" type="button" id="button-addon2">구독</button>
                            </div>
                        </div>
                    </form>
	                <?php echo $btn_copycode_str; ?>
                    <!-- Column -->
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-5 bg-img" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider9/img1.jpg)">
                <img src="<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider9/img2.png" alt="" class="img-responsive" data-aos="fade-up" data-aos-duration="2200" />
            </div>
            <!-- Column -->
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Static Slider 9  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Static Slider 10  -->
    <!-- ============================================================== -->
    <div class="_ct_section static-slider10" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/sliders/static-slider/slider10/img1.jpg)">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center ">
                <!-- Column -->
                <div class="col-md-6 align-self-center text-center" data-aos="fade-down" data-aos-duration="1200">
                    <span class="label label-rounded label-inverse">에이스테마</span>
                    <h1 class="title">
                        에이스테마로<br/>
                        멋진 웹사이트 만들기
                    </h1>
                    <h6 class="subtitle op-8">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    <a class="btn btn-outline-light btn-rounded btn-md btn-arrow m-t-20" data-toggle="collapse" href=""><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Static Slider 10  -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>