<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>


<!-- ============================================================== -->
<!-- 보유포인트 START -->
<!-- ============================================================== -->
<div class="card border m-2">
    <div class="card-body text-center">
        <header class="mb-4">
            <h2 class="card-title"><?php echo $g5['title'] ?></h2>
        </header>
	    <?php
	    echo $_ACETHEME->get_member_profile_img_point(get_member_profile_img($mb['mb_id']));
	    ?>
        <h3 class="title mt-2 mb-0"><?php echo number_format($member['mb_point']); ?></h3>
        <p>보유포인트</p>
    </div>
    <div class="list-group list-group-flush">
	    <?php
	    $sum_point1 = $sum_point2 = $sum_point3 = 0;

	    $sql = " select *
                        {$sql_common}
                        {$sql_order}
                        limit {$from_record}, {$rows} ";
	    $result = sql_query($sql);
	    for ($i=0; $row=sql_fetch_array($result); $i++) {
            $point1 = $point2 = 0;
            $point_use_class = '';
            if ($row['po_point'] > 0) {
                $point1 = '+' .number_format($row['po_point']);
                $sum_point1 += $row['po_point'];
            } else {
                $point2 = number_format($row['po_point']);
                $sum_point2 += $row['po_point'];
                $point_use_class = 'point_use';
            }

            $po_content = $row['po_content'];

            $expr = '';
            if($row['po_expired'] == 1)
                $expr = ' txt_expired';
	    ?>
            <a class="list-group-item list-group-item-action">
                <div class="d-sm-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?php echo $po_content; ?></h5>
                    <small><?php if ($point1) echo $point1; else echo $point2; ?></small>
                </div>
                <small><i class="fas fa-clock mr-1" aria-hidden="true"></i><?php echo $row['po_datetime']; ?></small>
                <small class="ml-2">
	                <?php if ($row['po_expired'] == 1) { ?>
                        만료 <?php echo substr(str_replace('-', '', $row['po_expire_date']), 2); ?>
	                <?php } else echo $row['po_expire_date'] == '9999-12-31' ? '&nbsp;' : $row['po_expire_date']; ?>
                </small>
            </a>
        <?php
	    }

	    if ($i == 0)
		    echo '<a class="list-group-item list-group-item-action">
                        <div class="text-center">
                            <h5 class="mb-1">자료가 없습니다!</h5>
                        </div>
                    </a>';
	    else {
		    if ($sum_point1 > 0)
			    $sum_point1 = "+" . number_format($sum_point1);
		    $sum_point2 = number_format($sum_point2);
	    }
	    ?>

        <a class="list-group-item list-group-item-action bg-light">
            <div class="d-sm-flex w-100 justify-content-between">
                <strong>소계</strong>
                <span class="font-weight-bold">
                    <span><?php echo $sum_point1; ?></span>
                    <span class="ml-3"><?php echo $sum_point2; ?></span>
                </span>
            </div>
        </a>

    </div>
    <div class="card-body">

	    <?php echo $_ACETHEME ->get_paging($page, $total_page, $_SERVER['SCRIPT_NAME'] . '?' . $qstr . '&amp;page=');;  ?>

        <div class="row justify-content-center">
            <div class="col-sm-4">
                <button type="button" onclick="window.close();" class="btn btn-light btn-block">창닫기</button>
            </div>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- 보유포인트 END -->
<!-- ============================================================== -->