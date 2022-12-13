<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$nick = get_sideview($mb['mb_id'], $mb['mb_nick'], $mb['mb_email'], $mb['mb_homepage']);
if($kind == "recv") {
    $kind_str = "보낸";
    $kind_date = "받은";
}
else {
    $kind_str = "받는";
    $kind_date = "보낸";
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 쪽지보기 시작 { -->
<div class="card border mb-3">
    <div class="card-header">
        <header class="mb-4">
            <h4 class="card-title d-inline-block"><?php echo $g5['title'] ?></h4>
        </header>
        <div class="btn-toolbar mb-2" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
                <a href="./memo.php?kind=recv" class="btn btn-<?php echo ($kind == 'recv') ? 'dark' : 'light' ?>" role="button"><i class="fas fa-download white mr-2"></i>받은쪽지</a>
                <a href="./memo.php?kind=send" class="btn btn-<?php echo ($kind == 'send') ? 'dark' : 'light' ?>" role="button"><i class="fas fa-paper-plane white mr-2"></i>보낸쪽지</a>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <a href="./memo_form.php" class="btn btn-light" role="button"><i class="fas fa-pen white mr-2"></i>쪽지쓰기</a>
            </div>
        </div>
    </div>
    <div class="card-header p-0">
        <ul class="list-unstyled mb-0">
            <li class="media mb-0 pt-2 pb-2 border-0">
                <!--<img src="<?php /*echo G5_THEME_URL */?>/images/testimonial/1.jpg" class="mr-3 rounded-circle" style="width: 50px;">-->
	            <?php
	            echo $_ACETHEME->get_member_profile_img_memo(get_member_profile_img($list[$i]['mb_id']));
	            ?>
                <div class="media-body align-self-center">
                    <span class="float-right">
                        <span class="mr-4">
                            <span class="mr-1">
                                <?php if($prev_link) {  ?>
                                    <a href="<?php echo $prev_link ?>">
                                        <i class="fas fa-arrow-circle-left"></i>
                                        <span>이전</span>
                                    </a>
                                <?php }  ?>
                            </span>
                            <span class="">
                                <?php if($next_link) {  ?>
                                    <a href="<?php echo $next_link ?>">
                                        <span class="">다음</span>
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                <?php }  ?>
                            </span>
                        </span>
                        <span>
                            <span class="mr-2">
                                <a href="<?php echo $list_link ?>">
                                    <i class="fas fa-list"></i>
                                    <span>리스트</span>
                                </a>
                            </span>
                            <span>
                                <a href="<?php echo $del_link; ?>" onclick="del(this.href); return false;">
                                    <i class="fas fa-trash"></i>
                                    <span>삭제</span>
                                </a>
                            </span>
                        </span>
                    </span>
                    <h6 class="mt-0 mb-0">
                        <!--<span class="badge badge-secondary mr-2">보낸사람</span>-->
                        <?php echo $nick ?>
                    </h6>
                    <p class="text-muted mb-0">
                        <i class="fas fa-clock mr-2"></i><?php echo $memo['me_send_datetime'] ?>
                    </p>
                </div>
            </li>
        </ul>
    </div>
    <div class="card-body">
	    <?php echo conv_content($memo['me_memo'], 0) ?>
    </div>
    <div class="card-footer">
        <div class="row justify-content-center">
            <div class="col-sm-4">
	            <?php if ($kind == 'recv') {  ?>
                    <a href="./memo_form.php?me_recv_mb_id=<?php echo $mb['mb_id'] ?>&amp;me_id=<?php echo $memo['me_id'] ?>" class="btn btn-primary btn-block" role="button">답장</a>
                <?php }  ?>
            </div>
            <div class="col-sm-4">
                <button type="button" onclick="window.close();" class="btn btn-light btn-block">창닫기</button>
            </div>
        </div>
    </div>
</div>
<!-- } 쪽지보기 끝 -->