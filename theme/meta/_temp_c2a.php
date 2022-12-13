<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_c2a.php" ) );
}

$g5['title'] = "클릭유도";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Call-to-Action 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer bg-light c2a1" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/web-full/8.jpg)">
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">클릭유도 1</span>
                    <h2 class="title text-white">에이스테마로 멋진 웹사이트 만들기</h2>
                    <p class="text-white op-8">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </p>
                    <a class="btn btn-danger-gradiant btn-md btn-arrow m-t-20 text-uppercase" href="#"><span>자세히보기<i class="fas fa-arrow-right"></i></span></a>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row -->
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Call-to-Action 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Call-to-Action 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer c2a2" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/web-full/9.jpg); background-size: cover;">
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">클릭유도 2</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    <div class="m-t-40">
                        <a class="btn btn-success-gradiant btn-rounded btn-md btn-arrow m-t-20 m-r-10" href="#"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                        <a class="btn btn-outline-inverse btn-rounded btn-md btn-arrow m-t-20" href="#"><span>미리보기 <i class="fas fa-arrow-right"></i></span></a>
                    </div>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Call-to-Action 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Call-to-Action 3  -->
    <!-- ============================================================== -->
    <div class="_ct_section mini-spacer bg-light c2a3">
        <div class="container">
            <div class="m-b-10">
                <span class="label label-success label-rounded">클릭유도 3</span>
            </div>
            <div class="d-flex">
                <div class="display-7 align-self-center">
                    <h3 class="">에이스테마와 함께하는 쉽고 빠른 웹사이트 구축</h3>
                    <h6 class="font-16 subtitle">웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다.</h6>
                </div>
                <div class="ml-auto m-t-10 m-b-10">
                    <button class="btn btn-info-gradiant btn-md">자세히보기</button>
                </div>
            </div>
	        <?php echo $btn_copycode_str; ?>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Call-to-Action 3  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Call-to-Action 4  -->
    <!-- ============================================================== -->
    <div class="_ct_section mini-spacer c2a4">
        <div class="container">
            <div class="m-b-10">
                <span class="label label-success label-rounded">클릭유도 4</span>
            </div>
            <div class="row p-b-30">
                <div class="col-lg-9 col-md-7">
                    <h2 class="">에이스테마와 함께하는 쉽고 빠른 웹사이트 구축</h2>
                    <h6 class="subtitle">웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다.</h6>
                </div>
                <div class="col-lg-3 col-md-5 align-self-center">
                    <a class="btn btn-danger-gradiant btn-md btn-arrow btn-rounded m-b-20 pull-right" data-toggle="collapse" href="#f1"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
	        <?php echo $btn_copycode_str; ?>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Call-to-Action 4  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Call-to-Action 5  -->
    <!-- ============================================================== -->
    <div class="_ct_section mini-spacer c2a5" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/c2a/2.jpg)">
        <div class="container">
            <div class="m-b-10">
                <span class="label label-info label-rounded">클릭유도 5</span>
            </div>
            <div class="d-flex">
                <div class="display-7 align-self-center">
                    <h2 class="text-white">에이스테마와 함께하는 쉽고 빠른 웹사이트 구축</h2>
                    <h6 class="subtitle text-white">웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다.</h6>
                </div>
                <div class="ml-auto m-t-10 m-b-10">
                    <button class="btn btn-light btn-md">자세히보기</button>
                </div>
            </div>
	        <?php echo $btn_copycode_str; ?>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Call-to-Action 5  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Call-to-Action 6  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer c2a6">
        <div class="container">
            <!-- row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="label label-info label-rounded">클릭유도 6</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                    <button class="btn btn-info btn-md m-t-20">자세히보기</button>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <div class="col-md-8 text-center m-t-30">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/png/pepsi.png" alt="" class="img-responsive" />
                </div>
            </div>
            <!-- row  -->
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Call-to-Action 6  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Call-to-Action 7  -->
    <!-- ============================================================== -->
    <div class="_ct_section mini-spacer bg-info text-white c2a7">
        <div class="container">
            <div class="m-b-10">
                <span class="label label-success label-rounded">클릭유도 7</span>
            </div>
            <div class="d-flex">
                <div class="display-7 align-self-center">
                    <h2 class="text-white">에이스테마와 함께하는 쉽고 빠른 웹사이트 구축</h2>
                    <h6 class="subtitle text-white">웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다.</h6>
                </div>
                <div class="ml-auto m-t-10 m-b-10">
                    <button class="btn btn-outline-light btn-md">자세히보기</button>
                </div>
            </div>
	        <?php echo $btn_copycode_str; ?>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Call-to-Action 7  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- End Call-to-Action 8  -->
    <!-- ============================================================== -->
    <div class="_ct_section c2a8" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/c2a/6.jpg); background-repeat:no-repeat">
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 text-center both-space">
                    <div class="m-b-20">
                        <span class="label label-success label-rounded">클릭유도 8</span>
                    </div>
                    <div class="card bg-danger-gradiant" data-aos="flip-left" data-aos-duration="1200">
                        <div class="card-body">
                            <div class="text-box">
                                <h3 class="title text-white">
                                    에이스테마로<br/>
                                    멋진 웹사이트 만들기
                                </h3>
                                <h6 class="subtitle text-white op-5">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                                <a class="btn bg-white text-danger btn-rounded btn-md btn-arrow m-t-20 m-b-20" href="#"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
	                <?php echo $btn_copycode_str; ?>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Call-to-Action 8  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Call-to-Action 9  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-info c2a9" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/web-full/7.jpg); background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center p-5">
                    <div class="m-b-20">
                        <span class="label label-success label-rounded">클릭유도 9</span>
                    </div>
                    <h6 class="font-16 subtitle text-white">에이스테마로 멋진 웹사이트 만들기</h6>
                    <h1 class="text-white text-uppercase">
                        에이스테마와 함께<br/>
                        쉽고 빠르게 웹사이트를 구축하세요
                    </h1>
                    <div class="m-t-40">
                        <button class="btn bg-white text-dark btn-rounded btn-md">자세히보기</button>
                    </div>
	                <?php echo $btn_copycode_str; ?>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Call-to-Action 9  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Call-to-Action 10  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer c2a10" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/web-full/5.jpg)">
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-center">
                <div class="col-md-5 text-center both-space">
                    <div class="card" data-aos="flip-left" data-aos-duration="1200">
                        <div class="card-body py-5">
                            <div class="text-box">
                                <span class="label label-success label-rounded">클릭유도 10</span>
                                <h3 class="title">
                                    에이스테마로<br/>
                                    멋진 웹사이트 만들기
                                </h3>
                                <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
                                <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" href="#"><span>자세히보기 <i class="fas fa-arrow-right"></i></span></a>
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
    <!-- End Call-to-Action 10  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>