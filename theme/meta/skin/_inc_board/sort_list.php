<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$sort_current = $_ACETHEME->get_sort_current();

?>


<div class="row small">
    <div class="<?php echo $grid; ?> text-truncate">
        <span class="font-bold" data-toggle="tooltip" data-placement="top" data-html="true" title=""><?php echo $list_obj['name'] ?></span>
    </div><!-- // .col -->
    <div class="<?php echo $grid; ?> text-truncate">
        <span class="badge badge-light mr-1" data-toggle="tooltip" data-placement="top" data-html="true" title="조회수순 정렬">
            <?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>조회수<?php echo $sort_current['icon_sort_wr_hit']; ?></a>
        </span>
        <span class="" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $list_obj['wr_hit'] ?>"><?php echo $list_obj['wr_hit'] ?></span>
    </div><!-- // .col -->
    <div class="<?php echo $grid; ?> text-truncate">
        <span class="badge badge-light mr-1" data-toggle="tooltip" data-placement="top" data-html="true" title="날짜순 정렬">
            <?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>날짜<?php echo $sort_current['icon_sort_wr_datetime']; ?></a>
        </span>
        <span class="" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $list_obj['datetime2'] ?>"><?php echo $list_obj['datetime2'] ?></span>
    </div><!-- // .col -->
	<?php if ($is_good) { ?>
        <div class="<?php echo $grid; ?> text-truncate">
            <span class="badge badge-light mr-1" data-toggle="tooltip" data-placement="top" data-html="true" title="추천순 정렬">
                <?php echo subject_sort_link('wr_good', $qstr2, 1) ?>추천<?php echo $sort_current['icon_sort_wr_good']; ?></a>
            </span>
            <span class="" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $list_obj['wr_good'] ?>"><?php echo $list_obj['wr_good'] ?></span>
        </div><!-- // .col -->
	<?php } ?>
	<?php if ($is_nogood) { ?>
        <div class="<?php echo $grid; ?> text-truncate">
            <span class="badge badge-light mr-1" data-toggle="tooltip" data-placement="top" data-html="true" title="비추천순 정렬">
                <?php echo subject_sort_link('wr_nogood', $qstr2, 1) ?>비추천<?php echo $sort_current['icon_sort_wr_nogood']; ?></a>
            </span>
            <span class="" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $list_obj['wr_nogood'] ?>"><?php echo $list_obj['wr_nogood'] ?></span>
        </div><!-- // .col -->
	<?php } ?>
</div>