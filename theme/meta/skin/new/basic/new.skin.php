<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$new_skin_url.'/style.css">', 0);
?>


<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-12">
            <!-- 전체게시물 검색 시작 { -->
            <h2>새글</h2>
            <div class="card border bg-light mb-5">
                <div class="card-body pt-4 pb-4">

                    <div class="row justify-content-center">
                        <div class="col col-md-8">
                            <fieldset>
                                <form name="fnew" method="get">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
	                                        <?php echo $group_select ?>
                                        </div>
                                        <div class="input-group-prepend">
                                            <select name="view" id="view">
                                                <option value="">전체게시물
                                                <option value="w">원글만
                                                <option value="c">코멘트만
                                            </select>
                                        </div>
                                        <input type="text" name="mb_id" id="mb_id" class="form-control" value="<?php echo $mb_id ?>" size="40" required>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary"><i class="fas fa-search mr-1" aria-hidden="true"></i><span>검색</span></button>
                                        </div>
                                    </div>
                                </form>
                            </fieldset>
                            <p class="mt-2 mb-0 text-dark text-center">회원 아이디만 검색 가능</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- } 전체게시물 검색 끝 -->

            <!-- 전체게시물 목록 시작 { -->
            <form name="fnewlist" id="fnewlist" method="post" action="#" onsubmit="return fnew_submit(this);">
                <input type="hidden" name="sw"       value="move">
                <input type="hidden" name="view"     value="<?php echo $view; ?>">
                <input type="hidden" name="sfl"      value="<?php echo $sfl; ?>">
                <input type="hidden" name="stx"      value="<?php echo $stx; ?>">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
                <input type="hidden" name="page"     value="<?php echo $page; ?>">
                <input type="hidden" name="pressed"  value="">

                <div class="card border mb-2">

	                <?php if ($is_admin) { ?>
                    <div class="card-header">
                        <div class="row mb-0">
                            <div class="col-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="all_chk">
                                </div>
                                <span class="float-right">
                                    <button type="submit" onclick="document.pressed=this.title" class="btn btn-link py-0" title="선택삭제"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
	                <?php } ?>

                    <ul class="list-group list-group-flush">
	                    <?php
	                    for ($i=0; $i<count($list); $i++) {
                            $num = $total_count - ($page - 1) * $config['cf_page_rows'] - $i;
                            $gr_subject = cut_str($list[$i]['gr_subject'], 20);
                            $bo_subject = cut_str($list[$i]['bo_subject'], 20);
                            $wr_subject = get_text(cut_str($list[$i]['wr_subject'], 80));
	                    ?>
                            <li class="list-group-item pt-2 pb-2">
                                <div class="row mb-1">
                                    <div class="col-12 d-flex">
	                                    <?php if ($is_admin) { ?>
                                            <div class="form-check form-check-inline align-self-center">
                                                <input type="checkbox" name="chk_bn_id[]" id="chk_bn_id_<?php echo $i; ?>" class="form-check-input" value="<?php echo $i; ?>" >
                                                <input type="hidden" name="bo_table[<?php echo $i; ?>]" value="<?php echo $list[$i]['bo_table']; ?>">
                                                <input type="hidden" name="wr_id[<?php echo $i; ?>]" value="<?php echo $list[$i]['wr_id']; ?>">
                                            </div>
	                                    <?php } ?>
                                        <a href="./new.php?gr_id=<?php echo $list[$i]['gr_id'] ?>" class="align-self-center">
                                            <span class="badge badge-dark text-center mr-2 py-1 text-truncate align-middle" data-toggle="tooltip" data-placement="top" data-html="true" title="커뮤니티" style="width: 80px;"><?php echo $gr_subject ?></span>
                                        </a>
                                        <a href="<?php echo get_pretty_url($list[$i]['bo_table']); ?>" class="align-self-center">
                                            <!--<span class="badge badge-secondary text-center mr-2 py-1 text-truncate align-middle" data-toggle="tooltip" data-placement="top" data-html="true" title="자유게시판" style="width: 80px;"><?php /*echo $bo_subject */?></span>-->
                                            <span class="badge badge-secondary text-center mr-2 py-1 text-truncate align-middle" data-toggle="tooltip" data-placement="top" data-html="true" title="자유게시판"><?php echo $bo_subject ?></span>
                                        </a>
                                        <a href="<?php echo $list[$i]['href'] ?>" class="align-self-center font-bold">
	                                        <?php echo $list[$i]['comment'] ?><?php echo $wr_subject ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="row small">
                                    <div class="col-4 col-sm-4 col-md-2 text-truncate">
                                        <span class="badge badge-secondary mr-2">글쓴이</span><span><?php echo $list[$i]['name'] ?></span>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-truncate">
                                        <span class="badge badge-secondary mr-2">날짜</span><span><?php echo $list[$i]['datetime2'] ?></span>
                                    </div>
                                </div>
                            </li>
	                    <?php
	                    }
	                    ?>

                        <?php
                        if ($i == 0) {
                        ?>
                            <li class="list-group-item pt-4 pb-4 text-center">
                                게시물이 없습니다!
                            </li>
                        <?php
                        }
                        ?>

                    </ul>
	                <?php if ($is_admin) { ?>
                        <div class="card-footer">
                            <div class="row mb-0">
                                <div class="col-12 align-self-center text-right">
                                    <span class="mb-2">
                                        <button type="submit" onclick="document.pressed=this.title" class="btn btn-link py-0" title="선택삭제"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
	                <?php } ?>

                </div>
                <div class="card card-body">
		            <?php
		            echo $_ACETHEME->get_paging($page, $total_page, "?gr_id=$gr_id&amp;view=$view&amp;mb_id=$mb_id&amp;page=");
		            ?>
                </div>
            </form>
            <!-- } 전체게시물 목록 끝 -->
        </div>
    </div>
</div>

<?php if ($is_admin) { ?>
    <script>
        $(function(){
            $('#all_chk').click(function(){
                $('[name="chk_bn_id[]"]').attr('checked', this.checked);
            });
        });

        function fnew_submit(f)
        {
            f.pressed.value = document.pressed;

            var cnt = 0;
            for (var i=0; i<f.length; i++) {
                if (f.elements[i].name == "chk_bn_id[]" && f.elements[i].checked)
                    cnt++;
            }

            if (!cnt) {
                alert(document.pressed+"할 게시물을 하나 이상 선택하세요.");
                return false;
            }

            if (!confirm("선택한 게시물을 정말 "+document.pressed+" 하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다")) {
                return false;
            }

            f.action = "./new_delete.php";

            return true;
        }
    </script>
<?php } ?>