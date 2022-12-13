<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_c2a.php" ) );
}

$g5['title'] = "카드 슬라이더";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">

    <div class="container">
        <div class="alert alert-info my-3">
            <h3 class="text-info"><i class="fa fa-exclamation-circle"></i> 알림</h3>
            <span class="font-bold">아래의 코드들은 [코드복사 버튼]을 통해서 복사가 불가능하기 때문에, <span class="text-danger">theme/ace/_temp_card-slider.php</span> 파일을 열어서 <span class="text-danger">직접 복사해서 사용</span>해야 합니다!</span>
        </div>
    </div>

    <hr class="m-0">

    <!-- ============================================================== -->
    <!-- 카드슬라이더 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section card-slider-1 spacer bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">카드 슬라이더 1</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <!-- Row  -->
            <div class="owl-carousel owl-theme card-slider-1-owl _card-slider-1-owl m-t-40">
                <!-- item -->
                <div class="item" data-aos="fade-right">
                    <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                        <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/12.jpg" alt="" /></a>
                        <div class="card-body p-30">
                            <h5 class="font-bold">다양한 게시판 스킨</h5>
                            <p class="m-t-20">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <div class="progress m-t-30">
                                <div class="progress-bar bg-success-gradiant" role="progressbar" style="width: 80%; height: 5px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row">
                                <div class="col-6 b-r">
                                    <p class="text-uppercase font-12 m-b-0 m-t-15">누적투자금액</p>
                                    <h3>₩65,360</h3>
                                </div>
                                <div class="col-6">
                                    <p class="text-uppercase font-12 m-b-0 m-t-15">목표투자금액</p>
                                    <h3>₩124,500</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item" data-aos="fade-up">
                    <div class="card card-shadow" data-aos="flip-up" data-aos-duration="1200">
                        <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/13.jpg" alt="" /></a>
                        <div class="card-body p-30">
                            <h5 class="font-bold">다양한 최근게시물 스킨</h5>
                            <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            <div class="progress m-t-30">
                                <div class="progress-bar bg-success-gradiant" role="progressbar" style="width: 80%; height: 5px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row">
                                <div class="col-6 b-r">
                                    <p class="text-uppercase font-12 m-b-0 m-t-15">누적투자금액</p>
                                    <h3>₩65,360</h3>
                                </div>
                                <div class="col-6">
                                    <p class="text-uppercase font-12 m-b-0 m-t-15">목표투자금액</p>
                                    <h3>₩124,500</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item" data-aos="fade-left">
                    <div class="card card-shadow" data-aos="flip-right" data-aos-duration="1200">
                        <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/14.jpg" alt="" /></a>
                        <div class="card-body p-30">
                            <h5 class="font-bold">섹션 템플릿 라이브러리 제공</h5>
                            <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                            <div class="progress m-t-30">
                                <div class="progress-bar bg-success-gradiant" role="progressbar" style="width: 80%; height: 5px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row">
                                <div class="col-6 b-r">
                                    <p class="text-uppercase font-12 m-b-0 m-t-15">누적투자금액</p>
                                    <h3>₩65,360</h3>
                                </div>
                                <div class="col-6">
                                    <p class="text-uppercase font-12 m-b-0 m-t-15">목표투자금액</p>
                                    <h3>₩124,500</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item" data-aos="fade-left">
                    <div class="card card-shadow" data-aos="flip-right" data-aos-duration="1200">
                        <a href="#"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/15.jpg" alt="" /></a>
                        <div class="card-body p-30">
                            <h5 class="font-bold">11종류의 헤더(메뉴바) 제공 </h5>
                            <p class="m-t-20">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</p>
                            <div class="progress m-t-30">
                                <div class="progress-bar bg-success-gradiant" role="progressbar" style="width: 80%; height: 5px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row">
                                <div class="col-6 b-r">
                                    <p class="text-uppercase font-12 m-b-0 m-t-15">누적투자금액</p>
                                    <h3>₩65,360</h3>
                                </div>
                                <div class="col-6">
                                    <p class="text-uppercase font-12 m-b-0 m-t-15">목표투자금액</p>
                                    <h3>₩124,500</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
            </div>
        </div>
        <script>
            $('._card-slider-1-owl').owlCarousel({
                loop: true,
                margin: 30,
                center: false,
                nav: false,
                dots: true,
                autoplay: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
        </script>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End 카드슬라이더 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 카드슬라이더 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section card-slider-2 spacer bg-light">
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <span class="label label-primary label-rounded">카드 슬라이더 2</span>
                        <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                        <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    </div>
                </div>
            </div>
            <!-- Row  -->
            <div class="owl-carousel owl-theme card-slider-2-owl _card-slider-2-owl m-t-40">
                <!-- item -->
                <div class="item" data-aos="fade-right">
                    <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                        <a href="#" class="img-ho"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/product/1.jpg" alt="" /></a>
                        <div class="card-body">
                            <h4 class="font-medium m-b-0">다양한 게시판 스킨</h4>
                            <p class="m-b-0 font-14">카테고리 1</p>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item" data-aos="fade-up">
                    <div class="card card-shadow" data-aos="flip-up" data-aos-duration="1200">
                        <a href="#" class="img-ho"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/product/2.jpg" alt="" /></a>
                        <div class="card-body">
                            <h4 class="font-medium m-b-0">다양한 최근게시물 스킨</h4>
                            <p class="m-b-0 font-14">카테고리 2</p>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item" data-aos="fade-left">
                    <div class="card card-shadow" data-aos="flip-right" data-aos-duration="1200">
                        <a href="#" class="img-ho"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/product/3.jpg" alt="" /></a>
                        <div class="card-body">
                            <h4 class="font-medium m-b-0">섹션 템플릿 라이브러리 제공</h4>
                            <p class="m-b-0 font-14">카테고리 3</p>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                        <a href="#" class="img-ho"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/product/4.jpg" alt="" /></a>
                        <div class="card-body">
                            <h4 class="font-medium m-b-0">11종류의 헤더(메뉴바) 제공 </h4>
                            <p class="m-b-0 font-14">카테고리 4</p>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="card card-shadow" data-aos="flip-up" data-aos-duration="1200">
                        <a href="#" class="img-ho"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/product/5.jpg" alt="" /></a>
                        <div class="card-body">
                            <h4 class="font-medium m-b-0">6종류의 푸터 제공</h4>
                            <p class="m-b-0 font-14">카테고리 5</p>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="card card-shadow" data-aos="flip-right" data-aos-duration="1200">
                        <a href="#" class="img-ho"><img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/product/6.jpg" alt="" /></a>
                        <div class="card-body">
                            <h4 class="font-medium m-b-0">사이드바 제공</h4>
                            <p class="m-b-0 font-14">카테고리 6</p>
                        </div>
                    </div>
                </div>
                <!-- item -->
            </div>
        </div>
        <script>
            $('._card-slider-2-owl').owlCarousel({
                loop: true,
                margin: 30,
                center: true,
                nav: false,
                dots: false,
                autoplay: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    },
                    1800: {
                        items: 4
                    }
                }
            })
        </script>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End 카드슬라이더 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 카드슬라이더 3  -->
    <!-- ============================================================== -->

    <div class="_ct_section card-slider-3 spacer bg-light">
        <div class="container">
            <!-- row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-danger label-rounded">카드 슬라이더 3</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <!-- row  -->
            <div class="owl-carousel owl-theme card-slider-3 _card-slider-3 m-t-40">
                <!-- item -->
                <div class="item card-shadow property-box" data-aos="fade-right">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/web/4.jpg" alt="" class="img-responsive" />
                    <div class="bg-white p-40 po-relative">
                        <label class="label text-white bg-info">고급반</label>
                        <h3 data-animation="animated flipInX" class="m-b-10 m-t-0"><a href="#" class="link">다양한 게시판 스킨</a></h3>
                        <p data-animation="animated fadeInLeft" class="m-t-20">ace테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                        <h3 class="text-info m-b-0">₩685,000 </h3>
                    </div>
                    <div class="bg-light-extra p-40 specifiaction-box">
                        <div class="row">
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">총원</h6>
                                <h5 class="m-b-0 font-medium">4</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">등록완료</h6>
                                <h5 class="m-b-0 font-medium">2</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">등록가능</h6>
                                <h5 class="m-b-0 font-medium">1</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item card-shadow property-box" data-aos="fade-right">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/web/7.jpg" alt="" class="img-responsive" />
                    <div class="bg-white p-40 po-relative">
                        <label class="label text-white bg-success">중급반</label>
                        <h3 data-animation="animated flipInX" class="m-b-10 m-t-0"><a href="#" class="link">다양한 최근게시물 스킨</a></h3>
                        <p data-animation="animated fadeInLeft" class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                        <h3 class="text-info m-b-0">₩685,000 <span class="tag bg-danger">특별할인가</span></h3>
                    </div>
                    <div class="bg-light-extra p-40 specifiaction-box">
                        <div class="row">
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">총원</h6>
                                <h5 class="m-b-0 font-medium">4</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">등록완료</h6>
                                <h5 class="m-b-0 font-medium">2</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">등록가능</h6>
                                <h5 class="m-b-0 font-medium">1</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item card-shadow property-box" data-aos="fade-right">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/web/14.jpg" alt="" class="img-responsive" />
                    <div class="bg-white p-40 po-relative">
                        <label class="label text-white bg-success">중급반</label>
                        <h3 data-animation="animated flipInX" class="m-b-10 m-t-0"><a href="#" class="link">섹션 템플릿 라이브러리 제공</a></h3>
                        <p data-animation="animated fadeInLeft" class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                        <h3 class="text-info m-b-0">₩685,000 </h3>
                    </div>
                    <div class="bg-light-extra p-40 specifiaction-box">
                        <div class="row">
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">총원</h6>
                                <h5 class="m-b-0 font-medium">4</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">등록완료</h6>
                                <h5 class="m-b-0 font-medium">2</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">등록가능</h6>
                                <h5 class="m-b-0 font-medium">1</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item card-shadow property-box" data-aos="fade-right">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/web/18.jpg" alt="" class="img-responsive" />
                    <div class="bg-white p-40 po-relative">
                        <label class="label text-white bg-info">고급반</label>
                        <h3 data-animation="animated flipInX" class="m-b-10 m-t-0"><a href="#" class="link">11종류의 헤더(메뉴바) 제공 </a></h3>
                        <p data-animation="animated fadeInLeft" class="m-t-20">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</p>
                        <h3 class="text-info m-b-0">$685,000 <span class="tag bg-danger">특별할인가</span></h3>
                    </div>
                    <div class="bg-light-extra p-40 specifiaction-box">
                        <div class="row">
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">총원</h6>
                                <h5 class="m-b-0 font-medium">4</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">등록완료</h6>
                                <h5 class="m-b-0 font-medium">2</h5>
                            </div>
                            <div class="col-4">
                                <h6 class="specifiaction text-muted">등록가능</h6>
                                <h5 class="m-b-0 font-medium">1</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
            </div>
            <!-- row  -->
        </div>
        <script type="text/javascript">
            $('._card-slider-3').owlCarousel({
                loop: true,
                margin: 30,
                center: false,
                nav: false,
                dots: true,
                autoplay: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
        </script>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End 카드슬라이더 3  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>