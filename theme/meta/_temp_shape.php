<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_c2a.php" ) );
}

$g5['title'] = "배경무늬";
include_once(G5_THEME_PATH . '/head.php');


$shape_color = $_GET["color"];

function gen_shape($type, $color) {

	$shape_title = "배경무늬 ";
    if ($type == "wa") {
	    $shape_title .= "Waves";
    } else if ($type == "wao") {
	    $shape_title .= "Waves Opacity";
    } else if ($type == "cu") {
	    $shape_title .= "Curve";
    } else if ($type == "cua") {
	    $shape_title .= "Curve Asymmetrical";
    } else if ($type == "tr") {
	    $shape_title .= "Triangle";
    } else if ($type == "tra") {
	    $shape_title .= "Triangle Asymmetrical";
    } else if ($type == "ti") {
	    $shape_title .= "Tilt";
    } else if ($type == "ar") {
	    $shape_title .= "Arrow";
    } else if ($type == "sp") {
	    $shape_title .= "Split";
    } else if ($type == "bo") {
	    $shape_title .= "Book";
    }

	$markup_shape_input = <<<EOF

        <div class="_ct_section spacer shape-$type-a-$color">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <span class="label label-success label-rounded">$shape_title</span>
                        <h2 class="title bg-white p-1 op-8">$shape_title</h2>
                        <h6 class="subtitle">spacer 클래스 옆에 붙여 넣으세요!</h6>                        
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">상단만</span>
                            </div>
                            <input type="text" id="shape-$type-t" class="form-control" value="shape-$type-t-$color">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary _btn_copy_shape" type="button" data-clipboard-target="#shape-$type-t">
                                    <i class="far fa-copy mr-1"></i>복사
                                </button>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">하단만</span>
                            </div>
                            <input type="text" id="shape-$type-b" class="form-control" value="shape-$type-b-$color">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary _btn_copy_shape" type="button" data-clipboard-target="#shape-$type-b">
                                    <i class="far fa-copy mr-1"></i>복사
                                </button>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">모두다</span>
                            </div>
                            <input type="text" id="shape-$type-a" class="form-control" value="shape-$type-a-$color">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary _btn_copy_shape" type="button" data-clipboard-target="#shape-$type-a">
                                    <i class="far fa-copy mr-1"></i>복사
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
EOF;

    return $markup_shape_input;

}



