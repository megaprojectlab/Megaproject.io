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

<div class="d-inline">

    <?php
    if ($list_obj['is_notice']) { // 공지사항
        echo '<a class=""><span class="badge badge-danger border text-center mr-1 py-1 text-truncate align-middle align-self-center" data-toggle="tooltip" data-placement="top" data-html="true" title="공지" style="width: 70px;">공지</span></a>';
    } else if ($wr_id == $list_obj['wr_id']) {
        echo '<a class=""><span class="badge badge-success border text-center mr-1 py-1 text-truncate align-middle align-self-center" data-toggle="tooltip" data-placement="top" data-html="true" title="열람중" style="width: 70px;">열람중</span></a>';
    } else {
    ?>
        <a class=""><span class="badge badge-<?php echo $num_badge_color ? $num_badge_color : 'dark' ?> border text-center mr-1 py-1 text-truncate align-middle align-self-center" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $list_obj['num'] ?>" style="width: 70px;"><?php echo $list_obj['num'] ?></span></a>
    <?php
    }
    ?>

    <!--Q&A 게시판일 경우-->
	<?php if ($is_qa) { ?>
        <a href="javascript:void(0)" class="">
            <span class="badge badge-<?php echo $comment_cnt_badge_color ?> border text-center mr-1 py-1 text-truncate align-middle align-self-center" data-toggle="tooltip" data-placement="top" data-html="true" title="답변여부"><?php echo $comment_cnt_badge_text ?></span>
        </a>
	<?php } ?>

    <?php if ($is_category && $list_obj['ca_name']) { ?>
        <a href="<?php echo $list_obj['ca_name_href'] ?>" class="">
            <span class="badge badge-<?php echo $cat_badge_color ? $cat_badge_color : 'secondary' ?> border text-center mr-2 py-1 text-truncate align-middle align-self-center" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $list_obj['ca_name'] ?>" <?php echo $cat_style ?> ><?php echo $list_obj['ca_name'] ?></span>
        </a>
    <?php } ?>

</div>


<div class="<?php echo $is_gallery ? 'd-block my-3' : 'd-inline' ?>" style="padding-left:<?php echo $list_obj['reply'] ? (strlen($list_obj['wr_reply'])*15) : '0'; ?>px">

    <?php
    if ($list_obj['icon_secret']) {
        echo '<i class="fas fa-lock text-warning mr-1 align-middle align-self-center"></i>';
    }

//    if ($list_obj['icon_reply']) {
        //echo '<i class="fab fa-replyd text-dark align-self-center"></i>';
//    }
    ?>

    <a href="<?php echo $list_obj['href'] ?>" class="mr-1 align-middle align-self-center <?php echo $linking_class; ?> <?php echo $white_link_class; ?>" <?php echo $faq_attr; ?> >
        <?php
        if ($list_obj['is_notice']) { // 공지사항일 경우 제목출력

            if ($is_slider) { // 주의 : 슬라이더의 경우에만 제목을 이렇게 분기하는것 : 제목에 br태그를 삽입하는 경우를 대비하여
	            if($is_admin) { // 관리자의 경우, 태그도 보여줌
		            echo "<strong class='font-bold'>" . $_ACETHEME->get_search_contents($list_obj['subject']) . "</strong>";
	            } else { // 일반 사용자의 경우, 태그는 빼고 보여줌
		            echo "<strong class='font-bold'>" . $_ACETHEME->get_search_contents(strip_tags($list_obj['wr_subject'])) . "</strong>";
	            }
            } else {
	            echo "<strong class='font-bold'>" . $_ACETHEME->get_search_contents($list_obj['subject']) . "</strong>";
            }

        } else { // 일반 글일 경우 제목출력

	        if ($is_slider) { // 주의 : 슬라이더의 경우에만 제목을 이렇게 분기하는것 : 제목에 br태그를 삽입하는 경우를 대비하여
		        if($is_admin) { // 관리자의 경우, 태그도 보여줌
			        echo "<strong class='font-bold'>" . $_ACETHEME->get_search_contents($list_obj['subject']) . "</strong>";
		        } else { // 일반 사용자의 경우, 태그는 빼고 보여줌
			        echo "<strong class='font-bold'>" . $_ACETHEME->get_search_contents(strip_tags($list_obj['wr_subject'])) . "</strong>";
		        }
	        } else {
		        echo "<strong class='font-bold'>" . $_ACETHEME->get_search_contents($list_obj['subject']) . "</strong>";
	        }

        }

        if ($has_arrow) {
	        echo '<i class="fas fa-arrow-right"></i>';
        }

        ?>
    </a>

    <?php if ($list_obj['comment_cnt']) { ?>
        <span class="badge badge-pill badge-secondary border text-center mr-2 py-1 text-truncate align-middle align-self-center"><?php echo $list_obj['comment_cnt']; ?></span>
    <?php } ?>

    <?php
    // if ($list_obj['link']['count']) { echo '['.$list_obj['link']['count']}.']'; }
    // if ($list_obj['file']['count']) { echo '<'.$list_obj['file']['count'].'>'; }

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

</div>
