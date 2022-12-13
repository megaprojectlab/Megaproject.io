<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<div class="card border">
    <div class="card-body">
	    <?php
	    // 공용 헤드라인 가져오기
	    incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/headline_latest.php', array(
		    'bo_table' => $bo_table,
		    'bo_subject' => $bo_subject
	    ));
	    ?>
        <ul class="list-group">
		    <?php for ($i=0; $i<$list_count; $i++) {  ?>
                <li class="list-group-item list-group-item-action border-0 px-0 py-0">
				    <?php
				    // 공용 최근게시물 제목 가져오기
				    incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
					    'list_obj' => $list[$i],
                        'is_basic' => true
				    ));
				    ?>

                </li>
		    <?php }  ?>
		    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
                <li class="list-group-item list-group-item-action border-0 px-0 py-0">게시물이 없습니다.</li>
		    <?php }  ?>
        </ul>
    </div>
</div>
