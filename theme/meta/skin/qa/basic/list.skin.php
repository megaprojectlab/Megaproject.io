<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$qa_skin_url.'/style.css">', 0);
?>

<!-- 게시판 목록 시작 { -->
            <!-- ============================================================== -->
            <!-- Container -->
            <!-- ============================================================== -->
            <div class="container mt-3 mb-5">
                <!--<h2>게시물 목록 - 기본형</h2>-->
                <div class="row">
                    <div class="col-12">
	                    <?php if ($category_option) { ?>
                            <!-- 카테고리 시작 { -->
                            <ul class="list-inline mb-3 _cat_list">
                                <?php
                                echo $_ACETHEME->category_inline($category_option);
                                ?>
                            </ul><!-- // .list-inline -->
                            <!-- } 카테고리 끝 -->
	                    <?php } ?>

                        <div class="card border mb-3">
                            <form name="fqalist" id="fqalist" action="./qadelete.php" onsubmit="return fqalist_submit(this);" method="post">
                                <input type="hidden" name="stx" value="<?php echo $stx; ?>">
                                <input type="hidden" name="sca" value="<?php echo $sca; ?>">
                                <input type="hidden" name="page" value="<?php echo $page; ?>">
                                <input type="hidden" name="token" value="<?php echo get_text($token); ?>">

                                <div class="card-header pb-1">
                                    <div class="row mb-0">
                                        <div class="col-sm-6 text-left align-self-center">
		                                    <?php if ($is_checkbox) { ?>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="chkall" onclick="if (this.checked) {
                                                    all_checked(true);
                                                } else {
                                                    all_checked(false);
                                                }" autocomplete="off">
                                                </div>
		                                    <?php } ?>
                                            <span class="d-inline-block mb-2 text-primary">
                                                <span class="badge badge-primary mr-1 py-1 text-truncate align-middle align-self-center">검색현황</span>
                                                <span class="mr-1 align-middle align-self-center">전체</span>
                                                <span class="mr-1 align-middle align-self-center"><?php echo number_format($total_count) ?>건</span>
                                                <span>/</span>
                                                <span class="align-middle align-self-center"><?php echo $page ?>페이지</span>
                                            </span>
                                        </div><!-- // .col -->
                                        <div class="col-sm-6 text-right align-self-center">
                                            <ul class="list-inline">
	                                            <?php if ($is_checkbox) { ?>
                                                    <li class="list-inline-item">
                                                        <button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="선택삭제">
                                                            <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                        </button>
                                                    </li>
	                                            <?php } ?>
                                                <?php if ($admin_href) { ?>
                                                    <li class="list-inline-item">
                                                        <a href="<?php echo $admin_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="관리자">
                                                            <i class="fas fa-cog fa-spin fa-fw text-danger"></i><span class="sound_only">관리자</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
	                                            <?php if ($list_href) { ?>
                                                    <li class="list-inline-item">
                                                        <a href="<?php echo $list_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="목록">
                                                            <i class="fas fa-list" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
	                                            <?php } ?>
                                                <?php if ($write_href) { ?>
                                                    <li class="list-inline-item">
                                                        <a href="<?php echo $write_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="문의등록">
                                                            <i class="fas fa-pen" aria-hidden="true"></i><span class="sound_only">문의등록</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div><!-- // .col -->
                                    </div><!-- // .row -->
                                </div><!-- // .card-header -->
                                <ul class="list-group list-group-flush">
                                    <?php
                                    for ($i = 0; $i < count($list); $i++) {
	                                    if ($i%2==0) $lt_class = "bg-light";
	                                    else $lt_class = "";
                                    ?>
                                        <li class="list-group-item pt-2 pb-2 <?php echo $lt_class ?>">
                                            <div class="row">
                                                <div class="col-12">

                                                    <?php if ($is_checkbox) { ?>
                                                        <div class="form-check form-check-inline align-self-center">
                                                            <input type="checkbox" name="chk_qa_id[]" id="chk_qa_id_<?php echo $i ?>" class="form-check-input" value="<?php echo $list[$i]['qa_id'] ?>">
                                                        </div>
                                                    <?php } ?>

                                                    <a class="align-self-center">
                                                        <span class="badge badge-dark text-center mr-1 py-1 text-truncate align-middle" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $list[$i]['num']; ?>" style="width: 70px;">
                                                            <?php echo $list[$i]['num']; ?>
                                                        </span>
                                                    </a>

                                                    <a class="align-self-center">
                                                        <span class="badge badge-info text-center mr-1 py-1 text-truncate align-middle" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $list[$i]['category']; ?>" style="width: 70px;">
                                                            <?php echo $list[$i]['category']; ?>
                                                        </span>
                                                    </a>
                                                    <a class="align-self-center">
                                                        <span class="badge badge-<?php echo ($list[$i]['qa_status'] ? 'success' : 'secondary'); ?> text-center mr-1 py-1 text-truncate align-middle" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo ($list[$i]['qa_status'] ? '답변완료' : '답변대기'); ?>" style="width: 70px;">
                                                            <?php echo ($list[$i]['qa_status'] ? '답변완료' : '답변대기'); ?>
                                                        </span>
                                                    </a>


                                                    <?php
                                                    if ($list[$i]['icon_secret']) {
	                                                    echo '<i class="fas fa-lock text-warning mr-1 align-middle align-self-center"></i>';
                                                    }

                                                    if ($list[$i]['icon_reply']) {
	                                                    //echo '<i class="fab fa-replyd text-dark align-self-center"></i>';
                                                    }
                                                    ?>

                                                    <a href="<?php echo $list[$i]['view_href']; ?>" class="mr-1 align-self-center">
                                                        <strong class="font-bold">
                                                            <?php
                                                                echo $_ACETHEME->get_search_contents( $list[$i]['subject'] );
                                                            ?>
                                                        </strong>
                                                    </a>

                                                    <?php
                                                    if ($list[$i]['icon_new']) {
	                                                    echo '<span class="badge badge-danger border small text-center mr-1 py-1 text-truncate align-middle align-self-center">N</span>';
                                                    }
                                                    if ($list[$i]['icon_hot']) {
	                                                    echo '<i class="fas fa-h-square text-danger mr-1 align-middle align-self-center"></i>';
                                                    }
                                                    if ($list[$i]['icon_file']) {
	                                                    echo '<i class="fas fa-download text-success mr-1 align-middle align-self-center"></i>';
                                                    }
                                                    if ($list[$i]['icon_link']) {
	                                                    echo '<i class="fas fa-link text-primary mr-1 align-middle align-self-center"></i>';
                                                    }
                                                    ?>

                                                </div><!-- // .col -->
                                            </div><!-- // .row -->
                                            <div class="row small">
                                                <div class="col-4 col-sm-4 col-md-2 text-truncate">
                                                    <!--<span class="badge badge-light mr-1">글쓴이</span>-->
                                                    <span class=""><?php echo $list[$i]['name'] ?></span>
                                                </div><!-- // .col -->
                                                <div class="col-4 col-sm-4 col-md-2 text-truncate">
                                                    <span class="badge badge-light mr-1">날짜</span>
                                                    <span class=""><?php echo $list[$i]['date'] ?></span>
                                                </div><!-- // .col -->
                                            </div><!-- // .row -->
                                        </li><!-- // .list-group-item -->
                                    <?php } ?>
                                    <?php
                                    if (count($list) == 0) {
                                        echo '<li class="list-group-item pt-4 pb-4">
                                                        <div class="row">
                                                            <div class="col-12 text-center">
                                                                게시물이 없습니다.
                                                            </div>
                                                        </div>
                                                    </li>';
                                    }
                                    ?>
                                </ul><!-- // .list-group -->

                            </form>

                            <div class="card-footer pt-4 pb-4">

                                <?php
                                echo preg_replace( '/(\.php)(&amp;|&)/i', '$1?', $_ACETHEME->get_paging( $page, $total_page, './qalist.php' . $qstr . '&amp;page=' ) );
                                ?>

                                <div class="row justify-content-center">
                                    <div class="col col-lg-6">
                                        <fieldset>
                                            <form name="fsearch" method="get">
                                                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                                                <div class="input-group">
                                                    <input type="text" name="stx" id="stx" class="form-control required" value="<?php echo stripslashes($stx) ?>" size="15" maxlength="15" required />
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-secondary">
                                                            <i class="fas fa-search mr-1" aria-hidden="true"></i><span>검색</span>
                                                        </button>
                                                    </div><!-- // .input-group-append -->
                                                </div><!-- // .input-group -->
                                            </form>
                                        </fieldset>
                                    </div><!-- // .col -->
                                </div><!-- // .row -->


                            </div><!-- // .card-footer -->

                        </div><!-- // .card -->

                    </div><!-- // .col -->
                </div><!-- // .row -->
            </div><!-- // .container -->
            <!-- ============================================================== -->
            <!-- End Container -->
            <!-- ============================================================== -->

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fqalist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_qa_id[]")
            f.elements[i].checked = sw;
    }
}

function fqalist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_qa_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다"))
            return false;
    }

    return true;
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->