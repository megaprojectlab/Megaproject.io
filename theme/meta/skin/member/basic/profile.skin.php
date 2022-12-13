<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 자기소개 시작 { -->

<!-- ============================================================== -->
<!-- 프로필 START -->
<!-- ============================================================== -->
<div class="card border m-2">
    <div class="card-header">
        <h3 class="card-title mb-4"><?php echo $mb_nick ?>님의 프로필</h3>
        <div class="text-center mb-4">
	        <?php
	        echo $_ACETHEME->get_member_profile_img_profile(get_member_profile_img($mb['mb_id']));
	        ?>
            <h4><?php echo $mb_nick ?></h4>
        </div>
        <div class="row mb-3">
            <div class="col-6 col-sm-6 col-md-6 text-truncate">
                <span class="badge badge-secondary mr-2" style="width: 80px;">회원권한</span>
                <span><?php echo $mb['mb_level'] ?></span>
            </div>
            <div class="col-6 col-sm-6 col-md-6 text-truncate">
                <span class="badge badge-secondary mr-2" style="width: 80px;">포인트</span>
                <span><?php echo number_format($mb['mb_point']) ?></span>
            </div>
            <div class="col-6 col-sm-6 col-md-6 text-truncate">
                <span class="badge badge-secondary mr-2" style="width: 80px;">회원가입일</span>
                <span><?php echo ($member['mb_level'] >= $mb['mb_level']) ?  substr($mb['mb_datetime'],0,10) ." (".number_format($mb_reg_after)." 일)" : "알 수 없음";  ?></span>
            </div>
            <div class="col-6 col-sm-6 col-md-6 text-truncate">
                <span class="badge badge-secondary mr-2" style="width: 80px;">회원접속일</span>
                <span><?php echo ($member['mb_level'] >= $mb['mb_level']) ? $mb['mb_today_login'] : "알 수 없음"; ?></span>
            </div>
	        <?php if ($mb_homepage) {  ?>
                <div class="col-6 col-sm-6 col-md-6 text-truncate">
                    <span class="badge badge-secondary mr-2" style="width: 80px;">홈페이지</span>
                    <span><a href="<?php echo $mb_homepage ?>" target="_blank"><?php echo $mb_homepage ?></a></span>
                </div>
	        <?php }  ?>
        </div>
    </div>
    <div class="card-body">
        <h4 class="card-title">인사말</h4>
        <div class="">
            <?php echo $mb_profile ?>
        </div>
    </div>
    <div class="card-footer">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <button type="button" onclick="window.close();" class="btn btn-light btn-block">창닫기</button>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- 프로필 END -->
<!-- ============================================================== -->

<!-- } 자기소개 끝 -->