<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$faq_skin_url.'/style.css">', 0);
?>

<!-- FAQ 시작 { -->
            <!-- ============================================================== -->
            <!-- Container -->
            <!-- ============================================================== -->
            <div class="container mt-3 mb-5">

                <?php
                if ($admin_href) {
                ?>
                    <p class="text-right">
                        <a href="<?php echo $admin_href; ?>" class="ml-2" title="FAQ 수정">
                            <i class="fas fa-cog fa-spin text-danger"></i>
                        </a>
                    </p>
                <?php
                }
                ?>

                <div class="row">
                    <div class="col-12">

                        <!-- 상단 이미지 -->
                        <?php
                        if ($himg_src) {
                        ?>
                            <div id="faq_himg" class="mb-3">
                                <img src="<?php echo $himg_src ?>" class="img-responsive" alt="">
                            </div>
	                    <?php
                        }
	                    ?>
                        <!-- // 상단 이미지 -->

                        <!-- 상단 HTML -->
                        <div id="faq_hhtml" class="mb-3">
                            <?php echo conv_content($fm['fm_head_html'], 1) ?>
                        </div>
                        <!-- // 상단 HTML -->

                        <div class="card border bg-light mb-5" style="">
                            <div class="card-body pt-4 pb-4">

                                <div class="row justify-content-center">
                                    <div class="col col-md-6">
                                        <fieldset>
                                            <form name="faq_search_form" method="get">
                                                <input type="hidden" name="fm_id" value="<?php echo $fm_id;?>">
                                                <div class="input-group">
                                                    <input type="text" name="stx" value="<?php echo $stx;?>" required id="stx" class="form-control" size="15" maxlength="15">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-secondary"><i class="fas fa-search mr-1" aria-hidden="true"></i><span>검색</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

	                    <?php
	                    if( count($faq_master_list) ){
                        ?>
                            <ul class="list-inline mb-3">
                                <?php
                                foreach( $faq_master_list as $v ){
                                    $category_msg = '';
                                    $category_option = '';
                                    if($v['fm_id'] == $fm_id){ // 현재 선택된 카테고리라면
	                                    $category_option = 'dark';
                                    } else {
	                                    $category_option = 'secondary';
                                    }
                                    ?>
                                    <li class="list-inline-item">
                                        <a href="<?php echo $category_href;?>?fm_id=<?php echo $v['fm_id'];?>" class="btn btn-<?php echo $category_option; ?> btn-rounded" role="button">
                                            <?php  echo $v['fm_subject'];  ?>
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
	                    <?php
	                    }
	                    ?>

                        <div class="accordion mb-3 faq_<?php echo $fm_id; ?>" id="accordion">
	                        <?php // FAQ 내용
	                        if( count($faq_list) ){
	                        ?>

                                <?php
//                                var_dump($faq_list);
                                foreach($faq_list as $key=>$v){
                                    if(empty($v))
                                        continue;
                                ?>
                                    <div class="card border">
                                        <div class="card-header" id="heading_<?php echo $v['fa_id'] ?>">
                                            <h4 class="mb-0 pt-3" data-toggle="collapse" data-target="#collapse_<?php echo $v['fa_id'] ?>" aria-expanded="false" aria-controls="collapse_<?php echo $v['fa_id'] ?>">
                                                <a class="align-middle align-self-center">
                                                    <?php
//                                                    echo conv_content($v['fa_subject'], 1);
                                                    echo $_ACETHEME->get_search_contents(conv_content($v['fa_subject'], 1));
                                                    ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse_<?php echo $v['fa_id'] ?>" class="collapse" aria-labelledby="heading_<?php echo $v['fa_id'] ?>" data-parent="#accordion">
                                            <div class="card-body p-t-40">
	                                            <?php
//                                                echo conv_content($v['fa_content'], 1);
	                                            echo $_ACETHEME->get_search_contents(conv_content($v['fa_content'], 1))
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
		                        ?>

                            <?php
	                        } else {
		                        echo '<div class="card border">';
		                        echo '<div class="card-body">';

		                        if($stx){
			                        echo '<p class="text-center">검색된 게시물이 없습니다.</p>';
		                        } else {
			                        echo '<div class="text-center">등록된 FAQ가 없습니다.';
			                        if($is_admin)
				                        echo '<br><a href="'.G5_ADMIN_URL.'/faqmasterlist.php">FAQ를 새로 등록하시려면 FAQ관리</a> 메뉴를 이용하십시오.';
			                        echo '</div>';
		                        }

		                        echo '</div>';
		                        echo '</div>';
	                        }
	                        ?>

                        </div>

                        <div class="card mb-5">
                            <div class="card-body text-center">
	                            <?php echo $_ACETHEME->get_paging($page, $total_page, $_SERVER['SCRIPT_NAME'] . '?' . $qstr . '&amp;page='); ?>
                            </div>
                        </div>

                        <!-- 하단 HTML -->
                        <div id="faq_thtml" class="mb-3">
		                    <?php echo conv_content($fm['fm_tail_html'], 1) ?>
                        </div>
                        <!-- // 하단 HTML -->

                        <!-- 하단 이미지 -->
                        <?php
                        if ($timg_src) {
                        ?>
                        <div id="faq_timg" class="mb-3">
                            <img src="<?php echo $timg_src; ?>" class="img-responsive" alt="">
                        </div>
                        <?php
                        }
                        ?>
                        <!-- // 하단 이미지 -->


                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container -->
            <!-- ============================================================== -->
<!-- } FAQ 끝 -->


<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>