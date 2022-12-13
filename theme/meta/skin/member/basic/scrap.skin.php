<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 스크랩 목록 시작 { -->
<div class="card border m-2">
    <div class="card-body">
        <h4 class="card-title text-center"><?php echo $g5['title'] ?></h4>
    </div>
    <ul class="list-group list-group-flush">
	    <?php for ($i=0; $i<count($list); $i++) {  ?>
            <li class="list-group-item">
                <div>
                    <span class="float-right">
                        <a href="<?php echo $list[$i]['del_href'];  ?>" onclick="del(this.href); return false;">
                            <i class="fas fa-trash"></i>
                        </a>
                    </span>
                    <h6 class="title mt-0 mb-1">
                        <a href="<?php echo $list[$i]['opener_href_wr_id'] ?>" target="_blank" onclick="opener.document.location.href='<?php echo $list[$i]['opener_href_wr_id'] ?>'; return false;" class=""><?php echo $list[$i]['subject'] ?></a>
                    </h6>
                </div>
                <div>
                    <a href="<?php echo $list[$i]['opener_href'] ?>" class="mr-2" target="_blank" onclick="opener.document.location.href='<?php echo $list[$i]['opener_href'] ?>'; return false;">
                        <span class="badge badge-secondary">
                            <?php echo $list[$i]['bo_subject'] ?>
                        </span>
                    </a>
                    <i class="far fa-clock mr-1"></i><?php echo $list[$i]['ms_datetime'] ?>
                </div>
            </li>
	    <?php }  ?>
	    <?php
        if ($i == 0) {
        ?>
            <li class="list-group-item">
                <div>
                    <h6 class="title mt-0 mb-1 text-center">
                        자료가 없습니다.
                    </h6>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
    <div class="card-body">
	    <?php echo $_ACETHEME->get_paging($page, $total_page, "?$qstr&amp;page="); ?>
    </div>
    <div class="card-footer">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <button type="button" onclick="window.close();" class="btn btn-light btn-block">창닫기</button>
            </div>
        </div>
    </div>
</div>
<!-- } 스크랩 목록 끝 -->