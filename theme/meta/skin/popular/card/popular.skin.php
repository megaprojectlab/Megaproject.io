<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$popular_skin_url.'/style.css">', 0);
?>

<!-- 인기검색어 시작 { -->
<div class="card border">
    <div class="card-body">
        <h3 class="card-title">인기검색어</h3>
        <ul class="list-group">
	        <?php
	        if( isset($list) && is_array($list) ){
	            for ($i=0; $i<count($list); $i++) {
	        ?>
            <li class="list-group-item list-group-item-action border-0 px-0 py-0">
                <div class="row">
                    <div class="col-6 text-left d-flex">
                        <span class="badge badge-dark align-self-center" style="width: 30px;"><?php echo $i+1; ?></span>
                    </div>
                    <div class="col-6 text-right">
                        <a href="<?php echo G5_BBS_URL ?>/search.php?sfl=wr_subject&amp;sop=and&amp;stx=<?php echo urlencode($list[$i]['pp_word']) ?>">
		                    <?php echo get_text($list[$i]['pp_word']); ?>
                        </a>
                    </div>
                </div>
            </li>
            <?php
	            } //end for
	        } //end if
	        ?>
        </ul>
    </div>
</div>
<!-- } 인기검색어 끝 -->