<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>


            </form>

            <div class="card border card-footer pt-4 pb-4">

                <?php
                if (defined('THEME_SHORT_URL') && THEME_SHORT_URL == true) {
                    //짧은 주소 사용  get_pretty_url($bo_table, '', $qstr.'&amp;page=')
                    echo $_ACETHEME->get_paging($page, $total_page, get_pretty_url($bo_table, '', $qstr . '&amp;page='));
                } else {
                    //일반 주소, 5.3x 버전
                    echo $_ACETHEME->get_paging($page, $total_page, './board.php?bo_table=' . $bo_table . $qstr . '&amp;page=');
                }
                ?>

                <div class="row justify-content-center">
                    <div class="col col-lg-8">
                        <fieldset>
                            <!--<legend class="sr-only">게시물 검색</legend>-->
                            <form name="fsearch" method="get">
                                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                                <input type="hidden" name="sop" value="and">
                                <!--<label for="sfl" class="sound_only">검색대상</label>-->
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <select name="sfl" id="sfl" class="">
                                            <option value="wr_subject" <?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
                                            <option value="wr_content" <?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
                                            <option value="wr_subject||wr_content" <?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
                                            <option value="mb_id,1" <?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
                                            <option value="mb_id,0" <?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
                                            <option value="wr_name,1" <?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
                                            <option value="wr_name,0" <?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
                                        </select>
                                    </div><!-- // .input-group-prepend -->
                                    <!--<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>-->
                                    <input type="text" name="stx" class="form-control" id="stx" value="<?php echo stripslashes($stx) ?>" size="25" maxlength="20" required/>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary"><i class="fas fa-search" aria-hidden="true"></i> <span>검색</span></button>
                                    </div><!-- // .input-group-append -->
                                </div><!-- // .input-group -->
                            </form>
                        </fieldset>
                    </div><!-- // .col -->
                </div><!-- // .row -->
            </div><!-- // .card-footer -->

        </div><!-- // .col -->
        <?php if ( $theme_config['use_sidebar'] == 'right' && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE) ))  { ?>
            <div class="<?php echo $theme_config['grid_sidebar']; ?>">
	            <?php include G5_THEME_PATH."/_sidebar/sidebar.php"; ?>
            </div><!-- // .col -->
        <?php } ?>

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
            var f = document.fboardlist;

            for (var i=0; i<f.length; i++) {
                if (f.elements[i].name == "chk_wr_id[]")
                    f.elements[i].checked = sw;
            }
        }

        function fboardlist_submit(f) {
            var chk_count = 0;

            for (var i=0; i<f.length; i++) {
                if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
                    chk_count++;
            }

            if (!chk_count) {
                alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
                return false;
            }

            if(document.pressed == "선택복사") {
                select_copy("copy");
                return;
            }

            if(document.pressed == "선택이동") {
                select_copy("move");
                return;
            }

            if(document.pressed == "선택삭제") {
                if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
                    return false;

                f.removeAttribute("target");
                f.action = g5_bbs_url+"/board_list_update.php";
            }

            return true;
        }

        // 선택한 게시물 복사 및 이동
        function select_copy(sw) {
            var f = document.fboardlist;

            if (sw == "copy")
                str = "복사";
            else
                str = "이동";

            var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

            f.sw.value = sw;
            f.target = "move";
            f.action = g5_bbs_url+"/move.php";
            f.submit();
        }

        // 게시판 리스트 관리자 옵션
        // jQuery(function($){
        //     $(".btn_more_opt.is_list_btn").on("click", function(e) {
        //         e.stopPropagation();
        //         $(".more_opt.is_list_btn").toggle();
        //     });
        //     $(document).on("click", function (e) {
        //         if(!$(e.target).closest('.is_list_btn').length) {
        //             $(".more_opt.is_list_btn").hide();
        //         }
        //     });
        // });
    </script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
