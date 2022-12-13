<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$white_link_class = "";
if ($is_white_link) {
	$white_link_class = "white-link";
}

$linking_class = "";
if ($has_arrow) {
	$linking_class = "linking";
}

$cat_style = "";
if ($is_basic) {
	$cat_style = 'style="width: 70px;"';
}

$comment_cnt_badge_color = "secondary";
$comment_cnt_badge_text = '답변대기';
if ($list_obj['comment_cnt']) {
	$comment_cnt_badge_color = 'success';
	$comment_cnt_badge_text = '답변완료';
}

$faq_attr = '';
if ($is_faq) {
	$faq_attr = 'data-toggle="collapse" data-target="#collapse_'.$bo_table.'_'.$i.'" aria-expanded="false" aria-controls="collapse_'.$bo_table.'_'.$i.'"';
}
?>


<?php

echo '<span class="badge badge-dark border text-center mr-1 py-1 text-truncate align-middle align-self-center">'.$list_obj['datetime2'].'</span>';

//Q&A 게시판일 경우
if ($is_qa) {
	echo '<a href="javascript:void(0)" class="">
            <span class="badge badge-'.$comment_cnt_badge_color.' border text-center mr-1 py-1 text-truncate align-middle align-self-center" data-toggle="tooltip" data-placement="top" data-html="true" title="답변여부">'.$comment_cnt_badge_text.'</span>
        </a>';
}

if ($list_obj['ca_name']) {
	echo '<a href="'.$list_obj['ca_name_href'].'">';
	echo '<span class="badge badge-secondary border text-center mr-2 py-1 text-truncate align-middle align-self-center" data-toggle="tooltip" data-placement="top" data-html="true" title="'.$list_obj['ca_name'].'" '.$cat_style.' >'.$list_obj['ca_name'].'</span>';
	echo "</a>";
}

if ($list_obj['icon_secret']) {
	echo '<i class="fas fa-lock text-warning mr-1 align-middle align-self-center"></i>';
}

echo '<a href="'.$list_obj['href'].'" class="mr-1 align-middle align-self-center '.$linking_class.' '.$white_link_class.'" '.$faq_attr.'>';
if ($list_obj['is_notice']) {
	echo "<strong>".$list_obj['subject']."</strong>";
} else {
	echo $list_obj['subject'];
}
if ($has_arrow) {
	echo '<i class="fas fa-arrow-right"></i>';
}
echo '</a>';

if ($list_obj['comment_cnt']) {
	echo '<span class="badge badge-pill badge-secondary border text-center mr-2 py-1 text-truncate align-middle align-self-center">'.$list_obj['comment_cnt'].'</span>';
}

if ($list_obj['icon_new']) {
	echo '<span class="badge badge-danger border small text-center mr-1 py-1 text-truncate align-middle align-self-center">NEW</span>';
}
if ($list_obj['icon_hot']) {
	echo '<i class="fas fa-fire-alt text-danger mr-1 align-middle align-self-center"></i>';
}
if ($list_obj['icon_file']) {
	echo '<i class="fas fa-download text-success mr-1 align-middle align-self-center"></i>';
}
if ($list_obj['icon_link']) {
	echo '<i class="fas fa-link text-primary mr-1 align-middle align-self-center"></i>';
}

?>
