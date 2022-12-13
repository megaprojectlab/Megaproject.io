<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 쪽지 목록 시작 { -->
<div class="card border m-2">
    <div class="card-header">
        <header class="mb-4">
            <h4 class="card-title d-inline-block"><?php echo $g5['title'] ?></h4>
            <div class="d-inline-block float-right">
                전체 <?php echo $kind_title ?>쪽지 <span class="text-danger font-weight-bold"><?php echo $total_count ?></span>통
            </div>
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
        <div>
            <span class="badge badge-danger mr-2">주의</span>쪽지 보관일수는 최대 <span class="text-danger"><?php echo $config['cf_memo_del'] ?></span>일 입니다!
        </div>
    </div>

    <div class="card-body p-0">
        <ul class="list-unstyled">
	        <?php
	        for ($i=0; $i<count($list); $i++) {
                $readed = (substr($list[$i]['me_read_datetime'],0,1) == 0) ? '' : 'bg-light';
                $memo_preview = utf8_strcut(strip_tags($list[$i]['me_memo']), 30, '..');
	        ?>
                <li class="media mb-0 pt-2 pb-2 border-top-0 border-left-0 border-right-0 <?php echo $readed; ?>">
<!--                    <img src="--><?php //echo G5_THEME_URL ?><!--/images/testimonial/1.jpg" class="mr-3" style="width: 50px;">-->
	                <?php
	                echo $_ACETHEME->get_member_profile_img_memo(get_member_profile_img($list[$i]['mb_id']));
	                ?>
                    <div class="media-body">
                        <span class="float-right">
                            <a href="<?php echo $list[$i]['del_href']; ?>" onclick="del(this.href); return false;">
                                <i class="fa fa-trash mr-2"></i>삭제
                            </a>
                        </span>
                        <h6 class="mt-0 mb-0">
                            <!--<span class="badge badge-secondary mr-2">보낸사람</span>-->
                            <span class="mr-2"><?php echo $list[$i]['name']; ?></span>
                            <span><i class="fas fa-clock mr-1" aria-hidden="true"></i><?php echo $list[$i]['send_datetime']; ?></span>
                        </h6>
                        <p class="text-muted mb-0">
	                        <?php if (! $readed){ ?>
                                <span class="badge badge-danger mr-2">읽지 않음</span>
                            <?php } ?>
                            <a href="<?php echo $list[$i]['view_href']; ?>"><?php echo $memo_preview; ?></a>
                        </p>
                    </div>
                </li>
	        <?php } ?>
	        <?php if ($i==0) { ?>
                <li class="media pt-2 pb-2 border-top-0 border-left-0 border-right-0">
                    <div class="media-body">
                        <h6 class="mt-0 mb-0 py-3 text-center">
                            자료가 없습니다.
                        </h6>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="card-footer">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <button type="button" onclick="window.close();" class="btn btn-light btn-block">창닫기</button>
            </div>
        </div>
    </div>
</div>
<!-- } 쪽지 목록 끝 -->