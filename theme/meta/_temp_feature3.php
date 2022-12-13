<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_feature3.php" ) );
}

$g5['title'] = "서비스/상품 소개 3";
include_once(G5_THEME_PATH . '/head.php');
?>

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

	    <?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
        <hr class="m-0">
        <!-- ============================================================== -->
        <!-- Feature 21  -->
        <!-- ============================================================== -->
        <div class="_ct_section spacer feature21 wrap-feature21-box" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/web-full/3.jpg)">
            <div class="container">
                <!-- Row  -->
                <div class="row text-white">
                    <!-- Column -->
                    <div class="col-md-5 both-space">
                        <div class="" data-aos="fade-right" data-aos-duration="1200">
                            <span class="label label-info label-rounded">서비스/상품 소개 21</span>
                            <h2 class="text-white m-t-20 m-b-30">에이스테마로 웹사이트 구축</h2>
                            <p class="op-8">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                            <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f21">
                                <span>자세히보기 <i class="fas fa-arrow-right"></i></span>
                            </a>
	                        <?php echo $btn_copycode_str; ?>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </div>
        <textarea class="d-none _ta_section"></textarea>
        <!-- ============================================================== -->
        <!-- End Feature 21  -->
        <!-- ============================================================== -->
        <hr class="m-0">
        <!-- ============================================================== -->
        <!-- Feature 22 -->
        <!-- ============================================================== -->
        <div class="_ct_section spacer feature22">
            <div class="container">
                <!-- Row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <span class="label label-success label-rounded">서비스/상품 소개 22</span>
                        <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                        <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    </div>
                </div>
                <!-- Row -->
                <div class="row wrap-feature-22">
                    <!-- Column -->
                    <div class="col-lg-6" data-aos="flip-up" data-aos-duration="1200">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/web/18.jpg" class="rounded img-shadow img-responsive" alt="" />
                    </div>
                    <!-- Column -->
                    <div class="col-lg-6">
                        <div class="text-box"> <small class="text-info font-medium">에이스테마의 특징</small>
                            <h3 class="">
                                웹사이트 제작 더 이상 고민하지 마세요. <span class="text-success-gradiant">에이스테마</span>를 이용하면 단 기간에 개발이 가능합니다!
                            </h3>
                            <p>에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <p>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            <a class="btn btn-success-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f22">
                                <span>자세히보기 <i class="fas fa-arrow-right"></i></span>
                            </a>
	                        <?php echo $btn_copycode_str; ?>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </div>
        <textarea class="d-none _ta_section"></textarea>
        <!-- ============================================================== -->
        <!-- End Feature 22  -->
        <!-- ============================================================== -->
        <hr class="m-0">
        <!-- ============================================================== -->
        <!-- Feature 23 -->
        <!-- ============================================================== -->
        <div class="_ct_section spacer feature23 wrap-feature23-box" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/web-full//2.jpg)">
            <div class="container">
                <!-- Row -->
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center both-space">
                        <div class="card" data-aos="flip-left" data-aos-duration="1200">
                            <div class="card-body">
                                <div class="text-box"> <span class="label label-info label-rounded">서비스/상품 소개 23</span>
                                    <h3 class="title">에이스테마로 멋진 웹사이트를 쉽고 빠르게 구축</h3>
                                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                                    <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f23">
                                        <span>자세히보기 <i class="fas fa-arrow-right"></i></span>
                                    </a>
	                                <?php echo $btn_copycode_str; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <textarea class="d-none _ta_section"></textarea>
        <!-- ============================================================== -->
        <!-- End Feature 23 -->
        <!-- ============================================================== -->
        <hr class="m-0">
        <!-- ============================================================== -->
        <!-- Feature 24 -->
        <!-- ============================================================== -->
        <div class="_ct_section spacer feature24">
            <div class="container">
                <!-- Row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <span class="label label-success label-rounded">서비스/상품 소개 24</span>
                        <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                        <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
                <!-- Row -->
                <div class="row wrap-feature-24">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-shadow">
                            <a href="javascript:void(0)" class="service-24"> <i class="fas fa-layer-group fa-4x"></i>
                                <h6 class="ser-title">다양한 게시판 스킨</h6>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-shadow">
                            <a href="javascript:void(0)" class="service-24"> <i class="fas fa-images fa-4x"></i>
                                <h6 class="ser-title">다양한 최근게시물 스킨</h6>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-shadow">
                            <a href="javascript:void(0)" class="service-24"> <i class="fas fa-swatchbook fa-4x"></i>
                                <h6 class="ser-title">섹션 템플릿 라이브러리 제공</h6>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-shadow">
                            <a href="javascript:void(0)" class="service-24"> <i class="fas fa-heading fa-4x"></i>
                                <h6 class="ser-title">11종류의 헤더(메뉴바) 제공</h6>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-shadow">
                            <a href="javascript:void(0)" class="service-24"> <i class="fas fa-shoe-prints fa-4x"></i>
                                <h6 class="ser-title">6종류의 푸터 제공</h6>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-shadow">
                            <a href="javascript:void(0)" class="service-24"> <i class="fas fa-th-list fa-4x"></i>
                                <h6 class="ser-title">사이드바 제공</h6>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-shadow">
                            <a href="javascript:void(0)" class="service-24"> <i class="fas fa-baby fa-4x"></i>
                                <h6 class="ser-title">쉬운 웹사이트 구축</h6>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-shadow">
                            <a href="javascript:void(0)" class="service-24"> <i class="fas fa-fighter-jet fa-4x"></i>
                                <h6 class="ser-title">빠른 웹사이트 구축</h6>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </div>
        <textarea class="d-none _ta_section"></textarea>
        <!-- ============================================================== -->
        <!-- End Feature 24 -->
        <!-- ============================================================== -->
        <hr class="m-0">
        <!-- ============================================================== -->
        <!-- Feature 25 -->
        <!-- ============================================================== -->
        <div class="_ct_section spacer bg-light feature24">
            <div class="container">
                <!-- Row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center m-b-40">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature25/img1.png" alt="" class="img-responsive" />
                    </div>
                    <div class="col-md-7 text-center"> <span class="label label-success label-rounded">서비스/상품 소개 25</span>
                        <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                        <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
                <!-- Row -->
            </div>
        </div>
        <textarea class="d-none _ta_section"></textarea>
        <!-- ============================================================== -->
        <!-- End Feature 25 -->
        <!-- ============================================================== -->
        <hr class="m-0">
        <!-- ============================================================== -->
        <!-- Feature 26 -->
        <!-- ============================================================== -->
        <div class="_ct_section spacer feature26">
            <div class="container">
                <div class="row wrap-feature-26">
                    <div class="col-md-6 align-self-center py-3">
                        <div class="max-box">
                            <span class="label label-info label-rounded">서비스/상품 소개 26</span>
                            <h2 class="title">에이스테마는 다양한 게시판 스킨과 다양한 최근게시물 스킨을 제공</h2>
                            <p class="">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <p>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            <p>섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                            <a href="javascript:void(0)" class="linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
	                        <?php echo $btn_copycode_str; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature26/img1.jpg" alt="" class="img-responsive" />
                    </div>
                </div>
                <div class="row wrap-feature-26">
                    <div class="col-md-6">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature26/img2.jpg" alt="" class="img-responsive" />
                    </div>
                    <div class="col-md-6 align-self-center py-3">
                        <span class="label label-info label-rounded">서비스/상품 소개 26</span>
                        <h2 class="title">에이스테마는 다양한 게시판 스킨과 다양한 최근게시물 스킨을 제공</h2>
                        <p class="">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        <p>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        <p>섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        <a class="linking" data-toggle="collapse" href="#f26">자세히보기  <i class="fas fa-arrow-right"></i></a>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
            </div>
        </div>
        <textarea class="d-none _ta_section"></textarea>
        <!-- ============================================================== -->
        <!-- End Feature 26 -->
        <!-- ============================================================== -->
        <hr class="m-0">
        <!-- ============================================================== -->
        <!-- Feature 27 -->
        <!-- ============================================================== -->
        <div class="_ct_section spacer bg-light feature26">
            <div class="container">
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6 align-self-center">
                        <span class="label label-danger label-rounded">서비스/상품 소개 27</span>
                        <h2 class="title">에이스테마는 다양한 게시판 스킨과 다양한 최근게시물 스킨을 제공</h2>
                        <p class="m-t-30">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        <div class="row">
                            <div class="col-md-6 m-t-40">
                                <i class="fas fa-layer-group text-danger display-5"></i>
                                <h5 class="m-t-20 m-b-20">다양한 게시판 스킨</h5>
                                <p>에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                                <a class="linking" data-toggle="collapse" href="#f27">자세히보기  <i class="fas fa-arrow-right text-success"></i></a>
	                            <?php echo $btn_copycode_str; ?>
                            </div>
                            <div class="col-md-6  m-t-40">
                                <i class="fas fa-images text-danger display-5"></i>
                                <h5 class="m-t-20 m-b-20">다양한 최근게시물 스킨</h5>
                                <p>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                                <a class="linking" data-toggle="collapse" href="#f27">자세히보기  <i class="fas fa-arrow-right text-success"></i></a>
	                            <?php echo $btn_copycode_str; ?>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-duration="1800" data-aos-easing="linear">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature27/img1.png" class="img-responsive" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <textarea class="d-none _ta_section"></textarea>
        <!-- ============================================================== -->
        <!-- End Feature 27 -->
        <!-- ============================================================== -->
        <hr class="m-0">
        <!-- ============================================================== -->
        <!-- Feature 28 -->
        <!-- ============================================================== -->
        <div class="_ct_section feature28">
            <div class="wrap-feature-28 row">
                <div class="col-lg-6 bg-cover" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature28/img1.jpg)"></div>
                <div class="col-lg-6">
                    <div class="side-content both-space">
                        <span class="label label-info label-rounded">서비스/상품 소개 28</span>
                        <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                        <p>에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                        <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f28"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
            </div>
            <div class="wrap-feature-28 row">
                <div class="col-lg-6">
                    <div class="side-content both-space text-right float-right">
                        <span class="label label-info label-rounded">서비스/상품 소개 28</span>
                        <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                        <p>에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                        <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f28"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
                <div class="col-lg-6 bg-cover" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature28/img2.jpg)"></div>
            </div>
        </div>
        <textarea class="d-none _ta_section"></textarea>
        <!-- ============================================================== -->
        <!-- End Feature 28 -->
        <!-- ============================================================== -->
        <hr class="m-0">
        <!-- ============================================================== -->
        <!-- Feature 29 -->
        <!-- ============================================================== -->
        <div class="_ct_section spacer bg-success-gradiant feature29">
            <div class="container wrap-feature-29">
                <!-- Row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <span class="label label-inverse label-rounded">서비스/상품 소개 29</span>
                        <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                        <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-light btn-rounded m-t-20 m-r-10">동영상보기 <span class="btn-devider"><i class="fa fa-play"></i></span></a>
                        <a href="#f29" data-toggle="collapse" class="btn btn-outline-light btn-rounded m-t-20">자세히보기 <span class="btn-devider"><i class="fas fa-arrow-right"></i></span></a>
                        <div class="modal fade" id="exampleModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">동영상보기</h5>
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
                <!-- Row -->
                <div class="row wrap-feature-29 text-white">
                    <!-- Column -->
                    <div class="col-lg-4 text-center">
                        <i class="icon-Laptop-2 display-5"></i>
                        <h5 class="title">다양한 게시판 스킨</h5>
                        <p>에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-duration="1800" data-aos-easing="linear">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature29/img1.png" class="img-responsive" alt="" />
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 text-center m-b-30">
                        <i class="icon-Favorite-Window display-5"></i>
                        <h5 class="title">다양한 최근게시물 스킨</h5>
                        <p>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
            </div>
        </div>
        <textarea class="d-none _ta_section"></textarea>
        <!-- ============================================================== -->
        <!-- End Feature 29 -->
        <!-- ============================================================== -->
        <hr class="m-0">
        <!-- ============================================================== -->
        <!-- Feature 30 -->
        <!-- ============================================================== -->
        <div class="_ct_section spacer ">
            <div class="container feature30">
                <div class="row">
                    <div class="col-lg-10">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature30/img1.jpg" class="rounded img-responsive" alt="" />
                    </div>
                    <div class="col-lg-5 col-md-7 text-center wrap-feature30-box" data-aos="fade-left" data-aos-duration="1800" data-aos-easing="linear">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <div class="p-20">
                                    <span class="label label-info label-rounded">서비스/상품 소개 30</span>
                                    <h3 class="title">에이스테마로 멋진 웹사이트를 쉽고 빠르게 구축</h3>
                                    <p>에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                                    <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f30"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                                <?php echo $btn_copycode_str; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <textarea class="d-none _ta_section"></textarea>
        <!-- ============================================================== -->
        <!-- End Feature 30 -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>