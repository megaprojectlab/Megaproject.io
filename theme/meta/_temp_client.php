<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_c2a.php" ) );
}

$g5['title'] = "고객사";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">

    <!-- ============================================================== -->
    <!-- 고객사 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section client1 spacer">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">고객사 1</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row -->
            <div class="row client-box">
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/client-logo1.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/client-logo2.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/client-logo3.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/client-logo4.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/client-logo5.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/client-logo6.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/client-logo7.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/client-logo8.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End 고객사 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 고객사 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section client2 spacer bg-light">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="label label-primary label-rounded">고객사 2</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <!-- Row -->
            <div class="row client-box text-center">
                <div class="col-lg-2 col-md-4">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/c1.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/c2.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/c3.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/c4.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/c5.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4">
                    <img src="<?php echo G5_THEME_URL ?>/assets/images/client/c6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End 고객사 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 고객사 3  -->
    <!-- ============================================================== -->

    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End 고객사 3  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>