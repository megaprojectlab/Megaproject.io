<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_c2a.php" ) );
}

$g5['title'] = "카운터";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">


    <!-- ============================================================== -->
    <!-- 카운터 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-center">
                <div class="col-md-12 text-center"></div>
                <div class="col-md-7 text-center">
                    <span class="label label-info label-rounded">카운터 1</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
		            <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row -->
            <div class="row m-t-30 p-t-30 client-box">
                <!-- column  -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div>
                        <i class="fas fa-user fa-3x"></i>
                    </div>
                    <h6 class="text-muted font-13 text-uppercase">회원수</h6>
                    <h1 class="font-extrabold _counter_1 mb-5">5000</h1>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div>
                        <i class="fas fa-coffee fa-3x"></i>
                    </div>
                    <h6 class="text-muted font-13 text-uppercase">최다판매량</h6>
                    <h1 class="font-extrabold _counter_1 mb-5">2300</h1>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div>
                        <i class="fas fa-business-time fa-3x"></i>
                    </div>
                    <h6 class="text-muted font-13 text-uppercase">월평균 계약건수</h6>
                    <h1 class="font-extrabold _counter_1 mb-5">3700</h1>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div>
                        <i class="fas fa-thumbs-up fa-3x"></i>
                    </div>
                    <h6 class="text-muted font-13 text-uppercase">누적 팔로워</h6>
                    <h1 class="font-extrabold _counter_1 mb-5">9750</h1>
                </div>
                <!-- column  -->
            </div>
        </div>
        <script type="text/javascript">
            $('._counter_1').counterUp({
                delay: 10
            });
        </script>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End 카운터 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 카운터 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer bg-info">
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-center">
                <div class="col-md-12 text-center"></div>
                <div class="col-md-7 text-center">
                    <span class="label label-dark label-rounded">카운터 2</span>
                    <h2 class="title text-white">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle text-white">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
					<?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row -->
            <div class="row m-t-30 p-t-30 client-box">
                <!-- column  -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div>
                        <i class="fas fa-user fa-3x text-white"></i>
                    </div>
                    <h6 class="text-muted font-13 text-uppercase text-white">회원수</h6>
                    <h1 class="font-extrabold mb-5 _counter_2 text-white">5000</h1>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div>
                        <i class="fas fa-coffee fa-3x text-white"></i>
                    </div>
                    <h6 class="text-muted font-13 text-uppercase text-white">최다판매량</h6>
                    <h1 class="font-extrabold mb-5 _counter_2 text-white">2300</h1>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div>
                        <i class="fas fa-business-time fa-3x text-white"></i>
                    </div>
                    <h6 class="text-muted font-13 text-uppercase text-white">월평균 계약건수</h6>
                    <h1 class="font-extrabold mb-5 _counter_2 text-white">3700</h1>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div>
                        <i class="fas fa-thumbs-up fa-3x text-white"></i>
                    </div>
                    <h6 class="text-muted font-13 text-uppercase text-white">누적 팔로워</h6>
                    <h1 class="font-extrabold mb-5 _counter_2 text-white">9750</h1>
                </div>
                <!-- column  -->
            </div>
        </div>
        <script type="text/javascript">
            $('._counter_2').counterUp({
                delay: 10
            });
        </script>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End 카운터 2  -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>