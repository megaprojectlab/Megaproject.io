<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원 비밀번호 확인 시작 { -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card border mt-5">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4"><?php echo $g5['title'] ?></h4>
                    <h5 class="text-center text-primary">
                        비밀번호를 한번 더 입력해주세요!
                    </h5>
	                <?php if ($url == 'member_leave.php') { ?>
                        <div class="alert alert-danger" role="alert">
                            <i class="fa fa-info-circle mr-2" aria-hidden="true"></i>비밀번호를 입력하시면 <strong>회원탈퇴</strong>가 완료됩니다.
                        </div>
	                <?php }else{ ?>
                        <div class="alert alert-primary" role="alert">
                            <i class="fa fa-info-circle mr-2" aria-hidden="true"></i><strong>보안</strong>을 위해 비밀번호를 한번 더 확인합니다!
                        </div>
	                <?php }  ?>
                    <form name="fmemberconfirm" action="<?php echo $url ?>" onsubmit="return fmemberconfirm_submit(this);" method="post">
                        <input type="hidden" name="mb_id" value="<?php echo $member['mb_id'] ?>">
                        <input type="hidden" name="w" value="u">
                        <div class="form-group mb-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="text" name="" value="<?php echo $member['mb_id'] ?>" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input type="password" name="mb_password" id="confirm_mb_password" class="form-control required" size="15" maxLength="20" placeholder="비밀번호" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="btn_submit" class="btn btn-primary btn-block">확인</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
function fmemberconfirm_submit(f)
{
    document.getElementById("btn_submit").disabled = true;

    return true;
}
</script>
<!-- } 회원 비밀번호 확인 끝 -->