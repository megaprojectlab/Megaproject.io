<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_feature5.php" ) );
}

$g5['title'] = "서비스/상품 소개 5";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 41  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light spacer feature41">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center"> <span class="label label-info label-rounded">서비스/상품 소개 41</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40 wrap-feature41-box">
                <!-- Column -->
                <div class="col-md-4">
                    <ul class="nav vtab f41-tab">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" aria-expanded="true">
                                <div class="t-icon"><i class="fas fa-layer-group fa-3x"></i></div>
                                <div>
                                    <h5 class="mb-2">다양한 게시판 스킨</h5>
                                    <h6 class="subtitle">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile">
                                <div class="t-icon"><i class="fas fa-images fa-3x"></i></div>
                                <div>
                                    <h5 class="mb-2">다양한 최근게시물 스킨</h5>
                                    <h6 class="subtitle">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="dropdown1-tab" data-toggle="tab" href="#dropdown1" aria-controls="dropdown1">
                                <div class="t-icon"><i class="fas fa-swatchbook fa-3x"></i></div>
                                <div>
                                    <h5 class="mb-2">섹션 템플릿 라이브러리 제공</h5>
                                    <h6 class="subtitle">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ssd-tab" data-toggle="tab" href="#ssd" aria-controls="ssd">
                                <div class="t-icon"><i class="fas fa-heading fa-3x"></i></div>
                                <div>
                                    <h5 class="mb-2">11종류의 헤더(메뉴바) 제공</h5>
                                    <h6 class="subtitle">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-7 ml-auto">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature41/img1.jpg" alt="" class="rounded img-responsive" />
                            <p class="mt-2">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f41"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature41/img2.jpg" alt="" class="rounded img-responsive" />
                            <p class="mt-2">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f41"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                        <div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature41/img3.jpg" alt="" class="rounded img-responsive" />
                            <p class="mt-2">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                            <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f41"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                        <div class="tab-pane fade" id="ssd" role="tabpanel" aria-labelledby="ssd-tab">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature41/img4.jpg" alt="" class="rounded img-responsive" />
                            <p class="mt-2">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</p>
                            <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f41"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->

            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 41  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 43  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature43">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1200"> <span class="label label-success label-rounded">서비스/상품 소개 43</span>
                    <h2 class="title">에이스테마로 웹사이트 구축</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    <h6 class="subtitle">웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다.</h6>
                    <a class="btn btn-success-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f43"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <div class="col-lg-6 ml-auto py-3">
                    <div class="row wrap-feature43-box">
                        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1200">
                            <h2 class="text-success-gradiant"><i class="fas fa-layer-group fa-2x"></i></h2>
                            <h5 class="title">다양한 게시판 스킨</h5>
                            <h6 class="subtitle">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</h6>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200">
                            <h2 class="text-success-gradiant"><i class="fas fa-images fa-2x"></i></h2>
                            <h5 class="title">다양한 최근게시물 스킨</h5>
                            <h6 class="subtitle">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</h6>
                        </div>
                        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1200">
                            <h2 class="text-success-gradiant"><i class="fas fa-swatchbook fa-2x"></i></h2>
                            <h5 class="title">섹션 템플릿 라이브러리 제공</h5>
                            <h6 class="subtitle">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</h6>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200">
                            <h2 class="text-success-gradiant"><i class="fas fa-heading fa-2x"></i></h2>
                            <h5 class="title">11종류의 헤더(메뉴바) 제공</h5>
                            <h6 class="subtitle">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 43  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 44  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature44 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center align-self-center">
                    <div class="max-500 m-auto"> <span class="label label-danger label-rounded">서비스/상품 소개 44</span>
                        <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                        <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                        <a class="btn btn-danger-gradiant btn-md btn-arrow m-t-20 m-b-20" data-toggle="collapse" href="#f44"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
                <div class="col-md-4 wrap-feature2-box">
                    <div class="card card-shadow" data-aos="flip-up" data-aos-duration="1200"> <img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/features/feature44/img1.jpg" alt="">
                        <div class="card-body text-center p-40">
                            <h6 class="text-muted">에이스테마의 특징</h6>
                            <h4 class="font-bold">에이스테마와 함께하는 쉽고 빠른 웹사이트 구축</h4>
                            <a href="#" class="btn btn-link text-danger m-t-30 text-underline">자세히보기</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 44  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 45  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature45">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-danger label-rounded">서비스/상품 소개 45</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row wrap-feature45-box">
                <div class="col-lg-12">
                    <!-- Tabs -->
                    <nav class="nav f45-tab" id="myTab4">
                        <!-- Tabs -->
                        <a class="nav-item nav-link active" id="wp-tab" data-toggle="tab" href="#wp-hos" aria-expanded="true">
                            <i class="hidden-sm-up fas fa-layer-group"></i> <span class="hidden-sm-down font-bold">다양한 게시판 스킨</span>
                        </a>
                        <!-- Tabs -->
                        <a class="nav-item nav-link" id="sh-tab" data-toggle="tab" href="#sh-hos">
                            <i class="hidden-sm-up fas fa-images"></i> <span class="hidden-sm-down font-bold">다양한 최근게시물 스킨</span>
                        </a>
                        <!-- Tabs -->
                        <a class="nav-item nav-link" id="vps-tab" data-toggle="tab" href="#vps-hos">
                            <i class="hidden-sm-up fas fa-swatchbook"></i> <span class="hidden-sm-down font-bold">섹션 템플릿 라이브러리 제공</span>
                        </a>
                        <!-- Tabs -->
                        <a class="nav-item nav-link" id="ded-tab" data-toggle="tab" href="#ded-hos">
                            <i class="hidden-sm-up fas fa-layer-group"></i> <span class="hidden-sm-down font-bold">11종류의 헤더(메뉴바) 제공</span>
                        </a>
                        <!-- Tabs -->
                    </nav>
                    <!-- Tabs content -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="wp-hos" role="tabpanel" aria-labelledby="wp-tab">
                            <div class="row">
                                <div class="col-lg-5 m-t-40">
                                    <span class="label label-danger label-rounded">에이스테마의 특징 1</span>
                                    <h3 class="title">다양한 게시판 스킨</h3>
                                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                                    <h6 class="subtitle">웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</h6>
                                </div>
                                <div class="col-lg-6 ml-auto m-t-40">
                                    <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature45/img1.jpg" class="img-responsive rounded" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sh-hos" role="tabpanel" aria-labelledby="sh-tab">
                            <div class="row">
                                <div class="col-lg-5 m-t-40">
                                    <span class="label label-danger label-rounded">에이스테마의 특징 2</span>
                                    <h3 class="title">다양한 최근게시물 스킨</h3>
                                    <h6 class="subtitle">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</h6>
                                    <h6 class="subtitle">웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</h6>
                                </div>
                                <div class="col-lg-6 ml-auto m-t-40">
                                    <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature45/img2.jpg" class="img-responsive rounded" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="vps-hos" role="tabpanel" aria-labelledby="vps-tab">
                            <div class="row">
                                <div class="col-lg-5 m-t-40">
                                    <span class="label label-danger label-rounded">에이스테마의 특징 3</span>
                                    <h3 class="title">섹션 템플릿 라이브러리 제공</h3>
                                    <h6 class="subtitle">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</h6>
                                    <h6 class="subtitle">웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</h6>
                                </div>
                                <div class="col-lg-6 ml-auto m-t-40">
                                    <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature45/img3.jpg" class="img-responsive rounded" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ded-hos" role="tabpanel" aria-labelledby="ded-tab">
                            <div class="row">
                                <div class="col-lg-5 m-t-40">
                                    <span class="label label-danger label-rounded">에이스테마의 특징 4</span>
                                    <h3 class="title">11종류의 헤더(메뉴바) 제공</h3>
                                    <h6 class="subtitle">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</h6>
                                    <h6 class="subtitle">웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</h6>
                                </div>
                                <div class="col-lg-6 ml-auto m-t-40">
                                    <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature45/img4.jpg" class="img-responsive rounded" alt="" />
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
    <!-- Feature 45  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 46  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature46 bg-light" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature46/img1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <span class="label label-success label-rounded">서비스/상품 소개 46</span>
                    <h2 class="title">에이스테마로 웹사이트 구축</h2>
                    <h6 class="subtitle m-b-40 m-t-20">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    <div class="card card-shadow " data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body p-30">
                            <h6>다양한 게시판 스킨</h6>
                            <p class="m-t-20">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <a href="#f46" data-toggle="collapse" class="linking">자세히보기 <i class="fas fa-arrow-right text-success"></i></a>
                        </div>
                    </div>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 46  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 47  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature47">
        <div class="container">
            <div class="row wrap-feature47-box">
                <div class="col-md-7 align-self-center">
                    <div class="max-500 m-auto"> <span class="label label-info label-rounded">서비스/상품 소개 47</span>
                        <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                        <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                        <ul class="list-block with-underline font-medium m-t-30 m-b-20 text-dark">
                            <li><i class="far fa-check-circle text-info"></i> <span>에이스테마는 50여종의 게시판 스킨을 제공</span></li>
                            <li><i class="far fa-check-circle text-info"></i> <span>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공</span></li>
                            <li><i class="far fa-check-circle text-info"></i> <span>섹션 템플릿 라이브러리를 이용한 쉽고 빠른 웹페이지 구축</span></li>
                            <li><i class="far fa-check-circle text-info"></i> <span>11종류의 헤더(메뉴바) 제공으로 웹사이트의 목적에 맞는 헤더 사용</span></li>
                        </ul>
                        <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20 m-b-20" data-toggle="collapse" href="#f47"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
                <div class="col-md-5 ml-auto">
                    <div class="card card-shadow" data-aos="flip-up" data-aos-duration="1200">
                        <img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web-square/2.jpg" alt="">
                        <div class="card-body">
                            <div class="p-20">
                                <h5 class="font-light">
                                    <span class="font-bold">웹사이트 제작 더 이상 고민하지 마세요!</span>
                                    에이스테마를 이용하면 단 기간에 개발이 가능합니다.
                                    이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 47  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 48  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature48 bg-light" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature48/img1.jpg)">
        <div class="container">
            <div class="row wrap-feature48-box">
                <div class="col-lg-6 col-md-6 ml-auto">
                    <span class="label label-warning label-rounded">서비스/상품 소개 48</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle m-b-20 m-t-20">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    <div class="m-b-20 m-t-20">
                        <a href="#f49" data-toggle="collapse" class="font-bold linking text-warning">자세히보기 <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <a href="javascript:void(0)" class="m-b-20"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature48/app-strore.png" alt=""/></a>
                    <a href="javascript:void(0)" class="m-b-20"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature48/play-store.png" alt=""/></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 48  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 49  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature42 bg-success-gradiant">
        <div class="container">
            <div class="row justify-content-center wrap-feature49-box">
                <div class="col-md-10 col-lg-7 text-center" data-aos="fade-up"> <span class="label label-inverse label-rounded">서비스/상품 소개 49</span>
                    <h2 class="title text-white">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle text-white op-7 m-b-20">
                        에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다.
                    </h6>
                    <div class="m-b-20 m-t-20">
                        <a href="#f49" data-toggle="collapse" class="white-link font-bold linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <a href="javascript:void(0)" class="m-b-20"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature48/app-strore.png" alt="" /></a>
                    <a href="javascript:void(0)" class="m-b-20"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature48/play-store.png" alt=""/></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 49  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>