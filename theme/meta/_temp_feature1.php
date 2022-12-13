<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_feature1.php" ) );
}

$g5['title'] = "서비스/상품 소개 1";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light spacer feature1">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 1</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4 wrap-feature1-box">
                    <div class="card card-shadow" data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body text-center">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature1/bo-skin.jpg" class="" alt="" />
                            <h5 class="mt-3">다양한 게시판 스킨</h5>
                            <p class="m-t-20">게시판 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 wrap-feature1-box">
                    <div class="card card-shadow" data-aos="fade-up" data-aos-duration="1200">
                        <div class="card-body text-center">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature1/latest-skin.jpg" class="" alt="" />
                            <h5 class="mt-3">다양한 최근게시물 스킨</h5>
                            <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 wrap-feature1-box">
                    <div class="card card-shadow" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body text-center">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature1/section-lib.jpg" class="" alt="" />
                            <h5 class="mt-3">섹션 템플릿 라이브러리 제공</h5>
                            <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature2">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-info label-rounded">서비스/상품 소개 2</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4 wrap-feature2-box">
                    <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                        <img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/13.jpg" alt="" />
                        <div class="card-body text-center">
                            <h5 class="">다양한 게시판 스킨</h5>
                            <p class="m-t-20">게시판 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 wrap-feature2-box">
                    <div class="card card-shadow" data-aos="flip-up" data-aos-duration="1200">
                        <img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/14.jpg" alt="" />
                        <div class="card-body text-center">
                            <h5 class="">다양한 최근게시물 스킨</h5>
                            <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 wrap-feature2-box">
                    <div class="card card-shadow" data-aos="flip-right" data-aos-duration="1200">
                        <img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/15.jpg" alt="" />
                        <div class="card-body text-center">
                            <h5 class="">섹션 템플릿 라이브러리 제공</h5>
                            <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 2-1  -->
    <!-- ============================================================== -->
    <div class="spacer feature2 bg-dark">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 2-1</span>
                    <h2 class="title text-white">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle text-muted">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card aos-init aos-animate" data-aos="flip-left" data-aos-duration="1200">
                        <a href="#" class="img-ho" title=""><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web//8.jpg" alt=""></a>
                        <div class="bg-dark">
                            <p class="m-b-0 font-16 m-t-20 subtitle text-white">다양한 게시판 스킨</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card aos-init aos-animate" data-aos="flip-up" data-aos-duration="1200">
                        <a href="#" class="img-ho" title=""><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web//10.jpg" alt=""></a>
                        <div class="bg-dark">
                            <p class="m-b-0 font-16 m-t-20 subtitle text-white">다양한 최근게시물 스킨</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card aos-init aos-animate" data-aos="flip-right" data-aos-duration="1200">
                        <a href="#" class="img-ho" title=""><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web//12.jpg" alt=""></a>
                        <div class="bg-dark">
                            <p class="m-b-0 font-16 m-t-20 subtitle text-white">섹션 템플릿 라이브러리 제공</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card aos-init aos-animate" data-aos="flip-left" data-aos-duration="1200">
                        <a href="#" class="img-ho" title=""><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web//14.jpg" alt=""></a>
                        <div class="bg-dark">
                            <p class="m-b-0 font-16 m-t-20 subtitle text-white">11종류의 헤더(메뉴바) 제공</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card aos-init aos-animate" data-aos="flip-up" data-aos-duration="1200">
                        <a href="#" class="img-ho" title=""><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web//16.jpg" alt=""></a>
                        <div class="bg-dark">
                            <p class="m-b-0 font-16 m-t-20 subtitle text-white">6종류의 푸터 제공</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card aos-init aos-animate" data-aos="flip-right" data-aos-duration="1200">
                        <a href="#" class="img-ho" title=""><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web//18.jpg" alt=""></a>
                        <div class="bg-dark">
                            <p class="m-b-0 font-16 m-t-20 subtitle text-white">사이드바 제공</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 2-1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 3  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light spacer feature3">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 3</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-6 wrap-feature3-box">
                    <div class="card card-shadow" data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space align-self-center"><i class="fas fa-layer-group fa-5x text-success-gradiant"></i></div>
                            <div class="align-self-center">
                                <h5 class=""><a href="javascript:void(0)" class="linking">다양한 게시판 스킨 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-20">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 wrap-feature3-box">
                    <div class="card card-shadow" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space align-self-center"><i class="fas fa-images fa-5x text-success-gradiant"></i></div>
                            <div class="align-self-center">
                                <h5 class=""><a href="javascript:void(0)" class="linking">다양한 최근게시물 스킨 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 wrap-feature3-box">
                    <div class="card card-shadow" data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space align-self-center"><i class="fas fa-swatchbook fa-5x text-success-gradiant"></i></div>
                            <div class="align-self-center">
                                <h5 class=""><a href="javascript:void(0)" class="linking">섹션 템플릿 라이브러리 제공 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 wrap-feature3-box">
                    <div class="card card-shadow" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space align-self-center"><i class="fas fa-heading fa-5x text-success-gradiant"></i></div>
                            <div class="align-self-center">
                                <h5 class=""><a href="javascript:void(0)" class="linking">11종류의 헤더(메뉴바) 제공 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-20">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 3  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 4  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature4">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-danger label-rounded">서비스/상품 소개 4</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-6 wrap-feature4-box">
                    <div class="card" data-aos="zoom-out-right" data-aos-duration="1200">
                        <div class="card-body">
                            <div class="icon-round bg-light-info"><i class="fas fa-layer-group"></i></div>
                            <h5 class="">다양한 게시판 스킨</h5>
                            <p class="m-t-20">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <a data-toggle="collapse" href="#f4" class="linking text-themecolor">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 wrap-feature4-box">
                    <div class="card" data-aos="zoom-out-left" data-aos-duration="1200">
                        <div class="card-body">
                            <div class="icon-round bg-light-info"><i class="fas fa-images"></i></div>
                            <h5 class="">다양한 최근게시물 스킨</h5>
                            <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            <a class="linking text-themecolor" data-toggle="collapse" href="#f4">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 wrap-feature4-box">
                    <div class="card" data-aos="zoom-out-right" data-aos-duration="1200">
                        <div class="card-body">
                            <div class="icon-round bg-light-info"><i class="fas fa-swatchbook"></i></div>
                            <h5 class="">섹션 템플릿 라이브러리 제공</h5>
                            <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                            <a data-toggle="collapse" href="#f4" class="linking text-themecolor">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 wrap-feature4-box">
                    <div class="card" data-aos="zoom-out-left" data-aos-duration="1200">
                        <div class="card-body">
                            <div class="icon-round bg-light-info"><i class="fas fa-heading"></i></div>
                            <h5 class="">11종류의 헤더(메뉴바) 제공</h5>
                            <p class="m-t-20">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</p>
                            <a class="linking text-themecolor" data-toggle="collapse" href="#f4">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 4  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 5  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light spacer feature5">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 5</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4 wrap-feature5-box">
                    <div class="card card-shadow" data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space"><i class="text-success-gradiant fas fa-layer-group"></i></div>
                            <div class="">
                                <h6 class=""><a href="javascript:void(0)" class="linking">다양한 게시판 스킨</a></h6>
                                <p class="m-t-20">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4 wrap-feature5-box">
                    <div class="card card-shadow" data-aos="fade-down" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space"><i class="text-success-gradiant fas fa-images"></i></div>
                            <div class="">
                                <h6 class=""><a href="javascript:void(0)" class="linking">다양한 최근게시물 스킨</a></h6>
                                <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4 wrap-feature5-box">
                    <div class="card card-shadow" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space"><i class="text-success-gradiant fas fa-swatchbook"></i></div>
                            <div class="">
                                <h6 class=""><a href="javascript:void(0)" class="linking">섹션 템플릿 라이브러리 제공</a></h6>
                                <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4 wrap-feature5-box">
                    <div class="card card-shadow" data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space"><i class="text-success-gradiant fas fa-heading"></i></div>
                            <div class="">
                                <h6 class=""><a href="javascript:void(0)" class="linking">11종류의 헤더(메뉴바) 제공</a></h6>
                                <p class="m-t-20">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4 wrap-feature5-box">
                    <div class="card card-shadow" data-aos="fade-up" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space"><i class="text-success-gradiant fas fa-shoe-prints"></i></div>
                            <div class="">
                                <h6 class=""><a href="javascript:void(0)" class="linking">6종류의 푸터 제공</a></h6>
                                <p class="m-t-20">에이스테마는 6종류의 푸터를 제공하기 때문에 심플하거나 많은 내용이 들어가는 푸터를 원하는대로 선택할 수 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4 wrap-feature5-box">
                    <div class="card card-shadow" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space"><i class="text-success-gradiant fas fa-th-list"></i></div>
                            <div class="">
                                <h6 class=""><a href="javascript:void(0)" class="linking">사이드바 제공</a></h6>
                                <p class="m-t-20">에이스테마는 사이드바를 제공합니다. 사이드바가 없는 경우는 물론, 사이드바가 왼쪽일 경우 또는 오른쪽일 경우 모두 지원합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 5  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 6  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature6">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 6</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4 wrap-feature6-box">
                    <div class="card bg-success-gradiant text-white" data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body">
                            <h6 class=" text-white">다양한 게시판 스킨</h6>
                            <p class="m-t-20">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <a href="#f4" class="linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4 wrap-feature6-box">
                    <div class="card bg-info-gradiant text-white" data-aos="fade-down" data-aos-duration="1200">
                        <div class="card-body">
                            <h6 class=" text-white">다양한 최근게시물 스킨</h6>
                            <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            <a href="#f4" class="linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4 wrap-feature6-box">
                    <div class="card bg-danger-gradiant text-white" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body">
                            <h6 class=" text-white">섹션 템플릿 라이브러리 제공</h6>
                            <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                            <a href="#f4" class="linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 6  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 6-1  -->
    <!-- ============================================================== -->
    <div class="mini-spacer feature6">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-primary label-rounded">서비스/상품 소개 6-1</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-4 wrap-feature6-box">
                    <div class="card bg-warning-gradiant text-white aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body">
                            <h4 class="font-bold text-white">XRP / 리플(Ripple)</h4>
                            <h5 class="text-white">USD 1.256</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-4 text-center">
                                    <h6 class="font-light text-white">% 1h</h6>
                                    <h6 class="text-white"><i class="ti-arrow-up"></i> 0.08</h6>
                                </div>
                                <div class="col-md-4 col-4 text-center">
                                    <h6 class="font-light text-white">% 24h</h6>
                                    <h6 class="text-white"><i class="ti-arrow-down"></i> -3.66</h6>
                                </div>
                                <div class="col-md-4 col-4 text-center">
                                    <h6 class="font-light text-white">% 7d</h6>
                                    <h6 class="text-white"><i class="ti-arrow-down"></i> -23.56</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4 wrap-feature6-box">
                    <div class="card bg-facebook-gradiant text-white aos-init aos-animate" data-aos="fade-down" data-aos-duration="1200">
                        <div class="card-body">
                            <h4 class="font-bold text-white">ETH / 이더리움(Ethereum)</h4>
                            <h5 class="text-white">USD 1.136</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-4 text-center">
                                    <h6 class="font-light text-white">% 1h</h6>
                                    <h6 class="text-white"><i class="ti-arrow-up"></i> 0.08</h6>
                                </div>
                                <div class="col-md-4 col-4 text-center">
                                    <h6 class="font-light text-white">% 24h</h6>
                                    <h6 class="text-white"><i class="ti-arrow-down"></i> -3.66</h6>
                                </div>
                                <div class="col-md-4 col-4 text-center">
                                    <h6 class="font-light text-white">% 7d</h6>
                                    <h6 class="text-white"><i class="ti-arrow-down"></i> -23.56</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4 wrap-feature6-box">
                    <div class="card bg-purple-gradiant text-white aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body">
                            <h4 class="font-bold text-white">BTC / 비트코인(Bitcoin)</h4>
                            <h5 class="text-white">USD 12.568</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-4 text-center">
                                    <h6 class="font-light text-white">% 1h</h6>
                                    <h6 class="text-white"><i class="ti-arrow-up"></i> 0.08</h6>
                                </div>
                                <div class="col-md-4 col-4 text-center">
                                    <h6 class="font-light text-white">% 24h</h6>
                                    <h6 class="text-white"><i class="ti-arrow-down"></i> -3.66</h6>
                                </div>
                                <div class="col-md-4 col-4 text-center">
                                    <h6 class="font-light text-white">% 7d</h6>
                                    <h6 class="text-white"><i class="ti-arrow-down"></i> -23.56</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 6-1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 7  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature7">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-info label-rounded">서비스/상품 소개 7</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4 wrap-feature7-box">
                    <div class="" data-aos="flip-left" data-aos-duration="1200">
                        <img class="rounded img-responsive" src="<?php echo G5_THEME_URL ?>/assets/images/web/1.jpg" alt="" />
                        <div class="m-t-30">
                            <h5 class="">다양한 게시판 스킨</h5>
                            <p class="m-t-20">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <a href="javascript:void(0)" class="linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 wrap-feature7-box">
                    <div class="" data-aos="flip-up" data-aos-duration="1200">
                        <img class="rounded img-responsive" src="<?php echo G5_THEME_URL ?>/assets/images/web/2.jpg" alt="" />
                        <div class="m-t-30">
                            <h5 class="">다양한 최근게시물 스킨</h5>
                            <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            <a href="javascript:void(0)" class="linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 wrap-feature7-box">
                    <div class="" data-aos="flip-right" data-aos-duration="1200">
                        <img class="rounded img-responsive" src="<?php echo G5_THEME_URL ?>/assets/images/web/3.jpg" alt="" />
                        <div class="m-t-30">
                            <h5 class="">섹션 템플릿 라이브러리 제공</h5>
                            <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                            <a href="javascript:void(0)" class="linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 7  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 7-1  -->
    <!-- ============================================================== -->
    <div class="_ct_section blog-home1 spacer bg-light">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <!-- Column -->
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 7-1</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
		            <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
            </div>
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card card-shadow aos-init aos-animate" data-aos="flip-left" data-aos-duration="1200">
                        <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/4.jpg" alt=""></a>
                        <div class="p-30">
                            <div class="d-flex no-block font-14">
                                <a href="#" class="text-info">카테고리 1</a>
                                <span class="ml-auto text-info">특장점 1</span>
                            </div>
                            <h5 class="m-t-20"><a href="#" class="link">카테고리 1</a></h5>
                            <p class="m-t-20">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card card-shadow aos-init aos-animate" data-aos="flip-up" data-aos-duration="1200">
                        <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/5.jpg" alt=""></a>
                        <div class="p-30">
                            <div class="d-flex no-block font-14">
                                <a href="#" class="text-info">카테고리 2</a>
                                <span class="ml-auto text-info">특장점 2</span>
                            </div>
                            <h5 class="m-t-20"><a href="#" class="link">다양한 최근게시물 스킨</a></h5>
                            <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card card-shadow aos-init aos-animate" data-aos="flip-right" data-aos-duration="1200">
                        <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/6.jpg" alt=""></a>
                        <div class="p-30">
                            <div class="d-flex no-block font-14">
                                <a href="#" class="text-info">카테고리 3</a>
                                <span class="ml-auto text-info">특장점 3</span>
                            </div>
                            <h5 class="m-t-20"><a href="#" class="link">섹션 템플릿 라이브러리 제공</a></h5>
                            <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 7-1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 7-2  -->
    <!-- ============================================================== -->
    <div class="_ct_section blog-home2 spacer">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <!-- Column -->
                <div class="col-md-7 text-center">
                    <span class="label label-info label-rounded">서비스/상품 소개 7-2</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
		            <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
                <!-- Column -->
            </div>
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card aos-init aos-animate" data-aos="flip-left" data-aos-duration="1200">
                        <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/7.jpg" alt=""></a>
                        <div class="date-pos bg-info-gradiant">분류<span>1</span></div>
                        <h5 class="m-t-30"><a href="#" class="link">다양한 게시판 스킨</a></h5>
                        <p class="m-t-20">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        <a data-toggle="collapse" href="#" class="linking text-themecolor m-t-10">자세히보기 <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card aos-init aos-animate" data-aos="flip-up" data-aos-duration="1200">
                        <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/8.jpg" alt=""></a>
                        <div class="date-pos bg-info-gradiant">분류<span>2</span></div>
                        <h5 class="m-t-30"><a href="#" class="link">다양한 최근게시물 스킨</a></h5>
                        <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        <a data-toggle="collapse" href="#" class="linking text-themecolor m-t-10">자세히보기 <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card aos-init aos-animate" data-aos="flip-right" data-aos-duration="1200">
                        <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/9.jpg" alt=""></a>
                        <div class="date-pos bg-info-gradiant">분류<span>3</span></div>
                        <h5 class="m-t-30"><a href="#" class="link">섹션 템플릿 라이브러리 제공</a></h5>
                        <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        <a data-toggle="collapse" href="#" class="linking text-themecolor m-t-10">자세히보기 <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 7-2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 7-3  -->
    <!-- ============================================================== -->
    <div class="_ct_section blog-home5 spacer">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <!-- Column -->
                <div class="col-md-7 text-center">
                    <span class="label label-danger label-rounded">서비스/상품 소개 7-3</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
		            <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card b-h-box font-14">
                        <img class="card-img" src="<?php echo G5_THEME_URL ?>/assets/images/web/10.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <span class="bg-danger-gradiant label">카테고리 1</span>
                            <span class="m-l-10">특장점 1</span>
                            <h5 class="card-title">
                                <a href="#">다양한 게시판 스킨</a>
                            </h5>
                            <p class="card-text">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card b-h-box font-14">
                        <img class="card-img" src="<?php echo G5_THEME_URL ?>/assets/images/web/11.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <span class="bg-danger-gradiant label">카테고리 2</span>
                            <span class="m-l-10">특장점 2</span>
                            <h5 class="card-title">
                                <a href="#">다양한 최근게시물 스킨</a>
                            </h5>
                            <p class="card-text">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card b-h-box font-14">
                        <img class="card-img" src="<?php echo G5_THEME_URL ?>/assets/images/web/12.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <span class="bg-danger-gradiant label">카테고리 3</span>
                            <span class="m-l-10">특장점 3</span>
                            <h5 class="card-title">
                                <a href="#">섹션 템플릿 라이브러리 제공</a>
                            </h5>
                            <p class="card-text">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 7-3  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 7-4  -->
    <!-- ============================================================== -->
    <div class="_ct_section blog-home4 spacer bg-light">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <!-- Column -->
                <div class="col-md-7 text-center">
                    <span class="label label-info label-rounded">서비스/상품 소개 7-4</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
            </div>
            <div class="card-columns m-t-40">
                <!-- Column -->
                <div class="card card-shadow aos-init aos-animate" data-aos="flip-left" data-aos-duration="1200">
                    <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/17.jpg" alt=""></a>
                    <div class="p-30">
                        <div class="d-flex no-block font-13">
                            <span class="">2021년 8월 15일</span>
                            <a href="#" class="link ml-auto">최고관리자</a>
                        </div>
                        <h5 class="font-medium m-t-20"><a href="#" class="link">다양한 게시판 스킨</a></h5>
                        <p class="m-t-20 m-b-20">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        <div class="d-flex no-block font-13">
                            <a href="#" class="text-info font-medium text-uppercase">자세히보기</a>
                            <a href="#" class="ml-auto link"><i class="far fa-comment font-20 vm"></i> 5</a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="card card-shadow text-white bg-danger-gradiant aos-init aos-animate" data-aos="flip-right" data-aos-duration="1200">
                    <div class="p-30">
                        <div class="d-flex no-block font-13">
                            <span class="">2021년 8월 15일</span>
                            <a href="#" class="ml-auto white-link">최고관리자</a>
                        </div>
                        <p class="m-t-30 m-b-20 text-center">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        <p class="text-center font-14 op-8">최고관리자</p>
                        <div class="d-flex no-block font-13">
                            <a href="#" class="text-white text-uppercase op-7">자세히보기</a>
                            <a href="#" class="ml-auto link text-white op-7"><i class="far fa-comment font-20 vm"></i> 5</a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="card card-shadow text-white bg-info-gradiant aos-init aos-animate" data-aos="flip-right" data-aos-duration="1200">
                    <div class="p-30">
                        <div class="d-flex no-block font-13">
                            <span class="">2021년 8월 15일</span>
                            <a href="#" class="ml-auto white-link">최고관리자</a>
                        </div>
                        <p class="m-t-30 m-b-20 text-center">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        <p class="text-center font-14 op-8">최고관리자</p>
                        <div class="d-flex no-block font-13">
                            <a href="#" class="text-white text-uppercase op-7">자세히보기</a>
                            <a href="#" class="ml-auto link text-white op-7"><i class="far fa-comment font-20 vm"></i> 5</a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="card card-shadow aos-init aos-animate" data-aos="flip-up" data-aos-duration="1200">
                    <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/18.jpg" alt=""></a>
                    <div class="p-30">
                        <div class="d-flex no-block font-13">
                            <span class="">2021년 8월 15일</span>
                            <a href="#" class="link ml-auto">최고관리자</a>
                        </div>
                        <h5 class="font-medium m-t-20"><a href="#" class="link">다양한 최근게시물 스킨</a></h5>
                        <p class="m-t-20 m-b-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        <div class="d-flex no-block font-13">
                            <a href="#" class="text-info font-medium text-uppercase">자세히보기</a>
                            <a href="#" class="ml-auto link"><i class="far fa-comment font-20 vm"></i> 5</a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="card card-shadow aos-init aos-animate" data-aos="flip-right" data-aos-duration="1200">
                    <iframe width="100%" height="233" src="https://www.youtube.com/embed/EqHe4Fr7fMk" allowfullscreen="" style="border: 0px;"></iframe>
                    <div class="p-30">
                        <div class="d-flex no-block font-13">
                            <span class="">2021년 8월 15일</span>
                            <a href="#" class="link ml-auto">최고관리자</a>
                        </div>
                        <h5 class="font-medium m-t-20"><a href="#" class="link">다양한 게시판 스킨</a></h5>
                        <p class="m-t-20 m-b-20">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        <div class="d-flex no-block font-13">
                            <a href="#" class="text-info font-medium text-uppercase">자세히보기</a>
                            <a href="#" class="ml-auto link"><i class="far fa-comment font-20 vm"></i> 5</a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="card card-shadow aos-init" data-aos="flip-right" data-aos-duration="1200">
                    <div class="p-30">
                        <div class="d-flex no-block font-13">
                            <span class="">2021년 8월 15일</span>
                            <a href="#" class="link ml-auto">최고관리자</a>
                        </div>
                        <h5 class="font-medium m-t-20"><a href="#" class="link">섹션 템플릿 라이브러리 제공</a></h5>
                        <p class="m-t-20 m-b-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        <div class="d-flex no-block font-13">
                            <a href="#" class="text-info font-medium text-uppercase">자세히보기</a>
                            <a href="#" class="ml-auto link"><i class="far fa-comment font-20 vm"></i> 5</a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 7-4  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 8  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light spacer feature8">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 8</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-6">
                    <small class="text-info">에이스테마의 특징</small>
                    <h3>에이스테마로 쉽고 빠르게 웹사이트 구축</h3>
                    <p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단기간에 개발이 가능합니다.</p>
                    <ul class="list-block m-b-30">
                        <li class="py-1"><i class="far fa-check-circle text-info"></i> 50여종의 게시판 스킨을 제공</li>
                        <li class="py-1"><i class="far fa-check-circle text-info"></i> 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공 (50여종)</li>
                        <li class="py-1"><i class="far fa-check-circle text-info"></i> 섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성</li>
                        <li class="py-1"><i class="far fa-check-circle text-info"></i> 11종류의 헤더(메뉴바) 제공</li>
                        <li class="py-1"><i class="far fa-check-circle text-info"></i> 6종류의 푸터 제공</li>
                        <li class="py-1"><i class="far fa-check-circle text-info"></i> 사이드바 제공</li>
                    </ul>
                    <a class="btn btn-info-gradiant btn-md btn-arrow" data-toggle="collapse" href="#f8"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                </div>
                <!-- Column -->
                <div class="col-lg-6">
                    <div class="p-20">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature8/website-build.jpg" alt="" class="img-responsive img-shadow" data-aos="flip-right" data-aos-duration="1200" />
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 8  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 9  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature9">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 9</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-6 wrap-feature9-box b-r b-b">
                    <div class="card" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space align-self-center"><i class="fas fa-layer-group fa-5x text-success-gradiant"></i></div>
                            <div class="align-self-center">
                                <h5 class=""><a href="javascript:void(0)" class="linking">다양한 게시판 스킨 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-20">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 wrap-feature9-box b-b">
                    <div class="card" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space align-self-center"><i class="fas fa-images fa-5x text-success-gradiant"></i></div>
                            <div class="align-self-center">
                                <h5 class=""><a href="javascript:void(0)" class="linking">다양한 최근게시물 스킨 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 wrap-feature9-box b-r">
                    <div class="card" data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space align-self-center"><i class="fas fa-swatchbook fa-5x text-success-gradiant"></i></div>
                            <div class="align-self-center">
                                <h5 class=""><a href="javascript:void(0)" class="linking">섹션 템플릿 라이브러리 제공 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 wrap-feature9-box">
                    <div class="card" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <div class="icon-space align-self-center"><i class="fas fa-heading fa-5x text-success-gradiant"></i></div>
                            <div class="align-self-center">
                                <h5 class=""><a href="javascript:void(0)" class="linking">11종류의 헤더(메뉴바) 제공 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-20">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 9  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 10  -->
    <!-- ============================================================== -->
    <div class="_ct_section feature10">
        <div class="row">
            <!-- column  -->
            <div class="col-lg-4 bg-megna">
                <div class="wrap-feature10-box text-center">
                    <div class="m-b-30">
                        <span class="label label-dark label-rounded">서비스/상품 소개 10</span>
                    </div>
                    <div class="m-b-20"><i class="fas fa-layer-group fa-5x"></i></div>
                    <small class="op-8">에이스테마의 특징 1</small>
                    <h4 class="box-title">다양한 게시판 스킨</h4>
                    <p class="op-8">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                    <a class="btn btn-outline-light btn-md btn-arrow" data-toggle="collapse" href="#f10"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- column  -->
            <!-- column  -->
            <div class="col-lg-4 bg-primary">
                <div class="wrap-feature10-box text-center">
                    <div class="m-b-30">
                        <span class="label label-dark label-rounded">서비스/상품 소개 10</span>
                    </div>
                    <div class="m-b-20"><i class="fas fa-images fa-5x"></i></div>
                    <small class="op-8">에이스테마의 특징 2</small>
                    <h4 class="box-title">다양한 최근게시물 스킨</h4>
                    <p class="op-8">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                    <a class="btn btn-outline-light btn-md btn-arrow" data-toggle="collapse" href="#f10"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- column  -->
            <!-- column  -->
            <div class="col-lg-4 bg-orange">
                <div class="wrap-feature10-box text-center">
                    <div class="m-b-30">
                        <span class="label label-dark label-rounded">서비스/상품 소개 10</span>
                    </div>
                    <div class="m-b-20"><i class="fas fa-swatchbook fa-5x"></i></div>
                    <small class="op-8">에이스테마의 특징 3</small>
                    <h4 class="box-title">섹션 템플릿 라이브러리 제공</h4>
                    <p class="op-8">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                    <a class="btn btn-outline-light btn-md btn-arrow" data-toggle="collapse" href="#f10"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- column  -->
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 10  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>