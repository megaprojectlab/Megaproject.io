<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_c2a.php" ) );
}

$g5['title'] = "타임라인";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">


    <!-- ============================================================== -->
    <!-- 타임라인 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <ul class="timeline">
                <li>
                    <div class="timeline-badge success">
                        <img class="img-responsive" alt="user" src="<?php echo G5_THEME_URL ?>/assets/images/face-square/1.jpg">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2005년 창업</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2005년 4월 1일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>자본금이 5,000만원으로 창업하여, 영업을 시작</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge warning">
                        <img class="img-responsive" alt="user" src="<?php echo G5_THEME_URL ?>/assets/images/face-square/2.jpg">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2007년 연매출액 100억 달성</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2007년 9월 1일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>2007년 연매출액 100억을 돌파하였고, 매스컴에 이름을 알리기 시작</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge success">
                        <img class="img-responsive" alt="user" src="<?php echo G5_THEME_URL ?>/assets/images/face-square/3.jpg">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2008년 특허 4건 등록</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2008년 2월 25일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>주력 상품과 관련한 특허를 4건 등록하여, 업계 선두자리를 노림</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge success">
                        <img class="img-responsive" alt="user" src="<?php echo G5_THEME_URL ?>/assets/images/face-square/4.jpg">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2009년 직원수 100명으로 증원</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2009년 7월 10일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>대규모 충원으로 생산라인의 체계를 견고하게 함</p>
                        </div>
                    </div>
                </li>
            </ul>
	        <?php echo $btn_copycode_str; ?>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>





    <!-- ============================================================== -->
    <!-- End 타임라인 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 타임라인 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <ul class="timeline">
                <li>
                    <div class="timeline-badge success">
                        <i class="fas fa-bomb"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2005년 창업</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2005년 4월 1일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>자본금이 5,000만원으로 창업하여, 영업을 시작</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge info">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2007년 연매출액 100억 달성</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2007년 9월 1일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>2007년 연매출액 100억을 돌파하였고, 매스컴에 이름을 알리기 시작</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge info">
                        <i class="fas fa-save"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2008년 특허 4건 등록</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2008년 2월 25일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>주력 상품과 관련한 특허를 4건 등록하여, 업계 선두자리를 노림</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge success">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2009년 직원수 100명으로 증원</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2009년 7월 10일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>대규모 충원으로 생산라인의 체계를 견고하게 함</p>
                        </div>
                    </div>
                </li>
            </ul>
			<?php echo $btn_copycode_str; ?>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End 타임라인 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 타임라인 3  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <ul class="timeline">
                <li>
                    <div class="timeline-badge dark">
                        <div class="year font-extrabold">2005</div>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2005년 창업</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2005년 4월 1일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>자본금이 5,000만원으로 창업하여, 영업을 시작</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge dark">
                        <div class="year font-extrabold">2007</div>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2007년 연매출액 100억 달성</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2007년 9월 1일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>2007년 연매출액 100억을 돌파하였고, 매스컴에 이름을 알리기 시작</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge dark">
                        <div class="year font-extrabold">2008</div>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2008년 특허 4건 등록</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2008년 2월 25일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>주력 상품과 관련한 특허를 4건 등록하여, 업계 선두자리를 노림</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge dark">
                        <div class="year font-extrabold">2009</div>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2009년 직원수 100명으로 증원</h4>
                            <p>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 2009년 7월 10일
                                </small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>대규모 충원으로 생산라인의 체계를 견고하게 함</p>
                        </div>
                    </div>
                </li>
            </ul>
			<?php echo $btn_copycode_str; ?>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End 타임라인 3  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>