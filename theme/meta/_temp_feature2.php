<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_feature2.php" ) );
}

$g5['title'] = "서비스/상품 소개 2";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 11  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light spacer feature11">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 11</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4 wrap-feature11-box">
                    <div class="card card-shadow border" data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body">
                            <div class="icon-space">
                                <div class="icon-round bg-success-gradiant"><i class="fas fa-layer-group"></i></div>
                            </div>
                            <h5 class="">다양한 게시판 스킨</h5>
                            <p class="m-t-20">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 wrap-feature11-box">
                    <div class="card card-shadow border" data-aos="fade-up" data-aos-duration="1200">
                        <div class="card-body">
                            <div class="icon-space">
                                <div class="icon-round bg-success-gradiant"><i class="fas fa-images"></i></div>
                            </div>
                            <h5 class="">다양한 최근게시물 스킨</h5>
                            <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 wrap-feature11-box">
                    <div class="card card-shadow border" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body">
                            <div class="icon-space">
                                <div class="icon-round bg-success-gradiant"><i class="fas fa-swatchbook"></i></div>
                            </div>
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
    <!-- End Feature 11  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 12  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature12">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="label label-info label-rounded">서비스/상품 소개 12</span>
                    <h2 class="m-b-30 m-t-20">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h4 class="font-light">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. </h4>
                    <div class="row">
                        <div class="col-md-6 m-t-30">
                            <h5 class="">다양한 게시판 스킨</h5>
                            <p>에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        </div>
                        <div class="col-md-6 m-t-30">
                            <h5 class="">다양한 최근게시물 스킨</h5>
                            <p>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        </div>
                        <div class="col-md-6 m-t-30">
                            <h5 class="">섹션 템플릿 라이브러리 제공</h5>
                            <p>섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        </div>
                        <div class="col-md-6 m-t-30">
                            <h5 class="">11종류의 헤더(메뉴바) 제공</h5>
                            <p>에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</p>
                        </div>
                        <div class="col-lg-12 m-t-30 m-b-30">
                            <a class="btn btn-info-gradiant btn-md btn-arrow" data-toggle="collapse" href="#f12"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                        <?php echo $btn_copycode_str; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row wrap-feature-12 mt-5">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature12/img1.jpg" class="rounded img-shadow img-responsive" alt="" /></div>
                                <div class="col-md-12"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature12/img2.jpg" class="rounded img-shadow img-responsive" alt="" /></div>
                            </div>
                        </div>
                        <div class="col-md-6 uneven-box">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature12/img3.jpg" class="rounded img-shadow img-responsive" alt="" /></div>
                                <div class="col-md-12"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature12/img4.jpg" class="rounded img-shadow img-responsive" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 12  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 13  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light spacer feature13">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 13</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-lg-6 wrap-feature13-box">
                    <div class="card card-shadow border" data-aos="fade-right" data-aos-duration="1200">
                        <ul class="img-inline">
                            <li class="half-width"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img1.jpg" alt="" class="img-responsive rounded" /></li>
                            <li class="p-20 half-width">
                                <h5 class=" m-t-10"><a href="javascript:void(0)" class="linking">다양한 게시판 스킨 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-15">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서...</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-6 wrap-feature13-box">
                    <div class="card card-shadow border" data-aos="fade-left" data-aos-duration="1200">
                        <ul class="img-inline">
                            <li class="half-width"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img2.jpg" alt="" class="img-responsive rounded" /></li>
                            <li class="p-20 half-width">
                                <h5 class=" m-t-10"><a href="javascript:void(0)" class="linking">다양한 최근게시물 스킨 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-15">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) ...</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-6 wrap-feature13-box">
                    <div class="card card-shadow border" data-aos="fade-right" data-aos-duration="1200">
                        <ul class="img-inline">
                            <li class="half-width"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img3.jpg" alt="" class="img-responsive rounded" /></li>
                            <li class="p-20 half-width">
                                <h5 class=" m-t-10"><a href="javascript:void(0)" class="linking">섹션 템플릿 라이브러리 제공 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-15">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 ...</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-6 wrap-feature13-box">
                    <div class="card card-shadow border" data-aos="fade-left" data-aos-duration="1200">
                        <ul class="img-inline">
                            <li class="half-width"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img4.jpg" alt="" class="img-responsive rounded" /></li>
                            <li class="p-20 half-width">
                                <h5 class=" m-t-10"><a href="javascript:void(0)" class="linking">11종류의 헤더(메뉴바) 제공 <i class="fas fa-arrow-right"></i></a></h5>
                                <p class="m-t-15">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 ...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 13  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 14  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature14">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <span class="label label-info label-rounded">서비스/상품 소개 14</span>
                    <h2 class="m-t-20 m-b-30">에이스테마로 멋진 웹사이트 만들기</h2>
                    <p>에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.</p>
                    <p>또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                    <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20 m-b-30" data-toggle="collapse" href="#f14"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <div class="col-lg-4 wrap-feature14-box">
                    <div class="mb-5" data-aos="flip-left" data-aos-duration="1200">
                        <img class="rounded img-responsive" src="<?php echo G5_THEME_URL ?>/assets/images/features/feature14/img1.jpg" alt="" />
                        <div class="m-t-30">
                            <h5 class="">다양한 게시판 스킨</h5>
                            <p class="m-t-20">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <a href="javascript:void(0)" class="linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-4 wrap-feature14-box">
                    <div class="mb-5" data-aos="flip-up" data-aos-duration="1200">
                        <img class="rounded img-responsive" src="<?php echo G5_THEME_URL ?>/assets/images/features/feature14/img2.jpg" alt="" />
                        <div class="m-t-30">
                            <h5 class="">다양한 최근게시물 스킨</h5>
                            <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            <a href="javascript:void(0)" class="linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 14  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 15  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light spacer feature15">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 15</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-lg-6 wrap-feature15-box">
                    <div class="row">
                        <div class="col-md-12 m-b-15" data-aos="fade-down" data-aos-duration="1000">
                            <div class="d-flex no-block">
                                <div class="no-shrink"><span class="icon-round bg-white display-5 text-success"><i class="fas fa-layer-group"></i></span></div>
                                <div class="p-20">
                                    <h5 class=""><a href="javascript:void(0)" class="linking">다양한 게시판 스킨 <i class="fas fa-arrow-right"></i></a></h5>
                                    <p class="m-t-20">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 m-b-15" data-aos="fade-down" data-aos-duration="2000">
                            <div class="d-flex no-block">
                                <div class="no-shrink"><span class="icon-round bg-white display-5 text-success"><i class="fas fa-images"></i></span></div>
                                <div class="p-20">
                                    <h5 class=""><a href="javascript:void(0)" class="linking">다양한 최근게시물 스킨 <i class="fas fa-arrow-right"></i></a></h5>
                                    <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 m-b-15" data-aos="fade-down" data-aos-duration="3000">
                            <div class="d-flex no-block">
                                <div class="no-shrink"><span class="icon-round bg-white display-5 text-success"><i class="fas fa-swatchbook"></i></span></div>
                                <div class="p-20">
                                    <h5 class=""><a href="javascript:void(0)" class="linking">섹션 템플릿 라이브러리 제공 <i class="fas fa-arrow-right"></i></a></h5>
                                    <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-6 wrap-feature15-box" data-aos="flip-left" data-aos-duration="1200">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature15/img1.png" class="img-responsive" alt="" />
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 15  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 16  -->
    <!-- ============================================================== -->
    <div class="_ct_section feature16">
        <div class="row wrap-feature-16">
            <div class="col-lg-6 with-bg p-5" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature16/img1.jpg)"></div>
            <div class="col-lg-6 bg-info-gradiant text-white p-5">
                <div class="with-text">
                    <span class="label label-success label-rounded">서비스/상품 소개 16</span>
                    <h2 class="text-white m-t-30 m-b-30">에이스테마로 멋진 웹사이트 만들기</h2>
                    <p class="op-7">
                        에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.<br/>
                        또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다.
                    </p>
                    <ul class="list-block m-b-30">
                        <li><i class="far fa-check-circle"></i> <span>에이스테마는 50여종의 게시판 스킨을 제공</span></li>
                        <li><i class="far fa-check-circle"></i> <span>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공 (50여종)</span></li>
                        <li><i class="far fa-check-circle"></i> <span>섹션 템플릿 라이브러리 제공으로 웹페이지를 쉽고 빠른 시간안에 완성</span></li>
                        <li><i class="far fa-check-circle"></i> <span>에이스테마는 11종류의 헤더(메뉴바)를 제공</span></li>
                    </ul>
                    <a class="btn btn-outline-light btn-md btn-arrow" data-toggle="collapse" href="#f16"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 16  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- End Feature 17  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature17">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 17</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="card-group m-t-30 wrap-feature-17-box">
                <!-- card  -->
                <div class="card">
                    <div class="card-body text-center">
                        <div class="p-20">
                            <div class="icon-space"><i class="display-5 text-info-gradiant fas fa-layer-group"></i></div>
                            <h4 class="">다양한 게시판 스킨</h4>
                            <p>에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        </div>
                    </div>
                </div>
                <!-- card  -->
                <div class="card">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/web-square/1.jpg" class="" alt="" />
                </div>
                <!-- card  -->
                <div class="card">
                    <div class="card-body text-center">
                        <div class="p-20">
                            <div class="icon-space"><i class="display-5 text-info-gradiant fas fa-images"></i></div>
                            <h4 class="">다양한 최근게시물 스킨</h4>
                            <p>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        </div>
                    </div>
                </div>
                <!-- card  -->
            </div>
            <div class="card-group wrap-feature-17-box">
                <!-- card  -->
                <div class="card">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/web-square/2.jpg" class="" alt="" />
                </div>
                <!-- card  -->
                <div class="card">
                    <div class="card-body text-center">
                        <div class="p-20">
                            <div class="icon-space"><i class="display-5 text-info-gradiant fas fa-swatchbook"></i></div>
                            <h4 class="">섹션 템플릿 라이브러리 제공</h4>
                            <p>섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        </div>
                    </div>
                </div>
                <!-- card  -->
                <!-- card  -->
                <div class="card">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/web-square/3.jpg" class="" alt="" />
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 17  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 18  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light spacer feature18">
        <div class="container">
            <!-- row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-danger label-rounded">서비스/상품 소개 18</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- row  -->
            <div class="row m-t-30 wrap-feature-18">
                <!-- Column  -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                    <!-- card  -->
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5 icon-position" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img1.jpg)">
                                <div class="icon-round bg-success-gradiant text-white display-5"><i class="fas fa-images"></i></div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-40">
                                    <h4 class="">다양한 게시판 스킨</h4>
                                    <p>에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                                    <a href="javascript:void(0)" class="linking text-underline">자세히보기 <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column  -->
                <!-- Column  -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200">
                    <!-- card  -->
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5 icon-position" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img2.jpg)">
                                <div class="icon-round bg-success-gradiant text-white display-5"><i class="fas fa-layer-group"></i></div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-40">
                                    <h4 class="">다양한 최근게시물 스킨</h4>
                                    <p>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                                    <a href="javascript:void(0)" class="linking text-underline">자세히보기 <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column  -->
                <!-- Column  -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200">
                    <!-- card  -->
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5 icon-position" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img3.jpg)">
                                <div class="icon-round bg-success-gradiant text-white display-5"><i class="fas fa-swatchbook"></i></div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-40">
                                    <h4 class="">섹션 템플릿 라이브러리 제공</h4>
                                    <p>섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                                    <a href="javascript:void(0)" class="linking text-underline">자세히보기 <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column  -->
                <!-- Column  -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200">
                    <!-- card  -->
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5 icon-position" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img4.jpg)">
                                <div class="icon-round bg-success-gradiant text-white display-5"><i class="fas fa-heading"></i></div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-40">
                                    <h4 class="">11종류의 헤더(메뉴바) 제공</h4>
                                    <p>에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</p>
                                    <a href="javascript:void(0)" class="linking text-underline">자세히보기 <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column  -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 18  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 19  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature19 p-b-0">
        <div class="container">
            <!-- row  -->
            <div class="row">
                <div class="col-lg-7 align-self-center">
                    <span class="label label-primary label-rounded">서비스/상품 소개 19</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    <div class="row text-inverse">
                        <div class="col-md-6 m-t-30">
                            <ul class="list-block">
                                <li><i class="far fa-check-circle font-20 text-danger"></i> <span class="font-20 font-bold">다양한 게시판 스킨</span></li>
                                <li><i class="far fa-check-circle font-20 text-danger"></i> <span class="font-20 font-bold">다양한 최근게시물 스킨</span></li>
                                <li><i class="far fa-check-circle font-20 text-danger"></i> <span class="font-20 font-bold">섹션 템플릿 라이브러리 제공</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6 m-t-30">
                            <ul class="list-block">
                                <li><i class="far fa-check-circle font-20 text-danger"></i> <span class="font-20 font-bold">11종류의 헤더(메뉴바) 제공</span></li>
                                <li><i class="far fa-check-circle font-20 text-danger"></i> <span class="font-20 font-bold">6종류의 푸터 제공</span></li>
                                <li><i class="far fa-check-circle font-20 text-danger"></i> <span class="font-20 font-bold">사이드바 제공</span></li>
                            </ul>
                        </div>
                    </div>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature19/img1.jpg" alt="" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="500" />
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 19  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 20  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light spacer feature20 up">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">서비스/상품 소개 20</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-30 wrap-feature-20">
                <!-- Column -->
                <div class="col-lg-6" data-aos="flip-left" data-aos-duration="1200">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-body d-flex no-block">
                                    <div class="m-r-20"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img1.jpg" alt="" width="70" class="rounded" /></div>
                                    <div>
                                        <h5 class="">에이스테마는 50여종의 게시판 스킨을 제공</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="javascript:void(0)" class="text-white linking bg-success-gradiant">자세히보기 <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-6" data-aos="flip-right" data-aos-duration="1200">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-body d-flex no-block">
                                    <div class="m-r-20"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img2.jpg" alt="" width="70" class="rounded" /></div>
                                    <div>
                                        <h5 class="">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="javascript:void(0)" class="text-white linking bg-success-gradiant">자세히보기 <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-body d-flex no-block">
                                    <div class="m-r-20"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img3.jpg" alt="" width="70" class="rounded" /></div>
                                    <div>
                                        <h5 class="">섹션 템플릿 라이브러리를 이용한 쉽고 빠른 웹페이지 제작</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="javascript:void(0)" class="text-white linking bg-success-gradiant">자세히보기 <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-body d-flex no-block">
                                    <div class="m-r-20"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature13/img4.jpg" alt="" width="70" class="rounded" /></div>
                                    <div>
                                        <h5 class="">에이스테마는 11종류의 헤더(메뉴바)를 제공</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="javascript:void(0)" class="text-white linking bg-success-gradiant">자세히보기 <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row  -->
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- Feature 20  -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>