<?php
include_once "./_common.php";

/*if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_form-banner.php" ) );
}*/

$g5['title'] = "폼배너";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Form 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light">
        <section>
            <div id="banner1" class="banner spacer" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/form-banners/banner1/banner-bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-5 align-self-center" data-aos="fade-right" data-aos-duration="1500">
                            <h1 class="title">
                                에이스테마로<br/>
                                멋진 웹사이트 만들기
                            </h1>
                            <p class="m-t-40 m-b-30">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                            <div class="m-t-40">
                                <input type="text" name="email" placeholder="이메일주소를 입력하세요" class="font-16" />
                                <input type="submit" value="시작하기" class="bg-success-gradiant font-medium font-16 btn-rounded text-uppercase text-white text-center" />
                            </div>
	                        <?php echo $btn_copycode_str; ?>
                        </div>
                        <div class="col-md-5 col-lg-6 align-self-center ml-auto" data-aos="fade-left" data-aos-duration="1500">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/form-banners/banner1/banner-img.png" alt="We are Digital Agency" class="img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Form 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Form 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer form2">
        <div class="container">
            <div class="row">
                <!-- Column -->
                <div class="col-lg-6 p-r-40" data-aos="flip-up" data-aos-duration="1200">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/form/1.jpg" class="img-shadow img-responsive" alt="" />
                </div>

                <div class="col-lg-6">
                    <div class="text-box">
                        <h1 class="">에이스테마로 웹사이트 구축</h1>
                        <p>에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                        <form class="m-t-20" data-aos="fade-left" data-aos-duration="1200">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="이메일">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="비밀번호">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="비밀번호 확인">
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex">
                                    <button type="submit" class="btn btn-md btn-danger-gradiant btn-arrow"><span> 회원가입 <i class="fas fa-arrow-right"></i></span></button>
                                    <div class="have-ac ml-auto align-self-center">이미 가입하셨나요? <a href="#" class="text-danger">로그인</a></div>
                                </div>
                            </div>
	                        <?php echo $btn_copycode_str; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Form 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Form 3  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light">
        <section>
            <div id="banner2" class="banner spacer" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/form-banners/banner2/banner-bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-5" data-aos="fade-up" data-aos-duration="1500">
                            <h2 class="title text-danger text-uppercase">상담 예약하기</h2>
                            <div class="bg-white">
                                <div class="form-row b-b">
                                    <div class="p-30 left b-r w-50">
                                        <label class="text-inverse font-12 font-bold text-uppercase">이름</label>
                                        <input type="text" class="b-0 p-0 font-14 form-control" placeholder="이름을 입력" />
                                    </div>
                                    <div class="p-30 right w-50">
                                        <label class="text-inverse font-12 font-bold text-uppercase">성별</label>
                                        <input type="text" class="b-0 p-0 font-14 form-control" placeholder="성별을 입력" />
                                    </div>
                                </div>
                                <div class="form-row b-b p-30">
                                    <label class="text-inverse font-12 font-bold text-uppercase">이메일</label>
                                    <input type="text" class="b-0 p-0 font-14 form-control" placeholder="이메일주소를 입력" />
                                </div>
                                <div class="form-row b-b p-30">
                                    <label class="text-inverse font-12 font-bold text-uppercase">핸드폰번호</label>
                                    <input type="text" class="b-0 p-0 font-14 form-control" placeholder="핸드폰번호를 입력" />
                                </div>
                                <div class="form-row b-b p-30 po-relative">
                                    <label class="text-inverse font-12 font-bold text-uppercase">예약일자</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="b-0 p-0 font-14 form-control" placeholder="예약일자를 입력" aria-label="Select the Appointment Date" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-light" type="button" id="button-addon2">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row b-b p-30">
                                    <label class="text-inverse font-12 font-bold text-uppercase">특이사항</label>
                                    <textarea class="b-0 font-light p-0 font-14 form-control" placeholder="전하실 말씀이 있다면 입력"></textarea>
                                </div>
                                <div>
                                    <button class="m-0 b-0 p-t-30 p-b-30 font-16 font-bold bg-danger-gradiant btn btn-block btn-arrow text-center text-white text-uppercase">
                                        <span>예약하기 <i class="fas fa-arrow-right"></i></span>
                                    </button>
                                </div>
                            </div>
	                        <?php echo $btn_copycode_str; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Form 3  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Form 4  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer form4">
        <div class="container">
            <div class="row">
                <!-- Column -->
                <div class="col-lg-6 p-r-40" data-aos="flip-up" data-aos-duration="1200">
                    <h1 class="">에이스테마로 웹사이트 구축</h1>
                    <p>에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                    <p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
                    <button data-toggle="modal" data-target="#exampleModal" class="video-link btn btn-outline-danger btn-md btn-rounded m-t-20 m-b-30">
                        <span><i class="fas fa-play m-r-10"></i>동영상보기 </span>
                    </button>
                </div>
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
                <div class="col-lg-5 ml-auto">
                    <div class="text-box">
                        <form data-aos="fade-left" data-aos-duration="1200">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="이름">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="성별">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="이메일">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="비밀번호">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="비밀번호 확인">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="col-auto my-1">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                                <label class="custom-control-label" for="customControlAutosizing"><a href="#" class="link">회원약관</a>에 동의하기</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex">
                                    <button type="submit" class="btn btn-md btn-block btn-info-gradiant btn-arrow"><span> 회원가입 <i class="fas fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Form 4  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Form 5  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer form5" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/form/2.jpg); background-size: cover;">
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 text-center both-space">
                    <div class="card" data-aos="flip-left" data-aos-duration="1200">
                        <div class="card-body">
                            <div class="text-box">
                                <h2 class="title">레스토랑 예약하기</h2>
                                <form class="m-t-30">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="이름">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control" type="email" placeholder="이메일">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="핸드폰번호">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="예약일자" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>시</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>분</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex">
                                            <button type="submit" class="btn btn-md btn-block btn-danger-gradiant btn-arrow"><span> 예약하기 <i class="fas fa-arrow-right"></i></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Form 5  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Form 7  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light">
        <section>
            <div id="banner3" class="banner mini-spacer" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/form-banners/banner3/banner-bg.jpg);">
                <div class="banner-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9 p-0" data-aos="fade-down" data-aos-duration="1500">
                                <h2 class="title text-white text-center font-bold">에이스테마로 멋진 웹사이트 만들기</h2>
                                <p class="text-white op-8 m-b-40">
                                    에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다.
                                </p>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border" placeholder="원하는 검색어를 입력하세요!">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger-gradiant" type="button" id="button-addon2">
                                            <i class="fas fa-search m-r-10"></i>검색
                                        </button>
                                    </div>
                                </div>
                                <div class="row m-0 suggetion">
                                    <div class="col-sm-6 col-md-3 m-t-40 p-0">
                                        <i class="far fa-laugh"></i>
                                        <span class="text-white font-18 font-bold p-l-10">다양한 게시판 스킨</span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 m-t-40 p-0 ml-auto">
                                        <i class="far fa-laugh-wink"></i>
                                        <span class="text-white font-18 font-bold p-l-10">다양한 최근게시물 스킨</span>
                                    </div>
                                    <div class="col-sm-6 col-md-3 m-t-40 p-0 ml-auto">
                                        <i class="far fa-laugh-beam"></i>
                                        <span class="text-white font-18 font-bold p-l-10">섹션 템플릿 라이브러리 제공</span>
                                    </div>
                                </div>
	                            <?php echo $btn_copycode_str; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Form 7  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Form 8  -->
    <!-- ============================================================== -->
    <div class="_ct_section form8 spacer">
        <div class="container">
            <div class="row">
                <!-- column  -->
                <div class="col-lg-5">
                    <h6 class="text-themecolor text-uppercase">뉴스레터</h6>
                    <h2 class="title">에이스테마로 웹사이트 구축</h2>
                    <h6 class="subtitle m-t-20">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    <form class="m-t-20">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="이름" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="이메일 주소" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger-gradiant btn-block btn-md text-uppercase ">구독하기 </button>
                        </div>
                        <div class="form-group">
                            <div class="my-1">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                    <label class="custom-control-label" for="customControlAutosizing1"><a href="#" class="link">회원약관</a>을 모두 읽었으며, 이에 동의함</label>
                                </div>
                            </div>
                        </div>
                    </form>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <!-- column  -->
                <div class="col-lg-6 ml-auto">
                    <div class="d-flex b-b p-b-5 no-block font-medium text-uppercase">
                        <h4 class="no-shrink align-self-center m-b-0">에이스테마의 최근소식</h4>
                        <a class="ml-auto text-danger align-self-center" href="#">더보기</a>
                    </div>
                    <div class="row blog-row m-t-20">
                        <div class="col-md-4">
                            <a href="#"><img src="<?php echo G5_THEME_URL ?>/assets/images/web/4.jpg" alt="" class="img-responsive mb-3" /></a>
                        </div>
                        <div class="col-md-8">
                            <h5><a href="#">에이스테마는 50여종의 게시판 스킨을 제공합니다. 스킨이 다양하면 디자인의 폭이 넓어져서 더 풍성하게 웹사이트를 꾸밀 수 있습니다.</a></h5>
                            <p>by <a href="#">최고관리자</a> / 2021년 5월 25일</p>
                        </div>
                    </div>
                    <div class="row blog-row m-t-15">
                        <div class="col-md-4">
                            <a href="#"><img src="<?php echo G5_THEME_URL ?>/assets/images/web/8.jpg" alt="" class="img-responsive mb-3" /></a>
                        </div>
                        <div class="col-md-8">
                            <h5><a href="#">에이스테마는 게시판 스킨과 동일한 디자인을 최근게시물 스킨에도 제공합니다. (50여종) 웹사이트 제작의 신세계를 경험해 보세요!</a></h5>
                            <p>by <a href="#">최고관리자</a> / 2021년 5월 30일</p>
                        </div>
                    </div>
                    <div class="row blog-row m-t-15">
                        <div class="col-md-4">
                            <a href="#"><img src="<?php echo G5_THEME_URL ?>/assets/images/web/12.jpg" alt="" class="img-responsive mb-3" /></a>
                        </div>
                        <div class="col-md-8">
                            <h5><a href="#">섹션 템플릿 라이브러리를 제공하기 때문에 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. 복사해서 붙여넣기만 하세요!</a></h5>
                            <p>by <a href="#">최고관리자</a> / 2021년 6월 2일</p>
                        </div>
                    </div>
                </div>
                <!-- column  -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Form 8  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Form 9  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-light">
        <section>
            <div id="banner4" class="banner spacer" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/form-banners/banner4/banner-bg.jpg); background-position: center center;">
                <div class="banner-content">
                    <div class="container" data-aos="fade-down" data-aos-duration="1500">
                        <h2 class="title text-white text-center font-bold m-b-30">원하는 여행지를 검색해 보세요!</h2>
                        <div class="row form-data">
                            <div class="col-sm-6 col-md-3 b-r p-b-10 p-t-10 bg-white sec-icon po-relative">
                                <i class="fa fa-map-marker text-danger"></i>
                                <span class="span-select b-b m-l-20">
                                    <select class="b-0 form-control text-uppercase">
                                        <option>목적지</option>
                                    </select>
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </div>
                            <div class="col-sm-6 col-md-3 b-r p-b-10 p-t-10 bg-white sec-icon po-relative">
                                <i class="fa fa-list text-danger"></i>
                                <span class="span-select b-b m-l-20">
                                    <select class="b-0 form-control text-uppercase">
                                        <option>여행종류</option>
                                    </select>
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </div>
                            <div class="col-sm-6 col-md-3 b-r p-b-10 p-t-10 bg-white sec-icon po-relative">
                                <i class="fa fa-calendar text-danger"></i>
                                <span class="span-select b-b m-l-20">
                                    <select class="b-0 form-control text-uppercase">
                                        <option>월</option>
                                    </select>
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </div>
                            <div class="col-sm-6 col-md-2 p-b-10 p-t-10 bg-white">
                                <input type="text" placeholder="가격범위" class="text-uppercase form-control b-b" />
                            </div>
                            <div class="col-md-1 p-0">
                                <button class="b-0 btn btn-success-gradiant btn-block btn-md text-center">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Form 9  -->
    <!-- ============================================================== -->

</div>

<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>