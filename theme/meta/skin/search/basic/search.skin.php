<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$search_skin_url.'/style.css">', 0);
?>

<!-- 전체검색 시작 { -->
<div class="container <?php echo $theme_config['margin_content_top']; ?>">
    <h2>통합검색</h2>
    <div class="row">
        <div class="col-12">

            <div class="card border bg-light mb-3" style="border-width: 3px;">
                <div class="card-body pt-4 pb-4">

                    <div class="row justify-content-center">
                        <div class="col col-md-10">
                            <fieldset>
                                <!--<legend class="sr-only">게시물 검색</legend>-->
                                <form name="fsearch" onsubmit="return fsearch_submit(this);" method="get">
                                    <input type="hidden" name="srows" value="<?php echo $srows ?>">

                                    <div class="input-group">
                                        <div class="input-group-prepend mb-2">
	                                        <?php echo $group_select ?>
                                            <script>document.getElementById("gr_id").value = "<?php echo $gr_id ?>";</script>
                                        </div>
                                        <div class="input-group-prepend mb-2">
                                            <select name="sfl" id="sfl">
                                                <option value="wr_subject||wr_content"<?php echo get_selected($_GET['sfl'], "wr_subject||wr_content") ?>>제목+내용</option>
                                                <option value="wr_subject"<?php echo get_selected($_GET['sfl'], "wr_subject") ?>>제목</option>
                                                <option value="wr_content"<?php echo get_selected($_GET['sfl'], "wr_content") ?>>내용</option>
                                                <option value="mb_id"<?php echo get_selected($_GET['sfl'], "mb_id") ?>>회원아이디</option>
                                                <option value="wr_name"<?php echo get_selected($_GET['sfl'], "wr_name") ?>>이름</option>
                                            </select>
                                        </div>
                                        <input type="text" name="stx" id="stx" class="form-control  required" value="<?php echo $text_stx ?>" size="40" required>

                                        <div class="input-group-append mb-2 mr-2">
                                            <button type="submit" class="btn btn-dark"><i class="fa fa-search" aria-hidden="true"></i> <span>검색</span></button>
                                            <script>
                                                function fsearch_submit(f)
                                                {
                                                    if (f.stx.value.length < 2) {
                                                        alert("검색어는 두글자 이상 입력하십시오.");
                                                        f.stx.select();
                                                        f.stx.focus();
                                                        return false;
                                                    }

                                                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                                                    var cnt = 0;
                                                    for (var i=0; i<f.stx.value.length; i++) {
                                                        if (f.stx.value.charAt(i) == ' ')
                                                            cnt++;
                                                    }

                                                    if (cnt > 1) {
                                                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                                                        f.stx.select();
                                                        f.stx.focus();
                                                        return false;
                                                    }

                                                    f.action = "";
                                                    return true;
                                                }
                                            </script>
                                        </div>

                                        <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                                            <!--<label class="btn btn-<?php /*echo ($sop == "and") ? "primary" : "light"; */?>">
                                                <input type="radio" name="sop" id="sop_and" value="and" <?php /*echo ($sop == "and") ? "checked" : ""; */?>>AND
                                            </label>
                                            <label class="btn btn-<?php /*echo ($sop == "or") ? "primary" : "light"; */?>">
                                                <input type="radio" name="sop" id="sop_or" value="or" <?php /*echo ($sop == "or") ? "checked" : ""; */?>>OR
                                            </label>-->
                                            <label class="btn btn-light">
                                                <input type="radio" name="sop" id="sop_and" value="and" <?php echo ($sop == "and") ? "checked" : ""; ?>>AND
                                            </label>
                                            <label class="btn btn-light">
                                                <input type="radio" name="sop" id="sop_or" value="or" <?php echo ($sop == "or") ? "checked" : ""; ?>>OR
                                            </label>
                                        </div>

                                    </div>

                                </form>
                            </fieldset>
                        </div>
                    </div>

                </div>
            </div>


	        <?php
	        if ($stx) {
	            if ($board_count) {
	        ?>
            <div class="alert border-secondary font-weight-bold d-flex justify-content-between mb-3" role="alert" style="background-color: #EDF3FC;">
                <span class="">
                    <span class="text-danger mr-1"><?php echo $stx ?></span>
                    <span class="text-dark">전체검색 결과</span>
                </span>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <span class="badge badge-secondary mr-1">게시판</span><span class="text-danger"><?php echo $board_count ?></span>개
                    </li>
                    <li class="list-inline-item">
                        <span class="badge badge-secondary mr-1">게시물</span><span class="text-danger"><?php echo number_format($total_count) ?></span>개
                    </li>
                    <li class="list-inline-item">
                        <span class="badge badge-secondary mr-1">열람중</span><span class="text-danger"><?php echo number_format($page) ?></span>/<span class="text-danger"><?php echo number_format($total_page) ?></span> 페이지
                    </li>
                </ul>
            </div>
            <?php
	            }
	        }
	        ?>

	        <?php
	        if ($stx) {
	            if ($board_count) {

		            $curr_bo_subject_sql = "select bo_subject from g5_board where bo_table = '{$onetable}'";
//		            $curr_bo_subject_str = sql_fetch($curr_bo_subject_sql)['bo_subject'];
		            $curr_bo_subject_str = sql_fetch($curr_bo_subject_sql);
		            $curr_bo_subject_str = $curr_bo_subject_str['bo_subject'];
		            $curr_bo_subject_str = trim($curr_bo_subject_str);
	        ?>

                    <ul class="list-inline mb-3 _cat_list_search">
                        <li class="list-inline-item mb-2">
                            <a href="?<?php echo $search_query ?>&amp;gr_id=<?php echo $gr_id ?>" class="btn btn-primary" role="button" <?php echo $sch_all ?>>
                                <strong>전체게시판</strong>
                            </a>
                        </li>
	                    <?php
	                    echo $_ACETHEME->category_inline_search($str_board_list, $onetable);
	                    ?>
                    </ul>

                    <script>
                        $(function() {

                            // 페이지 인식
                            $("._cat_list_search .list-inline-item strong").each(function (index, item) {
                                var curr_bo_subject_str = $(item).text();
                                var curr_bo_subject_str = $.trim(curr_bo_subject_str); //좌우 공백제거

                                if (curr_bo_subject_str == '<?php echo $curr_bo_subject_str; ?>') { //게시판명이 일치할 경우
                                    $(item).parents('.list-inline-item:first').siblings().find('.btn').removeClass('btn-primary').addClass('btn-outline-secondary'); //형제요소들의 선택상태 제거
                                    $(item).parents('.list-inline-item:first').find('.btn').addClass('btn-primary').removeClass('btn-outline-secondary'); //현재 카테고리 페이지 인식
                                }
                            });

                        });
                    </script>
            <?php
	            } else {
            ?>
                    <div class="card border mb-3">
                        <div class="card-body text-center font-weight-bold text-dark">
                            검색된 자료가 하나도 없습니다.
                        </div>
                    </div>
            <?php
	            }
	        }
	        ?>


	        <?php
            if ($stx && $board_count) {
                $k=0;
                for ($idx=$table_index, $k=0; $idx<count($search_table) && $k<$rows; $idx++) {
            ?>
                <div class="card border mb-4">
                    <div class="card-header">
                        <h3 class="mb-0">
                            <a href="<?php echo get_pretty_url($search_table[$idx], '', $search_query); ?>" class="text-dark">
                                <strong class="text-primary"><?php echo $bo_subject[$idx] ?></strong> 게시판 내 검색결과
                            </a>
                            <a href="<?php echo get_pretty_url($search_table[$idx], '', $search_query); ?>" class="btn btn-link float-right p-0" role="button">더보기</a>
                        </h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                        for ($i=0; $i<count($list[$idx]) && $k<$rows; $i++, $k++) {
                            if ($list[$idx][$i]['wr_is_comment']) {
                                $comment_def = '<span class="mr-1"><i class="far fa-comment-dots"></i></span> ';
                                $comment_href = '#c_'.$list[$idx][$i]['wr_id'];
                            } else {
                                $comment_def = '';
                                $comment_href = '';
                            }
                        ?>
                            <li class="list-group-item pt-2 pb-2">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="badge badge-dark text-center mr-1"><?php echo $bo_subject[$idx] ?></span>
                                        <a href="<?php echo $list[$idx][$i]['href']; ?><?php echo $comment_href; ?>" target="_blank" class="font-bold mr-1">
	                                        <?php
                                            echo $comment_def; //댓글일 경우 아이콘 붙여주기
                                            ?>
	                                        <?php
	                                        echo $_ACETHEME->get_search_contents($list[$idx][$i]['subject']);
	                                        ?>
                                        </a>
                                        <a href="<?php echo $list[$idx][$i]['href']; ?><?php echo $comment_href; ?>" target="_blank" class="text-secondary">
                                            <i class="far fa-window-restore"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-12">
	                                    <?php
                                        echo $_ACETHEME->get_search_contents($list[$idx][$i]['content']);
                                        ?>
                                    </div>
                                </div>
                                <div class="row small">
                                    <div class="col-4 col-sm-4 col-md-2 text-truncate">
                                        <span class="badge badge-secondary mr-2">글쓴이</span><span class=""><?php echo $list[$idx][$i]['name'] ?></span>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-truncate">
                                        <span class="badge badge-secondary mr-2">날짜</span><span class=""><?php echo $list[$idx][$i]['wr_datetime'] ?></span>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
	        <?php
                } //end for
            }
            ?>

            <div class="card mb-3">
                <div class="card-body pt-4 pb-4">
	                <?php
	                echo $_ACETHEME->get_paging($page, $total_page, $_SERVER['SCRIPT_NAME'] . '?' . $search_query . '&amp;gr_id=' . $gr_id . '&amp;srows=' . $srows . '&amp;onetable=' . $onetable . '&amp;page=');
	                ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- } 전체검색 끝 -->