<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 쪽지 보내기 시작 { -->
<form name="fmemoform" action="<?php echo $memo_action_url; ?>" onsubmit="return fmemoform_submit(this);" method="post" autocomplete="off">
    <div class="card border m-2">
        <div class="card-header">
            <header class="mb-4">
                <h4 class="card-title d-inline-block"><?php echo $g5['title'] ?></h4>
            </header>
            <div class="btn-toolbar mb-2" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a href="./memo.php?kind=recv" class="btn btn-light" role="button"><i class="fas fa-download white mr-2"></i>받은쪽지</a>
                    <a href="./memo.php?kind=send" class="btn btn-light" role="button"><i class="fas fa-paper-plane white mr-2"></i>보낸쪽지</a>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <a href="./memo_form.php" class="btn btn-dark" role="button"><i class="fas fa-pen white mr-2"></i>쪽지쓰기</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="col form-group">
                    <input type="text" name="me_recv_mb_id" id="me_recv_mb_id" value="<?php echo $me_recv_mb_id; ?>" class="form-control mb-1 required" size="47" placeholder="받는 회원아이디" required >
                    <p class="mb-0">여러 회원에게 보낼때는 콤마(,)로 구분하세요.</p>
	                <?php if ($config['cf_memo_send_point']) { ?>
                        <p class="mb-0">쪽지 보낼때 회원당 <?php echo number_format($config['cf_memo_send_point']); ?>점의 포인트를 차감합니다.</p>
	                <?php } ?>
                </div>
            </div>
            <div class="form-group">
                <textarea name="me_memo" id="me_memo" class="form-control required" rows="3" required><?php echo $content ?></textarea>
            </div>
            <div class="form-group">
	            <?php echo captcha_html(); ?>
	            <?php
	            /*$captcha = captcha_html('ace_captcha');
	            $captcha = str_replace("숫자음성듣기", '<i class="fa fa-volume-up" aria-hidden="true"></i>', $captcha);
	            $captcha = str_replace("새로고침", '<i class="fa fa-refresh" aria-hidden="true"></i>', $captcha);
	            $captcha = str_replace('id="captcha_mp3"', 'id="captcha_mp3" class="btn btn-secondary"', $captcha);
	            $captcha = str_replace('id="captcha_reload"', 'id="captcha_reload" class="btn btn-secondary"', $captcha);
	            $captcha = str_replace('class="captcha_box required"', 'class="captcha_box required btn btn-outline-secondary"', $captcha);
	            echo $captcha;*/
	            ?>
            </div>
            <!--<div class="form-group">
                <label for="exampleFormControlFile1">
                    <input type="file" class="form-control-file">
                </label>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">
                    <input type="file" class="form-control-file">
                </label>
            </div>-->
        </div>
        <div class="card-footer">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <button type="submit" id="btn_submit" class="btn btn-primary btn-block">보내기</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" onclick="window.close();" class="btn btn-light btn-block">창닫기</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
function fmemoform_submit(f)
{
    <?php echo chk_captcha_js();  ?>

    return true;
}
</script>
<!-- } 쪽지 보내기 끝 -->