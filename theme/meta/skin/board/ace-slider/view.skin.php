<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->
            <!-- ============================================================== -->
            <!-- Container -->
            <!-- ============================================================== -->
            <div class="container <?php echo $theme_config['margin_content_top']; ?>">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card border mb-5">
                            <article class="card-body">
                                <header class="mb-4">
                                    <?php if ($category_name) { ?>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <a name="" id="" class="btn btn-secondary btn-sm" href="#" role="button"><?php echo $view['ca_name']; // 분류 출력 끝 ?></a>
                                        </li>
                                    </ul>
                                    <?php } ?>
                                    <h3 class="card-title">
                                        <?php

                                        // 글제목 출력
                                        // 주의 : 슬라이더의 경우에만 제목을 이렇게 분기하는것 : 제목에 br태그를 삽입하는 경우를 대비하여
                                        if ( $is_admin ) { // 관리자의 경우, 태그도 보여줌
	                                        echo cut_str(get_text($view['wr_subject']), 70);
                                        } else { // 일반 사용자의 경우, 태그는 빼고 보여줌
	                                        echo cut_str(get_text(strip_tags($view['wr_subject'])), 70);
                                        }

                                        ?>
                                    </h3>
                                </header>

                                <div class="row mb-0">
                                    <div class="col-md-6 text-left">
                                        <ul class="list-unstyled">
                                            <li class="media border-0 p-0">
	                                            <?php
	                                            echo $_ACETHEME->get_member_profile_img(get_member_profile_img($view['mb_id']));
	                                            ?>
                                                <div class="media-body align-self-center">
                                                    <h5 class="mt-0 mb-1">
                                                        <strong><?php echo $view['name'] ?></strong>
	                                                    <?php if ($is_ip_view) { ?>
                                                            <span class="ml-2 text-muted"><?php echo $ip ?></span>
	                                                    <?php } ?>
                                                    </h5>
                                                    <ul class="text list-inline">
                                                        <li class="list-inline-item">
                                                            <strong><a href="#bo_vc"><i class="fas fa-comment-dots" aria-hidden="true"></i> <?php echo number_format($view['wr_comment']) ?>건</a></strong>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <strong><i class="fas fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?>회</strong>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-clock" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 text-right align-self-center">
                                        <ul class="list-inline">
	                                        <?php if ($scrap_href) { ?>
                                                <!--<li class="list-inline-item">
                                                    <a href="<?php /*echo $scrap_href; */?>" target="_blank" class="btn btn-link p-0" role="button" onclick="win_scrap(this.href); return false;" data-toggle="tooltip" data-placement="top" data-html="true" title="스크랩">
                                                        <i class="fas fa-bookmark text-primary" aria-hidden="true"></i>
                                                    </a>
                                                </li>-->
	                                        <?php } ?>
                                            <?php if ($update_href) { ?>
                                                <li class="list-inline-item">
                                                    <a href="<?php echo $update_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="수정">
                                                        <i class="fas fa-edit text-danger" aria-hidden="true"></i>
                                                        <!--<i class="fas fa-pen-square text-danger" aria-hidden="true"></i>-->
                                                    </a>
                                                </li>
                                            <?php } ?>
                                            <?php if ($delete_href) { ?>
                                                <li class="list-inline-item">
                                                    <a href="<?php echo $delete_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="삭제" onclick="del(this.href); return false;">
                                                        <i class="fas fa-trash text-danger" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                            <?php if ($copy_href) { ?>
                                                <li class="list-inline-item">
                                                    <a href="<?php echo $copy_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="복사" onclick="board_move(this.href); return false;">
                                                        <i class="fas fa-copy text-danger" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                            <?php if ($move_href) { ?>
                                                <li class="list-inline-item">
                                                    <a href="<?php echo $move_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="이동" onclick="board_move(this.href); return false;">
                                                        <i class="fas fa-arrows-alt text-danger" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                            <li class="list-inline-item">
                                                <a href="<?php echo $list_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="목록">
                                                    <i class="fas fa-list" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <?php if ($reply_href) { ?>
                                                <li class="list-inline-item">
                                                    <a href="<?php echo $reply_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="답변">
                                                        <i class="fas fa-reply" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                            <?php if ($write_href) { ?>
                                                <li class="list-inline-item">
                                                    <a href="<?php echo $write_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="글쓰기">
                                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                            <?php if ($search_href) { ?>
                                                <!--<li class="list-inline-item">
                                                    <a href="<?php /*echo $search_href */?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="검색">
                                                        <i class="fas fa-search" aria-hidden="true"></i>
                                                    </a>
                                                </li>-->
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <hr class="mt-2 mb-3"/>

                                <!-- SNS버튼 및 스크랩버튼 출력 { -->
                                <div class="mb-5" style="">
	                                <?php if ($scrap_href) { ?>
                                        <a href="<?php echo $scrap_href; ?>" target="_blank" class="btn btn-sm btn-secondary mr-2" role="button" onclick="win_scrap(this.href); return false;">
                                            <i class="fas fa-bookmark mr-2" aria-hidden="true"></i>스크랩
                                        </a>
	                                <?php } ?>
                                    <?php
                                        function callback_view_sns_skin($buffer) {

                                            // 치환전에 필요없는 것들 삭제
	                                        $buffer = preg_replace('/\<span\>페이스북(.*)공유\<\/span\>/' , "" , $buffer);
	                                        $buffer = preg_replace('/\<span\>트위터(.*)공유\<\/span\>/' , "" , $buffer);
	                                        $buffer = preg_replace('/\<span\>구글(.*)공유\<\/span\>/' , "" , $buffer);

	                                        // 치환대상 처리
	                                        $buffer = str_replace('id="bo_v_sns"', 'id="" class="list-inline d-inline-block"', $buffer);
	                                        $buffer = str_replace('<li>', '<li class="list-inline-item mr-0" data-toggle="tooltip" data-placement="top" data-html="true" title="공유하기">', $buffer);
	                                        $buffer = str_replace('class="sns_f"', 'class="btn btn-sm btn-primary" role="button"', $buffer);
	                                        $buffer = str_replace('class="sns_t"', 'class="btn btn-sm btn-info" role="button"', $buffer);
	                                        $buffer = str_replace('class="sns_g"', 'class="btn btn-sm btn-danger" role="button"', $buffer);
//	                                        $buffer = str_replace('<img src', '<img class="img-responsive" src', $buffer);
//	                                        $buffer = str_replace('<img src', '<img class="img-thumbnail" src', $buffer);
	                                        $buffer = str_replace('width="20"', 'width="15"', $buffer);
//	                                        $buffer = str_replace('', '', $buffer);

                                            return $buffer;
                                        }
                                        ob_start("callback_view_sns_skin");
                                        include_once(G5_SNS_PATH."/view.sns.skin.php");
                                        ob_end_flush();
                                    ?>
                                </div>
                                <!-- } SNS버튼 및 스크랩버튼 출력 -->


                                <!-- 내용 출력 { -->
                                <div class="mb-5">
                                    <?php
//                                        echo get_view_thumbnail($view['content']);
                                        echo $_ACETHEME->get_view_thumbnail($view['content']);
                                    ?>
                                </div>
                                <!-- } 내용 출력 -->


                                <!-- 서명 출력 { -->
                                <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>
                                <!-- } 서명 출력 -->


                                <!--  추천 비추천 시작 { -->
                                <?php if ( $good_href || $nogood_href) { ?>

                                    <div class="mb-5 text-center">
                                        <?php if ($good_href) { ?>
                                        <a class="btn btn-outline-primary m-2" id="good_button" href="<?php echo $good_href.'&amp;'.$qstr ?>" role="button">
                                            <i class="far fa-thumbs-up mr-2" aria-hidden="true"></i><span class="mr-1">추천</span>
                                            <span class="badge badge-primary"><?php echo number_format($view['wr_good']) ?></span>
                                        </a>
                                        <?php } ?>
                                        <?php if ($nogood_href) { ?>
                                        <a class="btn btn-outline-danger m-2" id="nogood_button" href="<?php echo $nogood_href.'&amp;'.$qstr ?>" role="button">
                                            <i class="far fa-thumbs-down mr-2" aria-hidden="true"></i><span class="mr-1">비추천</span>
                                            <span class="badge badge-danger"><?php echo number_format($view['wr_nogood']) ?></span>
                                        </a>
                                        <?php } ?>
                                    </div>

                                <?php } else {
                                    if($board['bo_use_good'] || $board['bo_use_nogood']) {
                                ?>

                                        <div class="mb-5 text-center">
                                            <?php if($board['bo_use_good']) { ?>
                                                <button class="btn btn-outline-primary m-2" data-toggle="tooltip" title="로그인 후 추천 가능!">
                                                    <i class="far fa-thumbs-up mr-2" aria-hidden="true"></i><span class="mr-1">추천</span>
                                                    <span class="badge badge-primary"><?php echo number_format($view['wr_good']) ?></span>
                                                </button>
                                            <?php } ?>
                                            <?php if($board['bo_use_nogood']) { ?>
                                                <button class="btn btn-outline-danger m-2" data-toggle="tooltip" title="로그인 후 비추천 가능!">
                                                    <i class="far fa-thumbs-down mr-2" aria-hidden="true"></i><span class="mr-1">비추천</span>
                                                    <span class="badge badge-danger"><?php echo number_format($view['wr_nogood']) ?></span>
                                                </button>
                                            <?php } ?>
                                        </div>

                                        <script>
                                            $(document).ready(function(){
                                                $('[data-toggle="tooltip"]').tooltip();
                                            });
                                        </script>

                                <?php
                                    }
                                }
                                ?>
                                <!-- }  추천 비추천 끝 -->


                                <!-- 첨부파일 시작 { -->
                                <?php
                                $cnt = 0;
                                if ($view['file']['count']) {
                                    for ($i=0; $i<count($view['file']); $i++) {
//                                        if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                                        if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'])
                                            $cnt++;
                                    }
                                }
                                ?>

                                <?php if($cnt) { ?>
                                    <div class="row">
                                        <?php

                                        // 슬라이더 게시판의 경우, 관리자의 경우에만 첨부파일이 보임
                                        if ($is_admin) {

                                            // 가변 파일
                                            for ($i=0; $i<count($view['file']); $i++) {

	                                            $attach_file_label = "";
	                                            if ($i == 0) {
		                                            $attach_file_label = "배경이미지";
	                                            } else if ($i == 1) {
		                                            $attach_file_label = "동영상";
	                                            } else if ($i == 2) {
		                                            $attach_file_label = "동영상 미리보기 이미지";
	                                            } else {
		                                            $attach_file_label = "파일 #".($i + 1);
	                                            }

//                                                if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
                                                if (isset($view['file'][$i]['source']) && $view['file'][$i]['source']) {
                                        ?>

                                                    <div class="col-12 wrap-feature3-box">
                                                        <div class="card border mb-2">
                                                            <div class="card-body d-flex p-4">
                                                                <div class="align-self-center mt-0 mb-0 mr-4">
                                                                    <i class="fas fa-file display-5 text-success-gradiant"></i>
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <h5 class="font-medium mb-0">
                                                                        <span class="badge badge-secondary mr-2" style="width: 150px;"><?php echo $attach_file_label; ?></span>
                                                                        <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download linking">
                                                                            <span class="mr-2"><?php echo $view['file'][$i]['source'] ?></span>
                                                                            <span class="text-muted small"><?php echo $view['file'][$i]['content'] ?></span>
                                                                        </a>
                                                                    </h5>
                                                                    <!--<p class="mt-0">You can relay on our amazing features list and also our customer services will be great experience.</p>-->
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <?php echo $view['file'][$i]['size'] ?>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <i class="fas fa-download mr-2"></i><?php echo $view['file'][$i]['download'] ?>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <i class="fas fa-clock mr-2" aria-hidden="true"></i><?php echo $view['file'][$i]['datetime'] ?>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                        <?php
                                                } // end if : isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']
                                            } // end for

                                        } // end if : $is_admin
                                        ?>
                                    </div>
                                <?php } ?>
                                <!-- } 첨부파일 끝 -->

                            </article>
                        </div><!-- // .card -->

                        <!-- 다음글 및 이전글 시작 { -->
	                    <?php if ($prev_href || $next_href) { ?>
                            <div class="list-group mb-5" style="border: solid 2px #ccc;">
			                    <?php if ($prev_href) { ?>
                                    <a href="<?php echo $prev_href ?>" class="list-group-item list-group-item-action">
                                        <span class="badge badge-dark mr-3"><i class="fas fa-chevron-up mr-2" aria-hidden="true"></i>이전글</span>
					                    <?php echo $prev_wr_subject;?>
                                        <span class="float-right"><?php echo substr($prev_wr_date, '2', '8'); ?></span>
                                    </a>
			                    <?php } ?>
			                    <?php if ($next_href) { ?>
                                    <a href="<?php echo $next_href ?>" class="list-group-item list-group-item-action">
                                        <span class="badge badge-dark mr-3"><i class="fas fa-chevron-down mr-2" aria-hidden="true"></i>다음글</span>
					                    <?php echo $next_wr_subject;?>
                                        <span class="float-right"><?php echo substr($prev_wr_date, '2', '8'); ?></span>
                                    </a>
			                    <?php } ?>
                            </div>
	                    <?php } ?>
                        <!-- } 다음글 및 이전글 끝 -->

                        <?php
                        // 코멘트 입출력
                        include_once(G5_BBS_PATH.'/view_comment.php');
                        ?>

                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container -->
            <!-- ============================================================== -->
<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->