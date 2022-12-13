<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$thumb_width = 500; // 이미지를 전체 영역에 꽉 차게하려면 : 이미지의 width와 height를 동일하게 할것!
$thumb_height = 500;
$list_count = (is_array($list) && $list) ? count($list) : 0;

?>

<div class="mini-spacer feature16">

	<?php
	// 공용 헤드라인 가져오기
	incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/headline_latest.php', array(
		'bo_table' => $bo_table,
		'bo_subject' => $bo_subject
	));
	?>

	<?php
	for ($i=0; $i<$list_count; $i++) {
		$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

		if($thumb['src']) {
			$img = $thumb['src'];
		} else {
			$img = 'https://via.placeholder.com/'.$thumb_width.'x'.$thumb_height.'.png?text=No Images';
			$thumb['alt'] = '이미지가 없습니다.';
		}
		$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-responsive">';

		if ($i % 2 == 0) {

	?>
			<div class="row wrap-feature-16">
				<div class="col-lg-6 with-bg p-t-80 p-b-80" style="background-image:url('<?php echo $img; ?>');"></div>
				<div class="col-lg-6 <?php echo $_ACETHEME->get_bg_color_latest(); ?> text-white p-t-80 p-b-80">
					<div class="with-text px-5">
						<?php if ($list[$i]['ca_name']) { ?>
                            <a href="<?php echo $list[$i]['ca_name_href']; ?>">
                                <span class="label label-rounded border"><?php echo $list[$i]['ca_name']; ?></span>
                            </a>
						<?php } ?>
						<h2 class="text-white m-t-30 m-b-30">
							<?php
							// 공용 최근게시물 제목 가져오기
							incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
								'list_obj' => $list[$i],
                                'is_white_link' => true
							));
							?>
						</h2>
						<p class="op-7">
							<a href="<?php echo $list[$i]['href'] ?>" class="white-link">
								<?php
								echo $_ACETHEME->get_wr_content($list[$i]['wr_content'], 300);
								?>
							</a>
						</p>
						<a class="btn btn-outline-light btn-md btn-arrow" href="<?php echo $list[$i]['href'] ?>">
							<span>자세히보기 <i class="fas fa-arrow-right"></i></span>
						</a>
					</div>
				</div>
			</div>

	<?php

		} else {

	?>

			<div class="row wrap-feature-16">
				<div class="col-lg-6 <?php echo $_ACETHEME->get_bg_color_latest(); ?> text-white p-t-80 p-b-80">
					<div class="with-text px-5">
						<?php if ($list[$i]['ca_name']) { ?>
                            <a href="<?php echo $list[$i]['ca_name_href']; ?>">
                                <span class="label label-rounded border"><?php echo $list[$i]['ca_name']; ?></span>
                            </a>
						<?php } ?>
						<h2 class="text-white m-t-30 m-b-30">
							<?php
							// 공용 최근게시물 제목 가져오기
							incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
								'list_obj' => $list[$i],
								'is_white_link' => true
							));
							?>
						</h2>
						<p class="op-7">
							<a href="<?php echo $list[$i]['href'] ?>" class="white-link">
								<?php
								echo $_ACETHEME->get_wr_content($list[$i]['wr_content'], 300);
								?>
							</a>
						</p>
						<a class="btn btn-outline-light btn-md btn-arrow" href="<?php echo $list[$i]['href'] ?>">
							<span>자세히보기 <i class="fas fa-arrow-right"></i></span>
						</a>
					</div>
				</div>
				<div class="col-lg-6 with-bg p-t-80 p-b-80" style="background-image:url('<?php echo $img; ?>')"></div>
			</div>

	<?php
		} //end if
	} //end for
	?>

	<?php if ($list_count == 0) { //게시물이 없을 때  ?>
		<div class="row wrap-feature-26">
            <div class="col-12">
                <div class="card border mb-0">
                    <div class="card-body">
                        <p class="text-center mb-0 p-5">게시물이 없습니다!</p>
                    </div>
                </div>
            </div>
		</div>
	<?php }  ?>

</div>