<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_testimonial.php" ) );
}

$g5['title'] = "고객후기";
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
            <span class="font-bold">아래의 코드들은 [코드복사 버튼]을 통해서 복사가 불가능하기 때문에, <span class="text-danger">theme/ace/_temp_testimonial.php</span> 파일을 열어서 <span class="text-danger">직접 복사해서 사용</span>해야 합니다!</span>
        </div>
    </div>

    <hr class="m-0">

    <!-- ============================================================== -->
    <!-- Testimonial 1  -->
    <!-- ============================================================== -->
    <div class="testimonial1 spacer bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">고객후기 1</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <!-- Row  -->
            <div class="owl-carousel owl-theme testi1 m-t-40">
                <!-- item -->
                <div class="item">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <div class="thumb bg-success-gradiant font-bold"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/1.jpg" alt="" class="thumb-img circle" /> 홍길동</div>
                            <h5 class="font-light">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.</h5>
                            <span class="devider"></span>
                            <h6>웹 프로그래머 / 프리랜서</h6>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <div class="thumb bg-success-gradiant font-bold"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/2.jpg" alt="" class="thumb-img circle" /> 김민수</div>
                            <h5 class="font-light">섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있어서 너무나 편리하네요! 정말 단기간에 개발이 가능하네요. 강력하게 추천합니다.</h5>
                            <span class="devider"></span>
                            <h6>웹 디자이너 / 코리아그룹 홍보실</h6>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <div class="thumb bg-success-gradiant font-bold"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/3.jpg" alt="" class="thumb-img circle" /> 박은지</div>
                            <h5 class="font-light">게시판 스킨을 에이스테마는 50여종이나 제공하기 때문에 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있었습니다.</h5>
                            <span class="devider"></span>
                            <h6>웹 퍼플리셔 / 한국그룹 연구소 선임</h6>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <div class="thumb bg-success-gradiant font-bold"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/4.jpg" alt="" class="thumb-img circle" /> 김민희</div>
                            <h5 class="font-light">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공한다는게 너무 좋았습니다. 웹사이트 제작의 신세계를 경험했어요!</h5>
                            <span class="devider"></span>
                            <h6>IT 컨설턴트 / 마이크론소프트 선임</h6>
                        </div>
                    </div>
                </div>
                <!-- item -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Testimonial 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Testimonial 2  -->
    <!-- ============================================================== -->
    <div class="testimonial2 spacer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">고객후기 2</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <div class="owl-carousel owl-theme testi2 m-t-40">
                <div class="item">
                    <div class="row po-relative">
                        <div class="col-lg-6 col-md-6 align-self-center">
                            <button class="btn btn-circle btn-danger btn-md"><i class="fa fa-quote-left"></i></button>
                            <h3 class="m-t-20 m-b-20">생생한 고객후기</h3>
                            <p>
                                에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다.
                            </p>
                            <h5 class="m-t-30">홍길동</h5>
                            <h6 class="subtitle">웹 프로그래머 / 프리랜서</h6>
                        </div>
                        <div class="col-lg-6 col-md-6 image-thumb hidden-md-down">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/5.jpg" alt="" class="circle img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row po-relative">
                        <div class="col-lg-6 col-md-6 align-self-center">
                            <button class="btn btn-circle btn-danger btn-md"><i class="fa fa-quote-left"></i></button>
                            <h3 class="m-t-20 m-b-20">생생한 고객후기</h3>
                            <p>
                                섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있어서 너무나 편리하네요! 정말 단기간에 개발이 가능하네요. 강력하게 추천합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.
                            </p>
                            <h5 class="m-t-30">김민수</h5>
                            <h6 class="subtitle">웹 디자이너 / 코리아그룹 홍보실</h6>
                        </div>
                        <div class="col-lg-6 col-md-6 image-thumb hidden-md-down">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/6.jpg" alt="" class="circle img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row po-relative">
                        <div class="col-lg-6 col-md-6 align-self-center">
                            <button class="btn btn-circle btn-danger btn-md"><i class="fa fa-quote-left"></i></button>
                            <h3 class="m-t-20 m-b-20">생생한 고객후기</h3>
                            <p>
                                게시판 스킨을 에이스테마는 50여종이나 제공하기 때문에 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있었습니다. 웹사이트 제작의 신세계를 경험해 보세요! 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다.
                            </p>
                            <h5 class="m-t-30">박은지</h5>
                            <h6 class="subtitle">웹 퍼플리셔 / 한국그룹 연구소 선임</h6>
                        </div>
                        <div class="col-lg-6 col-md-6 image-thumb hidden-md-down">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/7.jpg" alt="" class="circle img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Testimonial 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Testimonial 3  -->
    <!-- ============================================================== -->
    <div class="testimonial3 spacer bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">고객후기 3</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <!-- Row  -->
            <div class="owl-carousel owl-theme testi3 m-t-40">
                <!-- item -->
                <div class="item" data-aos="fade-right">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <h6 class="font-light m-b-30">“에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 추천합니다.^^”</h6>
                            <div class="d-flex no-block align-items-center">
                                <span class="thumb-img"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/8.jpg" alt="" class="circle"/></span>
                                <div class="m-l-20">
                                    <h6 class="m-b-0 customer">홍길동</h6>
                                    <div class="font-10">
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item" data-aos="fade-up">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <h6 class="font-light m-b-30">“섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있어서 너무나 편리하네요! 정말 단기간에 개발이 가능하네요. 추천해요~”</h6>
                            <div class="d-flex no-block align-items-center">
                                <span class="thumb-img"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/9.jpg" alt="" class="circle"/></span>
                                <div class="m-l-20">
                                    <h6 class="m-b-0 customer">김민수</h6>
                                    <div class="font-10">
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item" data-aos="fade-left">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <h6 class="font-light m-b-30">“게시판 스킨을 에이스테마는 50여종이나 제공하기 때문에 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있었습니다. 꼭 한번 사용해보세요!”</h6>
                            <div class="d-flex no-block align-items-center">
                                <span class="thumb-img"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/10.jpg" alt="" class="circle"/></span>
                                <div class="m-l-20">
                                    <h6 class="m-b-0 customer">박은지</h6>
                                    <div class="font-10">
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <h6 class="font-light m-b-30">“에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공한다는게 너무 좋았습니다. 웹사이트 제작의 신세계를 경험했어요! 만족합니다~”</h6>
                            <div class="d-flex no-block align-items-center">
                                <span class="thumb-img"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/11.jpg" alt="" class="circle"/></span>
                                <div class="m-l-20">
                                    <h6 class="m-b-0 customer">김민희</h6>
                                    <div class="font-10">
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                        <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Testimonial 3  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Testimonial 4  -->
    <!-- ============================================================== -->
    <div class="testimonial4 spacer">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">고객후기 4</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-7 align-self-center" data-aos="fade-right">
                    <h2>이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요!</h2>
                    <div class="owl-carousel owl-theme testi4 m-t-40">
                        <!-- item -->
                        <div class="item">
                            <p>에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</p>
                            <h6 class="m-t-40 m-b-0">홍길동</h6>
                            <span>웹 프로그래머 / 프리랜서</span>
                        </div>
                        <!-- item -->
                        <!-- item -->
                        <div class="item">
                            <p>섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있어서 너무나 편리하네요! 정말 단기간에 개발이 가능하네요. 강력하게 추천합니다. 후회없으실 겁니다!</p>
                            <h6 class="m-t-40 m-b-0">김민수</h6>
                            <span>웹 디자이너 / 코리아그룹 홍보실</span>
                        </div>
                        <!-- item -->
                        <!-- item -->
                        <div class="item">
                            <p>게시판 스킨을 에이스테마는 50여종이나 제공하기 때문에 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있었습니다. 꼭 한번 사용해 보세요! 다른 테마랑 확실히 틀립니다.</p>
                            <h6 class="m-t-40 m-b-0">박은지</h6>
                            <span>웹 퍼플리셔 / 한국그룹 연구소 선임</span>
                        </div>
                        <!-- item -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-5" data-aos="fade-left">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/testimonial/women.png" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Testimonial 4  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Testimonial 5 -->
    <!-- ============================================================== -->
    <div class="testimonial5 spacer bg-inverse">
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">고객후기 5</span>
                    <h2 class="title text-white">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle text-white">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <!-- Row -->
            <div class="owl-carousel owl-theme testi5 m-t-40 text-center">
                <!-- item -->
                <div class="item">
                    <div class="content">“에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.”</div>
                    <div class="customer-thumb">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/13.jpg" alt="" class="circle" />
                        <h6 class="text-white m-b-0">홍길동</h6>
                        <p>웹 프로그래머 / 프리랜서</p>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="content">“섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있어서 너무나 편리하네요! 정말 단기간에 개발이 가능하네요. 강력하게 추천합니다. 후회없으실 겁니다!”</div>
                    <div class="customer-thumb">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/14.jpg" alt="" class="circle" />
                        <h6 class="text-white m-b-0">김민수</h6>
                        <p>웹 디자이너 / 코리아그룹 홍보실</p>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="content">“게시판 스킨을 에이스테마는 50여종이나 제공하기 때문에 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있었습니다. 꼭 한번 사용해 보세요! 다른 테마랑 확실히 틀립니다.”</div>
                    <div class="customer-thumb">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/15.jpg" alt="" class="circle" />
                        <h6 class="text-white m-b-0">박은지</h6>
                        <p>웹 퍼플리셔 / 한국그룹 연구소 선임</p>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="content">“에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공한다는게 너무 좋았습니다. 웹사이트 제작의 신세계를 경험했어요! 정말 추천하고픈 테마입니다.”</div>
                    <div class="customer-thumb">
                        <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/16.jpg" alt="" class="circle" />
                        <h6 class="text-white m-b-0">김민희</h6>
                        <p>IT 컨설턴트 / 마이크론소프트 선임</p>
                    </div>
                </div>
                <!-- item -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Testimonial 5  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Testimonial 6 -->
    <!-- ============================================================== -->
    <div class="testimonial6 spacer">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">고객후기 6</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3" data-aos="fade-right">
                    <div class="nav flex-column nav-pills testi6" id="v-pills-tab" role="tablist">
                        <a class="nav-link active" data-toggle="pill" href="#t6-1" role="tab" aria-controls="t6-1" aria-expanded="true">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/17.jpg" alt="" class="circle" />
                        </a>
                        <a class="nav-link" data-toggle="pill" href="#t6-2" role="tab" aria-controls="t6-2" aria-expanded="true">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/18.jpg" alt="" class="circle" />
                        </a>
                        <a class="nav-link" data-toggle="pill" href="#t6-3" role="tab" aria-controls="t6-3" aria-expanded="true">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/19.jpg" alt="" class="circle" />
                        </a>
                        <a class="nav-link" data-toggle="pill" href="#t6-4" role="tab" aria-controls="t6-4" aria-expanded="true">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/20.jpg" alt="" class="circle" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 ml-auto align-self-center" data-aos="fade-up">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="t6-1" role="tabpanel">
                            <h2 class="font-medium">웹사이트를 풍성하게 꾸밀수 있어서 좋아요!</h2>
                            <h6 class="subtitle m-t-40">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</h6>
                            <div class="d-flex m-t-40">
                                <div>
                                    <h5 class="m-b-0 text-uppercase">홍길동</h5>
                                    <h6 class="subtitle">웹 프로그래머 / 프리랜서</h6>
                                </div>
                                <button class="btn btn-circle btn-danger btn-md ml-auto"><i class="fa fa-quote-left"></i></button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t6-2" role="tabpanel">
                            <h2 class="font-medium">단기간에 개발을 가능하게 해줍니다!</h2>
                            <h6 class="subtitle m-t-40">섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있어서 너무나 편리하네요! 정말 단기간에 개발이 가능하네요. 강력하게 추천합니다. 후회없으실 겁니다!</h6>
                            <div class="d-flex m-t-40">
                                <div>
                                    <h5 class="m-b-0 text-uppercase">김민수</h5>
                                    <h6 class="subtitle">웹 디자이너 / 코리아그룹 홍보실</h6>
                                </div>
                                <button class="btn btn-circle btn-danger btn-md ml-auto"><i class="fa fa-quote-left"></i></button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t6-3" role="tabpanel">
                            <h2 class="font-medium">다른 테마랑 확실히 틀리네요!</h2>
                            <h6 class="subtitle m-t-40">게시판 스킨을 에이스테마는 50여종이나 제공하기 때문에 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있었습니다. 꼭 한번 사용해 보세요! 다른 테마랑 확실히 틀립니다.</h6>
                            <div class="d-flex m-t-40">
                                <div>
                                    <h5 class="m-b-0 text-uppercase">박은지</h5>
                                    <h6 class="subtitle">웹 퍼플리셔 / 한국그룹 연구소 선임</h6>
                                </div>
                                <button class="btn btn-circle btn-danger btn-md ml-auto"><i class="fa fa-quote-left"></i></button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t6-4" role="tabpanel">
                            <h2 class="font-medium">신세계를 경험했어요!</h2>
                            <h6 class="subtitle m-t-40">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공한다는게 너무 좋았습니다. 웹사이트 제작의 신세계를 경험했어요! 정말 추천하고픈 테마입니다.</h6>
                            <div class="d-flex m-t-40">
                                <div>
                                    <h5 class="m-b-0 text-uppercase">김민희</h5>
                                    <h6 class="subtitle">IT 컨설턴트 / 마이크론소프트 선임</h6>
                                </div>
                                <button class="btn btn-circle btn-danger btn-md ml-auto"><i class="fa fa-quote-left"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Testimonial 6 -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Testimonial 7 -->
    <!-- ============================================================== -->
    <div class="testimonial7 spacer bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">고객후기 7</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <div class="owl-carousel owl-theme testi7">
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/12.jpg" alt="" class="img-responsive img-thumbnail" />
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <h3 class="text-uppercase title">다양한 게시판 스킨</h3>
                            <p class="m-t-30">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 </p>
                            <h6 class="m-t-40 m-b-0">홍길동</h6>
                            <span>웹 프로그래머 / 프리랜서</span>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/15.jpg" alt="" class="img-responsive img-thumbnail" />
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <h3 class="text-uppercase title">섹션 템플릿 라이브러리 제공</h3>
                            <p class="m-t-30">섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있어서 너무나 편리하네요! 정말 단기간에 개발이 가능하네요. 강력하게 추천합니다. 후회없으실 겁니다!</p>
                            <h6 class="m-t-40 m-b-0">김민수</h6>
                            <span>웹 디자이너 / 코리아그룹 홍보실</span>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/18.jpg" alt="" class="img-responsive img-thumbnail" />
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <h3 class="text-uppercase title">다양한 최근게시물 스킨</h3>
                            <p class="m-t-30">게시판 스킨을 에이스테마는 50여종이나 제공하기 때문에 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있었습니다. 꼭 한번 사용해 보세요! 다른 테마랑 확실히 틀립니다.</p>
                            <h6 class="m-t-40 m-b-0">박은지</h6>
                            <span>웹 퍼플리셔 / 한국그룹 연구소 선임</span>
                        </div>
                    </div>
                </div>
                <!-- item -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Testimonial 7 -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Testimonial 8 -->
    <!-- ============================================================== -->
    <div class="testimonial8">
        <div class="owl-carousel owl-theme testi8 text-center">
            <!-- item -->
            <div class="item">
                <div class="bg" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/testimonial/background1.jpg)">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10">
                                <span class="label label-success label-rounded">고객후기 8</span>
                                <h2 class="text-white m-t-20">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</h2>
                                <a href="#" class="play-icon m-t-20 db" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-play-circle"></i></a>
                                <h5 class="text-white m-b-0 m-t-30">홍길동</h5>
                                <span class="text-white font-13">웹 프로그래머 / 프리랜서</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="item">
                <div class="bg" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/testimonial/background2.jpg)">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10">
                                <span class="label label-success label-rounded">고객후기 8</span>
                                <h2 class="text-white m-t-20">섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있어서 너무나 편리하네요! 정말 단기간에 개발이 가능하네요. 강력하게 추천합니다. 후회없으실 겁니다!</h2>
                                <a href="#" class="play-icon m-t-20 db" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-play-circle"></i></a>
                                <h5 class="text-white m-b-0 m-t-30">김민수</h5>
                                <span class="text-white font-13">웹 디자이너 / 코리아그룹 홍보실</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <!-- item -->
            <div class="item">
                <div class="bg" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/testimonial/background3.jpg)">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10">
                                <span class="label label-success label-rounded">고객후기 8</span>
                                <h2 class="text-white m-t-20">게시판 스킨을 에이스테마는 50여종이나 제공하기 때문에 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있었습니다. 꼭 한번 사용해 보세요! 다른 테마랑 확실히 틀립니다.</h2>
                                <a href="#" class="play-icon m-t-20 db" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-play-circle"></i></a>
                                <h5 class="text-white m-b-0 m-t-30">박은지</h5>
                                <span class="text-white font-13">웹 퍼플리셔 / 한국그룹 연구소 선임</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
        </div>
        <!-- Popup -->
        <div class="modal fade" id="exampleModal">
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
        <!-- Popup -->
    </div>
    <!-- ============================================================== -->
    <!-- End Testimonial 8 -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Testimonial 9 -->
    <!-- ============================================================== -->
    <div class="testimonial9 spacer bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">고객후기 9</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <h2 class="m-t-40">고객들의 실사용 후기</h2>
                    <span class="devider bg-info"></span>
                    <p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
                </div>
                <div class="col-lg-6 col-md-6 ml-auto">
                    <div class="owl-carousel owl-theme testi9">
                        <!-- item -->
                        <div class="item">
                            <div class="card card-shadow">
                                <div class="p-40">
                                    <h5 class="text">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</h5>
                                </div>
                            </div>
                            <div class="d-flex no-block align-items-center">
                                <div class="customer-thumb"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/1.jpg" alt="" class="circle" /></div>
                                <div class="">
                                    <h6 class="font-bold m-b-0">홍길동</h6>
                                    <span class="font-13">웹 프로그래머 / 프리랜서</span>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <!-- item -->
                        <div class="item">
                            <div class="card card-shadow">
                                <div class="p-40">
                                    <h5 class="text">섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있어서 너무나 편리하네요! 정말 단기간에 개발이 가능하네요. 강력하게 추천합니다. 후회없으실 겁니다!</h5>
                                </div>
                            </div>
                            <div class="d-flex no-block align-items-center">
                                <div class="customer-thumb"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/3.jpg" alt="" class="circle" /></div>
                                <div class="">
                                    <h6 class="font-bold m-b-0">김민수</h6>
                                    <span class="font-13">웹 디자이너 / 코리아그룹 홍보실</span>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <!-- item -->
                        <div class="item">
                            <div class="card card-shadow">
                                <div class="p-40">
                                    <h5 class="text">게시판 스킨을 에이스테마는 50여종이나 제공하기 때문에 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있었습니다. 꼭 한번 사용해 보세요! 다른 테마랑 확실히 틀립니다.</h5>
                                </div>
                            </div>
                            <div class="d-flex no-block align-items-center">
                                <div class="customer-thumb"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/5.jpg" alt="" class="circle" /></div>
                                <div class="">
                                    <h6 class="font-bold m-b-0">박은지</h6>
                                    <span class="font-13">웹 퍼플리셔 / 한국그룹 연구소 선임</span>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Testimonial 9 -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Testimonial 10 -->
    <!-- ============================================================== -->
    <div class="testimonial10 spacer bg-success-gradiant">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="label label-info label-rounded">고객후기 10</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                </div>
            </div>
            <div class="owl-carousel owl-theme text-center testi10">
                <!-- item -->
                <div class="item">
                    <div class="quote-bg">
                        <h3 class="font-light text-white">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</h3>
                    </div>
                    <div class="customer-thumb"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/7.jpg" alt="" class="circle" /></div>
                    <h6 class="text-white m-b-0 font-medium">홍길동</h6>
                    <span class="text-white">웹 프로그래머 / 프리랜서</span>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="quote-bg">
                        <h3 class="font-light text-white">섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있어서 너무나 편리하네요! 정말 단기간에 개발이 가능하네요. 강력하게 추천합니다. 후회없으실 겁니다!</h3>
                    </div>
                    <div class="customer-thumb"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/9.jpg" alt="" class="circle" /></div>
                    <h6 class="text-white m-b-0 font-medium">김민수</h6>
                    <span class="text-white">웹 디자이너 / 코리아그룹 홍보실</span>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="item">
                    <div class="quote-bg">
                        <h3 class="font-light text-white">게시판 스킨을 에이스테마는 50여종이나 제공하기 때문에 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있었습니다. 꼭 한번 사용해 보세요! 다른 테마랑 확실히 틀립니다.</h3>
                    </div>
                    <div class="customer-thumb"><img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/11.jpg" alt="" class="circle" /></div>
                    <h6 class="text-white m-b-0 font-medium">박은지</h6>
                    <span class="text-white">웹 퍼플리셔 / 한국그룹 연구소 선임</span>
                </div>
                <!-- item -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Testimonial 10 -->
    <!-- ============================================================== -->



</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>