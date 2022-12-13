<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_pricing.php" ) );
}

$g5['title'] = "가격표";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Pricing 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section pricing1 spacer bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="m-b-10">
                        <span class="label label-info label-rounded">가격표 1</span>
                    </div>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                    <div class="switcher-box m-t-40">
                        <span class="font-14 font-bold">월간</span>
                        <div class="onoffswitch dl vm m-l-10 m-r-10">
                            <input type="checkbox" name="onoffswitch1" class="onoffswitch-checkbox" id="myonoffswitch1">
                            <label class="onoffswitch-label" for="myonoffswitch1">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                        <span class="font-14 font-bold">연간</span>
                    </div>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-duration="1200">
                    <div class="card text-center card-shadow">
                        <div class="card-body font-14">
                            <h5 class="title">베이직</h5>
                            <h6 class="subtitle">3~5 도메인</h6>
                            <div class="pricing">
                                <sup>₩</sup>
                                <span class="monthly display-5">20,000</span>
                                <span class="yearly display-5">200,000</span>
                                <small class="monthly">/월</small>
                                <small class="yearly">/년</small>
                                <span class="db">연간결제시 <span class="">₩40,000</span> 할인</span>
                            </div>
                            <ul class="list-inline">
                                <li>다양한 게시판 스킨</li>
                                <li>다양한 최근게시물 스킨</li>
                                <li>섹션 템플릿 라이브러리 제공</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                            </ul>
                            <div class="bottom-btn">
                                <a class="btn btn-success-gradiant btn-md btn-arrow btn-block" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="card text-center card-shadow">
                        <div class="card-body font-14">
                            <span class="badge badge-danger p-10">인기상품</span>
                            <h5 class="title">스마트</h5>
                            <h6 class="subtitle">5~10 도메인</h6>
                            <div class="pricing">
                                <sup>₩</sup>
                                <span class="monthly display-5">30,000</span>
                                <span class="yearly display-5">300,000</span>
                                <small class="monthly">/월</small>
                                <small class="yearly">/년</small>
                                <span class="db">연간결제시 <span class="">₩60,000</span> 할인</span>
                            </div>
                            <ul class="list-inline">
                                <li>다양한 게시판 스킨</li>
                                <li>다양한 최근게시물 스킨</li>
                                <li>섹션 템플릿 라이브러리 제공</li>
                                <li>11종류의 헤더(메뉴바) 제공</li>
                                <li>&nbsp;</li>
                            </ul>
                            <div class="bottom-btn">
                                <a class="btn btn-danger-gradiant btn-md btn-arrow btn-block" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="card text-center card-shadow">
                        <div class="card-body font-14">
                            <h5 class="title">프로페셔널</h5>
                            <h6 class="subtitle">10-25 도메인</h6>
                            <div class="pricing">
                                <sup>₩</sup>
                                <span class="monthly display-5">50,000</span>
                                <span class="yearly display-5">500,000</span>
                                <small class="monthly">/월</small>
                                <small class="yearly">/년</small>
                                <span class="db">연간결제시 <span class="">₩100,000</span> 할인</span>
                            </div>
                            <ul class="list-inline">
                                <li>다양한 게시판 스킨</li>
                                <li>다양한 최근게시물 스킨</li>
                                <li>섹션 템플릿 라이브러리 제공</li>
                                <li>11종류의 헤더(메뉴바) 제공</li>
                                <li>6종류의 푸터 제공</li>
                            </ul>
                            <div class="bottom-btn">
                                <a class="btn btn-success-gradiant btn-md btn-arrow btn-block" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6" data-aos="fade-left" data-aos-duration="1200">
                    <div class="card text-center card-shadow">
                        <div class="card-body font-14">
                            <h5 class="title">엔터프라이즈</h5>
                            <h6 class="subtitle">25-100 도메인</h6>
                            <div class="pricing">
                                <sup>₩</sup>
                                <span class="monthly display-5">100,000</span>
                                <span class="yearly display-5">900,000</span>
                                <small class="monthly">/월</small>
                                <small class="yearly">/년</small>
                                <span class="db">연간결제시 <span class="">₩300,000</span> 할인</span>
                            </div>
                            <ul class="list-inline">
                                <li>다양한 게시판 스킨</li>
                                <li>다양한 최근게시물 스킨</li>
                                <li>섹션 템플릿 라이브러리 제공</li>
                                <li>11종류의 헤더(메뉴바) 제공</li>
                                <li>6종류의 푸터 제공</li>
                            </ul>
                            <div class="bottom-btn">
                                <a class="btn btn-success-gradiant btn-md btn-arrow btn-block" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function () {
                // this is for the pricing 1
                $(".pricing1 .onoffswitch-label").click(function() {
                    $(".pricing1 .monthly, .pricing1 .yearly").toggle();
                });
            });
        </script>
    </div>
    <textarea class="d-none _ta_section"></textarea>

    <!-- ============================================================== -->
    <!-- End Pricing 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Pricing 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section pricing2 spacer" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/web-full/11.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="m-b-10">
                        <span class="label label-info label-rounded">가격표 2</span>
                    </div>
                    <h1 class="text-white display-5">가격정책 안내</h1>
                    <h5 class="text-white">이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요</h5>
                </div>
            </div>
            <div class="row pricing-box">
                <div class="col-lg-5 col-md-5">
                    <div class="card card-shadow">
                        <div class="p-40">
                            <div class="d-flex no-block align-items-center mb-3">
                                <div class="plan-text">
                                    <h4 class="m-b-0">기본형</h4>
                                    <h6 class="subtitle">플랜</h6>
                                </div>
                                <div class="pricing-text ml-auto">
                                    <sup>₩</sup>
                                    <span>0</span>
                                </div>
                            </div>
                            <ul class="list-style-none mb-3">
                                <li>프로토타입 2가지 제공</li>
                                <li>템플릿 6개 제공</li>
                            </ul>
                            <a class="btn btn-outline-success btn-md btn-arrow btn-rounded" data-toggle="collapse" href="#f1"><span>무료로 사용 <i class="fas fa-arrow-right"></i></span></a>
	                        <?php echo $btn_copycode_str; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 above-card">
                    <div class="card card-shadow">
                        <div class="p-40">
                            <div class="d-flex no-block align-items-center mb-3">
                                <div class="plan-text">
                                    <h4 class="m-b-0">고급형</h4>
                                    <h6 class="subtitle">플랜</h6>
                                </div>
                                <div class="pricing-text ml-auto">
                                    <sup>₩</sup>
                                    <span>15,000</span>
                                </div>
                            </div>
                            <ul class="list-style-none mb-3">
                                <li class="font-bold">프로토타입 무제한 제공</li>
                                <li class="font-bold">템플릿 무제한 제공</li>
                                <li>5명 동시사용 가능</li>
                                <li>퀵 에디터 기능 제공</li>
                            </ul>
                            <a class="btn btn-success-gradiant btn-md btn-arrow btn-rounded" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Pricing 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Pricing 3  -->
    <!-- ============================================================== -->
    <div class="_ct_section pricing3 spacer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="m-b-10">
                        <span class="label label-info label-rounded">가격표 3</span>
                    </div>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 align-self-center" data-aos="fade-right">
                    <div class="nav flex-column nav-pills" role="tablist">
                        <a class="nav-link " data-toggle="pill" href="#p3-1" role="tab" aria-expanded="true">
                            <h2>₩0</h2>
                            <h6 class="subtitle">무료</h6>
                        </a>
                        <a class="nav-link active" data-toggle="pill" href="#p3-2" role="tab" aria-expanded="true">
                            <h2>₩5,000 <small>/ 월</small></h2>
                            <h6 class="subtitle">베이직</h6>
                        </a>
                        <a class="nav-link" data-toggle="pill" href="#p3-3" role="tab" aria-expanded="true">
                            <h2>₩9,900 <small>/ 월</small></h2>
                            <h6 class="subtitle">프리미엄</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8" data-aos="fade-left">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="p3-1" role="tabpanel">
                            <div class="row">
                                <!-- Column  -->
                                <div class="col-lg-7">
                                    <div class="pricing-box">
                                        <h2 class="text-uppercase title m-b-0">무료 플랜</h2>
                                        <h6 class="subtitle">월간 결제 상품</h6>
                                        <ul class="list-inline">
                                            <li><i class="text-info-gradiant far fa-laugh"></i> <span>1 프리미엄 이미지 <br/>1일당</span></li>
                                            <li><i class="text-info-gradiant far fa-laugh-wink"></i> <span>1 프리미엄 비디오 <br/>1일당</span></li>
                                            <li><i class="text-info-gradiant far fa-laugh-beam"></i> <span>프로필 수정 불가능</span></li>
                                        </ul>
                                        <div class="p-text">
                                            <span class="display-5 text-danger font-bold m-r-30 vm ">₩0</span>
                                            <a class="btn btn-danger-gradiant btn-md btn-arrow btn-rounded" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column  -->
                                <div class="col-lg-5 bg-image text-center align-items-end" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/bg-port/1.jpg)">
                                    <div class="quote-box">
                                        <h3 class="text-white font-medium m-b-40">
                                            에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                                        </h3>
                                        <h6 class="text-white">에이스테마의 특징</h6>
                                    </div>
                                </div>
                                <!-- Column  -->
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="p3-2" role="tabpanel">
                            <div class="row">
                                <!-- Column  -->
                                <div class="col-lg-7">
                                    <div class="pricing-box">
                                        <h2 class="text-uppercase title m-b-0">베이직 플랜</h2>
                                        <h6 class="subtitle">월간 결제 상품</h6>
                                        <ul class="list-inline">
                                            <li><i class="text-info-gradiant far fa-laugh"></i> <span>10 프리미엄 이미지 <br/>1일당</span></li>
                                            <li><i class="text-info-gradiant far fa-laugh-wink"></i> <span>10 프리미엄 비디오 <br/>1일당</span></li>
                                            <li><i class="text-info-gradiant far fa-laugh-beam"></i> <span>프로필 수정 가능</span></li>
                                        </ul>
                                        <div class="p-text">
                                            <span class="display-5 text-danger font-bold m-r-30 vm ">₩5,000</span>
                                            <a class="btn btn-danger-gradiant btn-md btn-arrow btn-rounded" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column  -->
                                <div class="col-lg-5 bg-image text-center align-items-end" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/bg-port/2.jpg)">
                                    <div class="quote-box">
                                        <h3 class="text-white font-medium m-b-40">
                                            또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다.
                                        </h3>
                                        <h6 class="text-white">에이스테마의 특징</h6>
                                    </div>
                                </div>
                                <!-- Column  -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="p3-3" role="tabpanel">
                            <div class="row">
                                <!-- Column  -->
                                <div class="col-lg-7">
                                    <div class="pricing-box">
                                        <h2 class="text-uppercase title m-b-0">프리미엄 플랜</h2>
                                        <h6 class="subtitle">월간 결제 상품</h6>
                                        <ul class="list-inline">
                                            <li><i class="text-info-gradiant far fa-laugh"></i> <span>50 프리미엄 이미지 <br/>1일당</span></li>
                                            <li><i class="text-info-gradiant far fa-laugh-wink"></i> <span>50 프리미엄 비디오 <br/>1일당</span></li>
                                            <li><i class="text-info-gradiant far fa-laugh-beam"></i> <span>프로필 수정 가능</span></li>
                                        </ul>
                                        <div class="p-text">
                                            <span class="display-5 text-danger font-bold m-r-30 vm ">₩9,900</span>
                                            <a class="btn btn-danger-gradiant btn-md btn-arrow btn-rounded" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column  -->
                                <div class="col-lg-5 bg-image text-center align-items-end" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/bg-port/3.jpg)">
                                    <div class="quote-box">
                                        <h3 class="text-white font-medium m-b-40">
                                            웹사이트 제작 더 이상 고민하지 마세요.
                                            <br/>에이스테마를 이용하면 단기간에 개발이 가능합니다.
                                        </h3>
                                        <h6 class="text-white">에이스테마의 특징</h6>
                                    </div>
                                </div>
                                <!-- Column  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Pricing 3  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Pricing 4  -->
    <!-- ============================================================== -->
    <div class="_ct_section pricing4 spacer bg-light">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="m-b-10">
                        <span class="label label-info label-rounded">가격표 4</span>
                    </div>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card card-shadow border" data-aos="flip-left" data-aos-duration="1200">
                        <img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/7.jpg" alt="">
                        <div class="p-30">
                            <h5 class=" m-b-0">에이스테마로 멋진 웹사이트 만들기</h5>
                            <h6 class="subtitle font-13">쉬운 웹사이트 구축</h6>
                            <ul class="general-listing only-li font-14 m-t-20">
                                <li><i class="fa fa-check-circle text-success"></i> 다양한 게시판 스킨 </li>
                                <li><i class="fa fa-check-circle text-success"></i> 다양한 최근게시물 스킨</li>
                                <li><i class="fa fa-check-circle text-success"></i> 섹션 템플릿 라이브러리 제공</li>
                                <li><i class="fa fa-check-circle text-success"></i> 11종류의 헤더(메뉴바) 제공</li>
                            </ul>
                            <div class="d-flex m-t-30 no-block align-items-center">
                                <h2 class="price">₩9,900<small> / 월</small></h2>
                                <div class="ml-auto"><a class="btn btn-danger-gradiant btn-rounded" data-toggle="collapse" href="">구매하기</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card card-shadow border" data-aos="flip-up" data-aos-duration="1200">
                        <img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/14.jpg" alt="">
                        <div class="p-30">
                            <h5 class=" m-b-0">쉽고 빠른 웹사이트 구축</h5>
                            <h6 class="subtitle font-13">쉬운 웹사이트 구축</h6>
                            <ul class="general-listing only-li font-14 m-t-20">
                                <li><i class="fa fa-check-circle text-success"></i> 다양한 게시판 스킨 </li>
                                <li><i class="fa fa-check-circle text-success"></i> 다양한 최근게시물 스킨</li>
                                <li><i class="fa fa-check-circle text-success"></i> 섹션 템플릿 라이브러리 제공</li>
                                <li><i class="fa fa-check-circle text-success"></i> 11종류의 헤더(메뉴바) 제공</li>
                            </ul>
                            <div class="d-flex m-t-30 no-block align-items-center">
                                <h2 class="price">₩14,900<small> / 월</small></h2>
                                <div class="ml-auto"><a class="btn btn-danger-gradiant btn-rounded" data-toggle="collapse" href="">구매하기</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4">
                    <div class="card card-shadow border" data-aos="flip-right" data-aos-duration="1200">
                        <img class="card-img-top" src="<?php echo G5_THEME_URL ?>/assets/images/web/18.jpg" alt="">
                        <div class="p-30">
                            <h5 class=" m-b-0">섹션 템플릿 라이브러리 제공</h5>
                            <h6 class="subtitle font-13">쉬운 웹사이트 구축</h6>
                            <ul class="general-listing only-li font-14 m-t-20">
                                <li><i class="fa fa-check-circle text-success"></i> 다양한 게시판 스킨 </li>
                                <li><i class="fa fa-check-circle text-success"></i> 다양한 최근게시물 스킨</li>
                                <li><i class="fa fa-check-circle text-success"></i> 섹션 템플릿 라이브러리 제공</li>
                                <li><i class="fa fa-check-circle text-success"></i> 11종류의 헤더(메뉴바) 제공</li>
                            </ul>
                            <div class="d-flex m-t-30 no-block align-items-center">
                                <h2 class="price">₩25,600<small> / 월</small></h2>
                                <div class="ml-auto"><a class="btn btn-danger-gradiant btn-rounded" data-toggle="collapse" href="">구매하기</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Pricing 4  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Pricing 5  -->
    <!-- ============================================================== -->
    <div class="_ct_section pricing5 spacer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="m-b-10">
                        <span class="label label-info label-rounded">가격표 5</span>
                    </div>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                    <div class="switcher-box m-t-40">
                        <span class="font-14 font-bold">월간</span>
                        <div class="onoffswitch dl vm m-l-10 m-r-10">
                            <input type="checkbox" name="onoffswitch5" class="onoffswitch-checkbox" id="myonoffswitch5">
                            <label class="onoffswitch-label" for="myonoffswitch5">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                        <span class="font-14 font-bold">연간</span>
                    </div>
                </div>
            </div>
            <div class="row text-center pricing-box">
                <div class="col-md-4">
                    <div class="card card-shadow" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/pricing/p5-img1.jpg)no-repeat">
                        <div class="card-body">
                            <h6 class="text-white m-t-30 m-b-0">베이직 패키지</h6>
                            <h2 class="text-white m-t-0 monthly">₩10,000</h2>
                            <h2 class="text-white m-t-0 yearly">₩100,000</h2>
                            <ul class="general-listing only-li">
                                <li>
                                    <h5>10 IMAGES</h5>
                                    <h6 class="subtitle">프리미엄 이미지 / 1일당</h6>
                                </li>
                                <li>
                                    <h5>05 Videos</h5>
                                    <h6 class="subtitle">프리미엄 비디오 / 1일당</h6>
                                </li>
                                <li>
                                    <h5>03 Users</h5>
                                    <h6 class="subtitle">동시사용자 수</h6>
                                </li>
                            </ul>
                            <a class="btn btn-outline-dark btn-md btn-arrow btn-rounded m-b-20" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 middle-box">
                    <div class="card card-shadow" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/pricing/p5-img2.jpg)no-repeat">
                        <div class="card-body">
                            <h6 class="text-white m-t-30 m-b-0">프로 패키지</h6>
                            <h2 class="text-white m-t-0 monthly">₩20,000</h2>
                            <h2 class="text-white m-t-0 yearly">₩180,000</h2>
                            <div class="star-plan m-t-20"><img src="<?php echo G5_THEME_URL ?>/assets/images/pricing/star.png" alt="" /></div>
                            <ul class="general-listing only-li">
                                <li>
                                    <h5>20 IMAGES</h5>
                                    <h6 class="subtitle">프리미엄 이미지 / 1일당</h6>
                                </li>
                                <li>
                                    <h5>10 Videos</h5>
                                    <h6 class="subtitle">프리미엄 비디오 / 1일당</h6>
                                </li>
                                <li>
                                    <h5>05 Users</h5>
                                    <h6 class="subtitle">동시사용자 수</h6>
                                </li>
                            </ul>
                            <a class="btn btn-dark-gradiant btn-md btn-arrow btn-rounded m-b-20" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-shadow" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/pricing/p5-img3.jpg)no-repeat">
                        <div class="card-body">
                            <h6 class="text-white m-t-30 m-b-0">스마트 패키지</h6>
                            <h2 class="text-white m-t-0 monthly">₩15,000</h2>
                            <h2 class="text-white m-t-0 yearly">₩150,000</h2>
                            <ul class="general-listing only-li">
                                <li>
                                    <h5>50 IMAGES</h5>
                                    <h6 class="subtitle">프리미엄 이미지 / 1일당</h6>
                                </li>
                                <li>
                                    <h5>25 Videos</h5>
                                    <h6 class="subtitle">프리미엄 비디오 / 1일당</h6>
                                </li>
                                <li>
                                    <h5>10 Users</h5>
                                    <h6 class="subtitle">동시사용자 수</h6>
                                </li>
                            </ul>
                            <a class="btn btn-outline-dark btn-md btn-arrow btn-rounded m-b-20" data-toggle="collapse" href="#f1"><span>구매하기 <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(".pricing5 .onoffswitch-label").click(function() {
                $(".pricing5 .monthly, .pricing5 .yearly").toggle();
            });
        </script>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- Pricing 5  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Pricing 6  -->
    <!-- ============================================================== -->
    <div class="_ct_section pricing6 spacer bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="m-b-10">
                        <span class="label label-info label-rounded">가격표 6</span>
                    </div>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- row  -->
            <div class="row m-t-40">
                <!-- column  -->
                <div class="col-md-6">
                    <div class="card card-shadow">
                        <div class="card-body p-30">
                            <div class="d-flex align-items-center no-block">
                                <h5 class=" m-b-0">Basic Plan</h5>
                                <div class="ml-auto"><span class="badge badge-danger p-10">인기상품</span></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 text-center">
                                    <div class="price-box">
                                        <sup>₩</sup><span class="text-dark display-5">36,000</span>
                                        <h6 class="font-light">월간</h6>
                                        <a class="btn btn-info-gradiant p-15 btn-arrow btn-block m-t-20" data-toggle="collapse" href="#">구매하기 </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <ul class="general-listing only-li font-14  text-dark">
                                        <li><i class="fa fa-check-circle text-info"></i> <span>다양한 게시판 스킨 </span></li>
                                        <li><i class="fa fa-check-circle text-info"></i> <span>다양한 최근게시물 스킨</span></li>
                                        <li><i class="fa fa-check-circle text-info"></i> <span>섹션 템플릿 라이브러리 제공</span></li>
                                        <li><i class="fa fa-check-circle text-info"></i> <span>11종류의 헤더(메뉴바) 제공</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-md-6">
                    <div class="card card-shadow">
                        <div class="card-body p-30">
                            <div class="d-flex align-items-center no-block">
                                <h5 class=" m-b-0">Advanced Plan</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 text-center">
                                    <div class="price-box">
                                        <sup>₩</sup><span class="text-dark display-5">300,000</span>
                                        <h6 class="font-light">연간</h6>
                                        <a class="btn btn-info-gradiant p-15 btn-arrow btn-block m-t-20" data-toggle="collapse" href="#">구매하기 </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <ul class="general-listing only-li font-14  text-dark">
                                        <li><i class="fa fa-check-circle text-info"></i> <span>다양한 게시판 스킨 </span></li>
                                        <li><i class="fa fa-check-circle text-info"></i> <span>다양한 최근게시물 스킨</span></li>
                                        <li><i class="fa fa-check-circle text-info"></i> <span>섹션 템플릿 라이브러리 제공</span></li>
                                        <li><i class="fa fa-check-circle text-info"></i> <span>11종류의 헤더(메뉴바) 제공</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column  -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Pricing 6  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Pricing 7  -->
    <!-- ============================================================== -->
    <div class="_ct_section pricing7 spacer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="m-b-10">
                        <span class="label label-info label-rounded">가격표 7</span>
                    </div>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- row  -->
            <div class="row m-t-40">
                <!-- column  -->
                <div class="col-md-7">
                    <div class="row">
                        <!-- column  -->
                        <div class="col-lg-6">
                            <div class="card">
                                <i class="fas fa-layer-group fa-3x text-info"></i>
                                <h5 class=" m-t-20">다양한 게시판 스킨</h5>
                                <p class="m-t-20">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            </div>
                        </div>
                        <!-- column  -->
                        <!-- column  -->
                        <div class="col-lg-6">
                            <div class="card">
                                <i class="fas fa-images fa-3x text-info"></i>
                                <h5 class=" m-t-20">다양한 최근게시물 스킨</h5>
                                <p class="m-t-20">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</p>
                            </div>
                        </div>
                        <!-- column  -->
                        <!-- column  -->
                        <div class="col-lg-6">
                            <div class="card">
                                <i class="fas fa-swatchbook fa-3x text-info"></i>
                                <h5 class=" m-t-20">섹션 템플릿 라이브러리 제공</h5>
                                <p class="m-t-20">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</p>
                            </div>
                        </div>
                        <!-- column  -->
                        <!-- column  -->
                        <div class="col-lg-6">
                            <div class="card">
                                <i class="fas fa-heading fa-3x text-info"></i>
                                <h5 class=" m-t-20">11종류의 헤더(메뉴바) 제공</h5>
                                <p class="m-t-20">에이스테마는 11종류의 헤더(메뉴바)를 제공하기 때문에 웹사이트의 목적에 맞는 헤더 선택를 골라서 사용할 수 있습니다.</p>
                            </div>
                        </div>
                        <!-- column  -->
                    </div>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-md-4 ml-auto pricing-box align-self-center">
                    <div class="card b-all ">
                        <div class="card-body p-30 text-center">
                            <h5>Master Plan</h5>
                            <sup>₩</sup><span class="text-dark display-5">69,000</span>
                            <h6 class="font-light font-14">연간</h6>
                            <p class="m-t-40">웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다.</p>
                        </div>
                        <a class="btn btn-info-gradiant p-15 btn-arrow btn-block " data-toggle="collapse" href="#">구매하기</a>
                    </div>
                </div>
                <!-- column  -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Pricing 7  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Pricing 8  -->
    <!-- ============================================================== -->
    <div class="_ct_section pricing8 spacer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="m-b-10">
                        <span class="label label-info label-rounded">가격표 8</span>
                    </div>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- row  -->
            <div class="row m-t-40">
                <!-- column  -->
                <div class="col-md-4 ml-auto pricing-box align-self-center">
                    <div class="card b-all ">
                        <div class="card-body p-30 text-center">
                            <h5>기본형</h5>
                            <sup>₩</sup><span class="text-dark display-5">39,000</span>
                            <h6 class="font-light font-14">연간</h6>
                            <p class="m-t-40">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다!</p>
                        </div>
                        <a class="btn btn-info-gradiant p-15 btn-arrow btn-block " data-toggle="collapse" href="#">구매하기 </a>
                    </div>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-md-4 ml-auto pricing-box align-self-center">
                    <div class="card b-all ">
                        <div class="card-body p-30 text-center">
                            <h5>고급형</h5>
                            <sup>₩</sup><span class="text-dark display-5">49,000</span>
                            <h6 class="font-light font-14">연간</h6>
                            <p class="m-t-40">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다!</p>
                        </div>
                        <a class="btn btn-danger-gradiant p-15 btn-arrow btn-block " data-toggle="collapse" href="#">구매하기 </a>
                    </div>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-md-4 ml-auto pricing-box align-self-center">
                    <div class="card b-all ">
                        <div class="card-body p-30 text-center">
                            <h5>프리미엄 패키지</h5>
                            <sup>₩</sup><span class="text-dark display-5">69,000</span>
                            <h6 class="font-light font-14">연간</h6>
                            <p class="m-t-40">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다!</p>
                        </div>
                        <a class="btn btn-info-gradiant p-15 btn-arrow btn-block " data-toggle="collapse" href="#">구매하기 </a>
                    </div>
                </div>
                <!-- column  -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Pricing 8  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>