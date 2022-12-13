<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<!-- 로그인 전 아웃로그인 시작 { -->
<div class="card border">
    <div class="card-body">
        <h4 class="card-title text-center mb-4">로그인</h4>
        <form name="foutlogin" action="<?php echo $outlogin_action_url ?>" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
            <input type="hidden" name="url" value="<?php echo $outlogin_url ?>">
            <div class="form-group mb-1">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                    </div>
                    <input type="text" name="mb_id" class="form-control required" maxlength="20" placeholder="아이디" required>
                </div>
            </div>
            <div class="form-group mb-1">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-lock"></i> </span>
                    </div>
                    <input type="password" name="mb_password" class="form-control required" maxlength="20" placeholder="비밀번호" required>
                </div>
            </div>
            <div class="form-group mb-1">
                <button type="submit" class="btn btn-primary btn-block">로그인</button>
            </div>
            <div class="form-group mb-0 font-14">
                <label class="custom-control custom-checkbox d-inline-block mb-0">
                    <input type="checkbox" name="auto_login" id="auto_login" class="custom-control-input" value="1">
                    <div class="custom-control-label">자동로그인</div>
                </label>
                <span class="float-right">
                    <a href="<?php echo G5_BBS_URL ?>/register.php" class="font-bold" role="button">
                        회원가입
                    </a>
                    <span class="mx-1 text-muted">/</span>
                    <a href="<?php echo G5_BBS_URL ?>/password_lost.php" class="" id="ol_password_lost" role="button">
                        정보찾기
                    </a>
                </span>
            </div>
        </form>
        <?php
        // 소셜로그인 사용시 소셜로그인 버튼
            @include_once(get_social_skin_path().'/social_login.skin.php');
//        @include_once(get_social_skin_path() . '/social_outlogin.skin.1.php');
        ?>

    </div>
    <!--<div class="card-footer text-center">
        아직 회원이 아니세요?<a href="<?php /*echo G5_BBS_URL */?>/register.php" class="btn btn-sm btn-dark ml-2" role="button">회원가입</a>
    </div>-->
</div>

<script>
jQuery(function($) {

    // var $omi = $('#ol_id'),
    //     $omp = $('#ol_pw'),
    //     $omi_label = $('#ol_idlabel'),
    //     $omp_label = $('#ol_pwlabel');

    // $omi_label.addClass('ol_idlabel');
    // $omp_label.addClass('ol_pwlabel');

    $("#auto_login").click(function(){
        if ($(this).is(":checked")) {
            if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
                return false;
        }
    });
});

function fhead_submit(f)
{
    if( $( document.body ).triggerHandler( 'outlogin1', [f, 'foutlogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>
<!-- } 로그인 전 아웃로그인 끝 -->
