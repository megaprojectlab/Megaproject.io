<?php
global $_ACETHEME;
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// 주의! 다른 스킨들과 공유되므로, $theme_path로 부터 접근해야 함
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/skin/board/ace-basic/style.css">', 0);

?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->
            <!-- ============================================================== -->
            <!-- Container -->
            <!-- ============================================================== -->
            <div class="<?php echo $theme_config['board_width']; ?> <?php echo $theme_config['margin_content_top']; ?>">
                <div class="row">
	                <?php if ( $theme_config['use_sidebar'] == 'left' && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE)) )  { ?>
                        <div class="<?php echo $theme_config['grid_sidebar']; ?>">
			                <?php include G5_THEME_PATH."/_sidebar/sidebar.php"; ?>
                        </div>
	                <?php } ?>
                    <div class="<?php echo ($theme_config['use_sidebar'] == 'left' || $theme_config['use_sidebar'] == 'right') && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE)) ? $theme_config['grid_content'] : "col-12"; ?>">

                        <div class="card border mb-3">
                            <article class="card-body">
                                <header class="mb-4">
                                    <?php if ($category_name) { ?>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <a name="" id="" class="btn btn-outline-secondary btn-sm" href="#" role="button"><?php echo $view['ca_name']; // 분류 출력 끝 ?></a>
                                        </li>
                                    </ul>
                                    <?php } ?>
                                    <h3 class="card-title">
                                        <?php
                                        echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
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
	                                        $buffer = str_replace('width="20"', 'width="15"', $buffer);

                                            return $buffer;
                                        }
                                        ob_start("callback_view_sns_skin");
                                        include_once(G5_SNS_PATH."/view.sns.skin.php");
                                        ob_end_flush();
                                    ?>

                                </div>
                                <!-- } SNS버튼 및 스크랩버튼 출력 -->


                                <!-- 업로드한 이미지(파일) 출력 { -->
                                <?php
                                // 파일 출력
                                $v_img_count = count($view['file']);
                                if($v_img_count) {
                                    echo '<div class="mb-5 text-center">';

                                    for ($i=0; $i<=count($view['file']); $i++) {
                                        echo '<div class="mb-3">';
//                                        echo get_file_thumbnail($view['file'][$i]);
                                        echo $_ACETHEME->get_view_thumbnail(get_file_thumbnail($view['file'][$i]));
                                        echo '</div>';
                                    }

                                    echo '</div>';
                                }
                                ?>
                                <!-- } 업로드한 이미지(파일) 출력 -->


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
                                            <span class="badge badge-light ml-2" id="bo_v_act_good"></span>
                                        </a>
                                        <?php } ?>
                                        <?php if ($nogood_href) { ?>
                                        <a class="btn btn-outline-danger m-2" id="nogood_button" href="<?php echo $nogood_href.'&amp;'.$qstr ?>" role="button">
                                            <i class="far fa-thumbs-down mr-2" aria-hidden="true"></i><span class="mr-1">비추천</span>
                                            <span class="badge badge-danger"><?php echo number_format($view['wr_nogood']) ?></span>
                                            <span class="badge badge-light ml-2" id="bo_v_act_nogood"></span>
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
                                        if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                                            $cnt++;
                                    }
                                }
                                ?>

                                <?php if($cnt) { ?>
                                    <div class="row">
                                        <?php
                                        // 가변 파일
                                        for ($i=0; $i<count($view['file']); $i++) {
                                            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
                                        ?>

                                                <div class="col-12 wrap-feature3-box">
                                                    <div class="card border mb-2">
                                                        <div class="card-body d-flex">
                                                            <div class="icon-space align-self-center mt-0 mb-0 pb-0">
                                                                <i class="fas fa-download display-5 text-success-gradiant"></i>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <h4 class="font-bold mb-0">
                                                                    <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download linking text-break">
                                                                        <span class=""><?php echo $view['file'][$i]['source'] ?></span>
                                                                        <span class="text-muted small ml-2"><?php echo $view['file'][$i]['content'] ?></span>
                                                                    </a>
                                                                </h4>
                                                                <!--<p class="mt-0">You can relay on our amazing features list and also our customer services will be great experience.</p>-->
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item">
                                                                        <i class="fas fa-download mr-2"></i><?php echo $view['file'][$i]['download'] ?>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <i class="fas fa-clock mr-2" aria-hidden="true"></i><?php echo $view['file'][$i]['datetime'] ?>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <strong class="font-bold"><?php echo $view['file'][$i]['size'] ?></strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                <?php } ?>
                                <!-- } 첨부파일 끝 -->

                                <!-- 관련링크 시작 { -->
                                <?php if(isset($view['link']) && array_filter($view['link'])) { ?>

                                    <div class="row">
                                        <?php
                                        // 링크
                                        $cnt = 0;
                                        for ($i=1; $i<=count($view['link']); $i++) {
                                            if ($view['link'][$i]) {
                                                $cnt++;
                                                $link = cut_str($view['link'][$i], 70);
                                        ?>

                                                <div class="col-12 wrap-feature3-box">
                                                    <div class="card border mb-2">
                                                        <div class="card-body d-flex">
                                                            <div class="icon-space align-self-center mt-0 mb-0 pb-0">
                                                                <i class="fas fa-link display-5 text-success-gradiant"></i>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <h4 class="font-bold mb-0">
                                                                    <a href="<?php echo $view['link_href'][$i] ?>" class="linking text-break" target="_blank">
                                                                        <?php echo $link ?>
                                                                    </a>
                                                                </h4>
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item">
                                                                        <i class="fa fa-link mr-2"></i><?php echo $view['link_hit'][$i] ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>

                                <?php } ?>
                                <!-- } 관련링크 끝 -->

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

                    </div><!-- //.col -->
	                <?php if ( $theme_config['use_sidebar'] == 'right' && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE) ))  { ?>
                        <div class="<?php echo $theme_config['grid_sidebar']; ?>">
			                <?php include G5_THEME_PATH."/_sidebar/sidebar.php" ?>
                        </div><!-- //.col -->
	                <?php } ?>
                </div><!-- //.row -->

            </div><!-- //.container -->
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
                    $tx.text("비추천 완료!");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("추천 완료!");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->