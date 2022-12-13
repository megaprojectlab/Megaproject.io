<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원정보 찾기 시작 { -->
<div class="card border m-2">
    <div class="card-body">
        <h4 class="card-title mb-4">회원정보 찾기</h4>
        <div class="mb-2">
            회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br/>
            해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
        </div>
        <form name="fpasswordlost" action="<?php echo $action_url ?>" onsubmit="return fpasswordlost_submit(this);" method="post" autocomplete="off">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input type="email" name="mb_email" id="mb_email" class="form-control required" size="30" placeholder="E-mail 주소" required>
                </div>
            </div>
            <div class="form-group">
	            <?php echo captcha_html();  ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary btn-block">확인</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" onclick="window.close();" class="btn btn-light btn-block">창닫기</button>
                </div>
            </div>
        </form>
    </div> <!-- card-body.// -->
</div>

<script>
function fpasswordlost_submit(f)
{
    <?php echo chk_captcha_js();  ?>

    return true;
}

$(function() {
    var sw = screen.width;
    var sh = screen.height;
    var cw = document.body.clientWidth;
    var ch = document.body.clientHeight;
    var top  = sh / 2 - ch / 2 - 100;
    var left = sw / 2 - cw / 2;
    moveTo(left, top);
});
</script>
<!-- } 회원정보 찾기 끝 -->