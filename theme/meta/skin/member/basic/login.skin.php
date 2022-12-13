<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 로그인 시작 { -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card border mt-5">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4"><?php echo $g5['title'] ?></h4>
                    <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
                        <input type="hidden" name="url" value="<?php echo $login_url ?>">
                        <div class="form-group mb-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="text" name="mb_id" id="login_id" class="form-control required" size="20" maxLength="20" placeholder="아이디" required>
                            </div>
                        </div>
                        <div class="form-group mb-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input type="password" name="mb_password" id="login_pw" class="form-control required" size="20" maxLength="20" placeholder="비밀번호" required>
                            </div>
                        </div>
                        <div class="form-group mb-1">
                            <button type="submit" class="btn btn-primary btn-block">로그인</button>
                        </div>
                        <div class="form-group mb-0">
                            <label class="custom-control custom-checkbox d-inline-block">
                                <input type="checkbox" name="auto_login" id="login_auto_login" class="custom-control-input">
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
                    <?php @include_once(get_social_skin_path().'/social_login.skin.php'); // 소셜로그인 사용시 소셜로그인 버튼 ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(function($){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>
<!-- } 로그인 끝 -->
