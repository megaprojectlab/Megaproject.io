<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_feature4.php" ) );
}

$g5['title'] = "서비스/상품 소개 4";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 31  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer bg-light feature31 wrap-feature31-box">
        <!-- Row  -->
        <div class="row">
            <div class="container">
                <div class="col-lg-6">
                    <div class="" data-aos="fade-right" data-aos-duration="1200"> <span class="label label-info label-rounded">서비스/상품 소개 31</span>
                        <h2 class="title text-uppercase">에이스테마로 멋진 웹사이트 만들기</h2>
                        <p class="op-8">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                        <div class="row m-t-30">
                            <div class="col-md-4">
                                <div class="card card-shadow border">
                                    <div class="card-body text-center text-uppercase"> <i class="fas fa-layer-group fa-5x text-info-gradiant"></i>
                                        <h6 class="m-t-10 font-medium">다양한 게시판 스킨</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-shadow border">
                                    <div class="card-body text-center text-uppercase"> <i class="fas fa-images fa-5x text-info-gradiant"></i>
                                        <h6 class="m-t-10 font-medium">다양한 최근게시물 스킨</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-shadow border">
                                    <div class="card-body text-center text-uppercase"> <i class="fas fa-swatchbook fa-5x text-info-gradiant"></i>
                                        <h6 class="m-t-10 font-medium">섹션 템플릿 라이브러리 제공</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f31"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 right-image"> <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature31/img1.jpg" class="half-radius" alt="" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="500" /> </div>
            <!-- Column -->
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 31  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 32  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature32">
        <div class="container">
            <div class="row wrap-feature-32">
                <div class="col-md-6">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature32/img1.png" alt="" class="img-responsive" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">
                </div>
                <div class="col-md-6 align-self-center py-3" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300"> <span class="label label-success label-rounded">서비스/상품 소개 32</span>
                    <h2 class="title m-t-20">에이스테마로 멋진 웹사이트 만들기</h2>
                    <p class="m-t-30">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                    <a class="btn btn-success-gradiant btn-md btn-rounded btn-arrow m-t-20" data-toggle="collapse" href="#f32"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 32  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 33  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature33 b-t p-b-0">
        <div class="container">
            <div class="row wrap-feature-33">
                <div class="col-lg-6 align-self-center py-3">
                    <span class="label label-danger label-rounded">서비스/상품 소개 33</span>
                    <h2 class="title text-uppercase">에이스테마로 멋진 웹사이트 만들기</h2>
                    <p class="m-t-30">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다.</p>
                    <p class="m-t-30">
                        <a class="linking font-bold" data-toggle="collapse" href="#f33">자세히보기 <i class="fas fa-arrow-right"></i></a>
                    </p>
                    <div class="play-btn">
                        <span class="display-1">제품소개</span>
                        <a href="#">
                            <span class="btn btn-circle btn-danger btn-md m-r-20"><i class="fa fa-play fa-2x"></i></span>동영상보기
                        </a>
                    </div>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature33/img1.jpg" alt="" class="img-responsive" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="300" />
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!--End Feature 33  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 34  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer bg-light feature34 wrap-feature34-box">
        <!-- Row  -->
        <div class="row ">
            <div class="col-lg-6 left-image p-t-80">
                <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature34/img1.png" class="img-responsive" alt="" data-aos="fade-down" data-aos-duration="3000" data-aos-offset="500" />
            </div>
            <div class="container">
                <div class="col-lg-6 ml-auto py-3">
                    <div class="" data-aos="fade-right" data-aos-duration="1200"> <span class="label label-info label-rounded">서비스/상품 소개 34</span>
                        <h2 class="title text-uppercase">에이스테마로 멋진 웹사이트 만들기</h2>
                        <p class="op-8">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <div class="row p-20">
                                            <div class="col-6 b-r">
                                                <h2 class="m-b-0 font-light">6455</h2>
                                                <h6 class="text-muted">PROJECTS</h6>
                                            </div>
                                            <div class="col-6 text-right b-l">
                                                <h2 class="m-b-0 font-light">85.5%</h2>
                                                <h6 class="text-muted">Sucess Rate</h6>
                                            </div>
                                            <div class="col-lg-12 m-t-20">
                                                <a class="btn btn-success-gradiant btn-md btn-block btn-arrow m-t-20" data-toggle="collapse" href="#f34"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                                            <?php echo $btn_copycode_str; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 34  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 36  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature36 bg-light wrap-feature36-box" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature36/img1.png); background-position: right bottom;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center"> <span class="label label-warning label-rounded">서비스/상품 소개 36</span>
                    <h2 class="title text-uppercase">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-5 m-t-40">
                            <h3 class="text-uppercase title stick-bottom">다양한 게시판 스킨<span class="bg-warning"></span></h3>
                            <p>에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <a class="btn btn-warning btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f36"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                        <div class="col-md-5 ml-auto m-t-40">
                            <h3 class="text-uppercase title stick-bottom">다양한 최근게시물 스킨<span class="bg-warning"></span></h3>
                            <p>에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p> <a class="btn btn-warning btn-md btn-arrow m-t-20" data-toggle="collapse" href="#f36"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 36  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 37  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer feature37 wrap-feature37-box">
        <div class="row">
            <div class="col-lg-6"> <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature37/img1.png" alt="" class="img-responsive" /> </div>
            <div class="col-lg-6 align-self-center">
                <div class="card max-600">
                    <div class="card-body"> <span class="label label-info label-rounded">서비스/상품 소개 37</span>
                        <h2 class="title text-uppercase">에이스테마로 멋진 웹사이트 만들기</h2>
                        <p class="m-t-30">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                        <div class="card card-shadow border">
                            <div class="card-body">
                                <div class="d-flex p-10">
                                    <div class="m-r-20 align-self-center hidden-md-down"><i class="text-info-gradiant fa fa-cloud fa-3x"></i></div>
                                    <div class="m-r-10 align-self-center">
                                        <h5 class="m-b-0">그누보드 에이스테마</h5>
                                        <h6 class="subtitle">지금 바로 다운 받을 수 있습니다</h6>
                                    </div>
                                    <div class="ml-auto align-self-center">
                                        <a class="btn btn-info-gradiant btn-rounded btn-md btn-arrow" data-toggle="collapse" href="#f37"><span>Download <i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 37  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 38  -->
    <!-- ============================================================== -->
    <div class="_ct_section feature37 wrap-feature38-box">
        <div class="row bg-orange">
            <div class="col-lg-6 po-absolute"> <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature38/img1.png" alt="" class="" /> </div>
            <div class="container">
                <div class="row spacer">
                    <div class="col-lg-6">
                        <div class="p-20"> <span class="label label-dark label-rounded">서비스/상품 소개 38</span>
                            <h2 class="title text-white text-uppercase">에이스테마로 멋진 웹사이트 만들기</h2>
                            <p class="text-white op-8">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                            <p class="text-white op-8"><a class="linking font-bold" href="#f38">자세히보기  <i class="fas fa-arrow-right"></i></a></p>
	                        <?php echo $btn_copycode_str; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-shadow">
                    <div class="container p-20">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="d-flex no-block m-t-10 m-b-10">
                                    <div class="m-r-20"><i class="fas fa-layer-group fa-4x text-danger"></i></div>
                                    <div class="">
                                        <h2 class="m-b-0 font-light">6455</h2>
                                        <h6 class="subtitle">Projects</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="d-flex no-block m-t-10 m-b-10">
                                    <div class="m-r-20"><i class="fas fa-images fa-4x text-danger"></i></div>
                                    <div class="">
                                        <h2 class="m-b-0 font-light">99.9%</h2>
                                        <h6 class="subtitle">Success Rate</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="d-flex no-block m-t-10 m-b-10">
                                    <div class="m-r-20"><i class="fas fa-swatchbook fa-4x text-danger"></i></div>
                                    <div class="">
                                        <h2 class="m-b-0 font-light">354</h2>
                                        <h6 class="subtitle">Users</h6>
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
    <!-- End Feature 38  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 39  -->
    <!-- ============================================================== -->
    <div class="_ct_section feature39 spacer wrap-feature39-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature39/img1.png" class="img-responsive m-t-80" alt="" /></div>
                <div class="col-lg-6">
                    <div class="card-body"> <span class="label label-danger label-rounded">서비스/상품 소개 39</span>
                        <h2 class="title text-uppercase">에이스테마로 멋진 웹사이트 만들기</h2>
                        <p class="m-t-40 m-b-40">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                        <!-- column  -->
                        <div class="d-flex no-block m-b-40">
                            <div class="m-r-20"><i class="fas fa-layer-group fa-4x text-danger"></i></div>
                            <div>
                                <h4>다양한 게시판 스킨</h4>
                                <h6 class="subtitle">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</h6>
                            </div>
                        </div>
                        <!-- column  -->
                        <div class="d-flex no-block m-b-40">
                            <div class="m-r-20"><i class="fas fa-images fa-4x text-danger"></i></div>
                            <div>
                                <h4>다양한 최근게시물 스킨</h4>
                                <h6 class="subtitle">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</h6>
                            </div>
                        </div>
                        <!-- column  -->
                        <div class="d-flex no-block m-b-40">
                            <div class="m-r-20"><i class="fas fa-swatchbook fa-4x text-danger"></i></div>
                            <div>
                                <h4>섹션 템플릿 라이브러리 제공</h4>
                                <h6 class="subtitle">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</h6>
                            </div>
                        </div>
                        <a class="btn btn-danger btn-md btn-arrow" data-toggle="collapse" href="#f39"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- Feature 39  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Feature 40  -->
    <!-- ============================================================== -->
    <div class="_ct_section feature40 spacer wrap-feature40-box" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/features/feature40/img1.png), url(<?php echo G5_THEME_URL ?>/assets/images/features/feature40/img2.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body"> <span class="label label-danger label-rounded">서비스/상품 소개 40</span>
                            <h2 class="title text-uppercase">에이스테마로 멋진 웹사이트 만들기</h2>
                            <p class="m-t-40 m-b-40">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                            <a class="btn btn-danger btn-md btn-rounded btn-arrow" data-toggle="collapse" href="#f40"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
	                        <?php echo $btn_copycode_str; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/features/feature40/img3.jpg" alt="" class="img-responsive rounded border border-danger" />
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Feature 40  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>