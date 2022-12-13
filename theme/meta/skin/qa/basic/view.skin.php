<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$qa_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->
<div class="container mt-3 mb-5">
    <!--<h2>Q & A (1:1문의) - 내용보기</h2>-->
    <div class="row">
        <div class="col">
            <div class="card border mb-3">
                <div class="card-header">
                    <h3 class="">
                        <span class="badge badge-primary mr-1">질문</span>
                        <span class="badge badge-info mr-1"><?php echo $view['category']; ?></span>
	                    <?php  echo $view['subject']; // 글제목 출력 ?>
                    </h3>
                    <div class="">
                        <ul class="list-inline d-inline mb-3">
                            <li class="list-inline-item ">
	                            <?php echo $view['name']; ?>
                            </li>
                            <li class="list-inline-item ml-2">
                                <i class="fa fa-clock mr-1" aria-hidden="true"></i><?php echo $view['datetime']; ?>
                            </li>
	                        <?php if($view['email']) { ?>
                            <li class="list-inline-item ml-2">
                                <i class="fa fa-envelope mr-1" aria-hidden="true"></i><?php echo $view['email']; ?>
                            </li>
	                        <?php } ?>
	                        <?php if($view['hp']) { ?>
                            <li class="list-inline-item ml-2">
                                <i class="fa fa-phone mr-1" aria-hidden="true"></i><?php echo $view['hp']; ?>
                            </li>
	                        <?php } ?>
                        </ul>
                        <!-- 게시물 상단 버튼 시작 { -->
                        <div class="float-right">
	                        <?php
	                        ob_start();
	                        ?>
                            <ul class="list-inline">
	                            <?php if ($update_href) { ?>
                                    <li class="list-inline-item">
                                        <a href="<?php echo $update_href ?>" class="btn btn-link p-0" role="button" data-toggle="tooltip" data-placement="top" data-html="true" title="수정">
                                            <i class="fas fa-edit text-danger" aria-hidden="true"></i>
                                        </a>
                                    </li>
	                            <?php } ?>
	                            <?php if ($delete_href) { ?>
                                    <li class="list-inline-item">
                                        <a href="<?php echo $delete_href ?>" class="btn btn-link p-0" onclick="del(this.href); return false;" role="button" data-toggle="tooltip" data-placement="top" data-html="true" title="삭제">
                                            <i class="fas fa-trash text-danger" aria-hidden="true"></i>
                                        </a>
                                    </li>
	                            <?php } ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo $list_href ?>" class="btn btn-link p-0" role="button" data-toggle="tooltip" data-placement="top" data-html="true" title="리스트">
                                        <i class="fas fa-list" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <?php if ($write_href) { ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo $write_href ?>" class="btn btn-link p-0" role="button" data-toggle="tooltip" data-placement="top" data-html="true" title="글쓰기">
                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                    </a>
                                </li>
		                        <?php } ?>
                            </ul>
	                        <?php
	                        $link_buttons = ob_get_contents();
	                        ob_end_flush();
	                        ?>
                        </div>
                        <!-- } 게시물 상단 버튼 끝 -->
                    </div>
                </div>
                <div class="card-body">
                    <!-- 업로드한 이미지(파일) 출력 { -->
                    <?php
	                if($view['img_count']) {
		                echo '<div class="mb-5 text-center">';

		                for ($i=0; $i<$view['img_count']; $i++) {
			                //echo $view['img_file'][$i];
			                echo '<div class="mb-3">';
//			                echo get_view_thumbnail($view['img_file'][$i], $qaconfig['qa_image_width']);
			                echo $_ACETHEME->get_view_thumbnail(get_view_thumbnail($view['img_file'][$i], $qaconfig['qa_image_width']));
			                echo '</div>';
		                }

		                echo '</div>';
	                }
	                ?>
                    <!-- } 업로드한 이미지(파일) 출력 -->


                    <!-- 본문 내용 시작 { -->
                    <div class="mb-5">
	                    <?php
//                            echo get_view_thumbnail($view['content'], $qaconfig['qa_image_width']);
	                        echo $_ACETHEME->get_view_thumbnail($view['content'], $qaconfig['qa_image_width']);
                        ?>
                    </div>
                    <!-- } 본문 내용 끝 -->


                    <!-- 첨부파일 시작 { -->
	                <?php if($view['download_count']) { ?>
                        <div class="row">
                            <?php
                            // 가변 파일
                            for ($i=0; $i<$view['download_count']; $i++) {
                            ?>
                                <div class="col-12 wrap-feature3-box">
                                    <div class="card border mb-2">
                                        <div class="card-body d-flex">
                                            <div class="icon-space align-self-center mt-0 mb-0 pb-0">
                                                <i class="fas fa-download display-5 text-success-gradiant"></i>
                                            </div>
                                            <div class="align-self-center">
                                                <h4 class="font-bold mb-0">
                                                    <a href="<?php echo $view['download_href'][$i];  ?>" class="view_file_download linking">
                                                        <span class=""><?php echo $view['download_source'][$i] ?></span>
                                                        <!--<span class="text-muted small"></span>-->
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
	                <?php } ?>
                    <!-- } 첨부파일 끝 -->

                </div> <!-- // .card-body -->
                <!--<div class="card-footer">

                </div>-->
            </div><!-- // .card -->

            <div class="row mb-5">
                <div class="col-3 col-md-2 text-left">
                    <a href="<?php echo $prev_href ?>" class="btn btn-inverse btn-block <?php echo $prev_href ? "" : "disabled"?>" role="button">
                        <i class="fa fa-caret-left mr-2" aria-hidden="true"></i>이전글
                    </a>
                </div>
                <div class="col-6 col-md-8">

                </div>
                <div class="col-3 col-md-2 text-right">
                    <a href="<?php echo $next_href ?>" class="btn btn-inverse btn-block <?php echo $next_href ? "" : "disabled"?>" role="button">
                        다음글<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

	        <?php
	        // 질문글에서 답변이 있으면 답변 출력, 답변이 없고 관리자이면 답변등록폼 출력
	        if(!$view['qa_type']) {
		        if($view['qa_status'] && $answer['qa_id'])
			        include_once($qa_skin_path.'/view.answer.skin.php');
		        else
			        include_once($qa_skin_path.'/view.answerform.skin.php');
	        }
	        ?>


	        <?php if($view['rel_count']) { ?>
                <h3>연관질문</h3>
                <div class="card border">
                    <ul class="list-group list-group-flush">
	                    <?php
	                    for($i=0; $i<$view['rel_count']; $i++) {
	                    ?>
                        <li class="list-group-item pt-2 pb-2">
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <!--<span class="badge badge-dark text-center mr-1" style="width: 70px;">100002</span>-->
                                    <a class="align-self-center">
                                        <span class="badge badge-primary text-center mr-1 text-truncate align-middle" style="width: 70px;"><?php echo get_text($rel_list[$i]['category']); ?></span>
                                    </a>
                                    <a class="align-self-center">
                                        <span class="badge badge-<?php echo ($rel_list[$i]['qa_status'] ? 'success' : 'secondary'); ?> text-center mr-1" style="width: 70px;">
                                            <?php echo $rel_list[$i]['qa_status'] ? '답변완료' : '답변대기' ?>
                                        </span>
                                    </a>
                                    <a href="<?php echo $rel_list[$i]['view_href']; ?>" class="font-bold align-self-center text-truncate align-middle">
                                        <?php echo $rel_list[$i]['subject']; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="row small">
                                <div class="col-4 col-sm-4 col-md-2 text-truncate">
                                    <span class="badge badge-light mr-2">등록일</span><span class="_attr_val"><?php echo $rel_list[$i]['date']; ?></span>
                                </div>
                            </div>
                        </li><!-- // .list-group-item -->
                        <?php
	                    }
	                    ?>
                    </ul><!-- // .list-gorup -->
                </div><!-- // .card -->
	        <?php } ?>


        </div>
    </div>
</div>
<!-- } 게시판 읽기 끝 -->

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});
</script>