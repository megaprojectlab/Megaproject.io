<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$delete_str = "";
if ($w == 'x') $delete_str = "댓";
if ($w == 'u') $g5['title'] = $delete_str."글 수정";
else if ($w == 'd' || $w == 'x') $g5['title'] = $delete_str."글 삭제";
else $g5['title'] = $g5['title'];

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 비밀번호 확인 시작 { -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card border mt-5">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">댓글삭제</h4>
                    <!--<h5 class="text-center text-primary">
                        글 작성시 입력한 비밀번호를 입력하세요!
                    </h5>
                    <div class="alert alert-primary" role="alert">
                        <i class="fa fa-info-circle mr-2" aria-hidden="true"></i><strong>작성자 본인</strong>만 글을 삭제할 수 있습니다!
                    </div>-->
	                <?php if ($w == 'u') { ?>
                        <h5 class="text-center text-primary">
                            작성자만 글을 수정할 수 있습니다!
                        </h5>
                        <div class="alert alert-primary" role="alert">
                            <i class="fa fa-info-circle mr-2" aria-hidden="true"></i><strong>글 작성시 입력한 비밀번호</strong>를 입력하세요!
                        </div>
	                <?php } else if ($w == 'd' || $w == 'x') {  ?>
                        <h5 class="text-center text-primary">
                            작성자만 글을 삭제할 수 있습니다.
                        </h5>
                        <div class="alert alert-primary" role="alert">
                            <i class="fa fa-info-circle mr-2" aria-hidden="true"></i><strong>글 작성시 입력한 비밀번호</strong>를 입력하세요!
                        </div>
	                <?php } else {  ?>
                        <h5 class="text-center text-primary">
                            비밀글 기능으로 보호된 글입니다.
                        </h5>
                        <div class="alert alert-primary" role="alert">
                            <i class="fa fa-info-circle mr-2" aria-hidden="true"></i><strong>작성자와 관리자만 열람하실 수 있습니다!</strong> 본인이라면 비밀번호를 입력하세요!
                        </div>
	                <?php }  ?>
                    <form name="fboardpassword" action="<?php echo $action;  ?>" method="post">
                        <input type="hidden" name="w" value="<?php echo $w ?>">
                        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
                        <input type="hidden" name="comment_id" value="<?php echo $comment_id ?>">
                        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                        <input type="hidden" name="stx" value="<?php echo $stx ?>">
                        <input type="hidden" name="page" value="<?php echo $page ?>">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input type="password" name="wr_password" id="password_wr_password" class="form-control required" size="15" maxLength="20" placeholder="비밀번호" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">확인</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- } 비밀번호 확인 끝 -->