?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">

    <!-- ============================================================== -->
    <!-- 쉐이프 Wave -->
    <!-- ============================================================== -->
    <?php $shape_type = "wa"; ?>
	<?php echo gen_shape($shape_type, $shape_color); ?>
    <!-- ============================================================== -->
    <!-- End 쉐이프 Wave  -->
    <!-- ============================================================== -->
    <div class="spacer b-t b-b b-10 b-dark bg-light"></div>
    <!-- ============================================================== -->
    <!-- 쉐이프 Waves Opacity  -->
    <!-- ============================================================== -->
	<?php $shape_type = "wao"; ?>
	<?php echo gen_shape($shape_type, $shape_color); ?>
    <!-- ============================================================== -->
    <!-- End 쉐이프 Waves Opacity  -->
    <!-- ============================================================== -->
    <div class="spacer b-t b-b b-10 b-dark bg-light"></div>
    <!-- ============================================================== -->
    <!-- 쉐이프 Curve  -->
    <!-- ============================================================== -->
	<?php $shape_type = "cu"; ?>
	<?php echo gen_shape($shape_type, $shape_color); ?>
    <!-- ============================================================== -->
    <!-- End 쉐이프 Curve  -->
    <!-- ============================================================== -->
    <div class="spacer b-t b-b b-10 b-dark bg-light"></div>
    <!-- ============================================================== -->
    <!-- 쉐이프 Curve Asymmetrical -->
    <!-- ============================================================== -->
	<?php $shape_type = "cua"; ?>
	<?php echo gen_shape($shape_type, $shape_color); ?>
    <!-- ============================================================== -->
    <!-- End 쉐이프 Curve Asymmetrical -->
    <!-- ============================================================== -->
    <div class="spacer b-t b-b b-10 b-dark bg-light"></div>
    <!-- ============================================================== -->
    <!-- 쉐이프 Triangle  -->
    <!-- ============================================================== -->
	<?php $shape_type = "tr"; ?>
	<?php echo gen_shape($shape_type, $shape_color); ?>
    <!-- ============================================================== -->
    <!-- End 쉐이프 Triangle  -->
    <!-- ============================================================== -->
    <div class="spacer b-t b-b b-10 b-dark bg-light"></div>
    <!-- ============================================================== -->
    <!-- 쉐이프 Triangle Asymmetrical -->
    <!-- ============================================================== -->
	<?php $shape_type = "tra"; ?>
	<?php echo gen_shape($shape_type, $shape_color); ?>
    <!-- ============================================================== -->
    <!-- End 쉐이프 Triangle Asymmetrical -->
    <!-- ============================================================== -->
    <div class="spacer b-t b-b b-10 b-dark bg-light"></div>
    <!-- ============================================================== -->
    <!-- 쉐이프 Tilt  -->
    <!-- ============================================================== -->
	<?php $shape_type = "ti"; ?>
	<?php echo gen_shape($shape_type, $shape_color); ?>
    <!-- ============================================================== -->
    <!-- End 쉐이프 Tilt  -->
    <!-- ============================================================== -->
    <div class="spacer b-t b-b b-10 b-dark bg-light"></div>
    <!-- ============================================================== -->
    <!-- 쉐이프 Arrow  -->
    <!-- ============================================================== -->
	<?php $shape_type = "ar"; ?>
	<?php echo gen_shape($shape_type, $shape_color); ?>
    <!-- ============================================================== -->
    <!-- End 쉐이프 Arrow  -->
    <!-- ============================================================== -->
    <div class="spacer b-t b-b b-10 b-dark bg-light"></div>
    <!-- ============================================================== -->
    <!-- 쉐이프 Split  -->
    <!-- ============================================================== -->
	<?php $shape_type = "sp"; ?>
	<?php echo gen_shape($shape_type, $shape_color); ?>
    <!-- ============================================================== -->
    <!-- End 쉐이프 Split  -->
    <!-- ============================================================== -->
    <div class="spacer b-t b-b b-10 b-dark bg-light"></div>
    <!-- ============================================================== -->
    <!-- 쉐이프 Book  -->
    <!-- ============================================================== -->
	<?php $shape_type = "bo"; ?>
	<?php echo gen_shape($shape_type, $shape_color); ?>
    <!-- ============================================================== -->
    <!-- End 쉐이프 Book  -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->


<script>

    // js에서 heredoc구현을 위한 함수
    function hereDoc(f) {
        return f.toString().
        replace(/^[^\/]+\/\*!?/, '').
        replace(/\*\/[^\/]+$/, '');
    }

    $(function () {

        var markup_shape_input = hereDoc(function() {/*!
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text">상단</span>
                </div>
                <input type="text" id="shape-wa-t" class="form-control" value="shape-wa-t-primary">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary _btn_copy_shape" type="button" data-clipboard-target="#shape-wa-t"><i class="far fa-copy"></i></button>
                </div>
            </div>
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text">하단</span>
                </div>
                <input type="text" id="shape-wa-b" class="form-control" value="shape-wa-b-primary">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary _btn_copy_shape" type="button" data-clipboard-target="#shape-wa-b"><i class="far fa-copy"></i></button>
                </div>
            </div>
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text">모두</span>
                </div>
                <input type="text" id="shape-wa-a" class="form-control" value="shape-wa-a-primary">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary _btn_copy_shape" type="button" data-clipboard-target="#shape-wa-a"><i class="far fa-copy"></i></button>
                </div>
            </div>
        */});

        // $('._ct_shape_input').html(markup_shape_input);
        $('._ct_shape_input').html(markup_shape_input);

        $('._btn_test').click(function () {
            $('._ct_shape_input').html(markup_shape_input);
        });
    });
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>