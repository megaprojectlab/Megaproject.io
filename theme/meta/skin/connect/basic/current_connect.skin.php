<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$connect_skin_url.'/style.css">', 0);
?>

<!-- 현재접속자 목록 시작 { -->

            <!-- ============================================================== -->
            <!-- Container -->
            <!-- ============================================================== -->
            <div class="container mt-3 mb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="card border">
                            <div class="card-body">
                                <header class="mb-4">
                                    <h3 class="card-title">접속자</h3>
                                </header>
                                <ul class="list-unstyled">
	                                <?php
	                                for ($i=0; $i<count($list); $i++) {
                                        //$location = conv_content($list[$i]['lo_location'], 0);
                                        $location = $list[$i]['lo_location'];
                                        // 최고관리자에게만 허용
                                        // 이 조건문은 가능한 변경하지 마십시오.
                                        if ($list[$i]['lo_url'] && $is_admin == 'super') $display_location = "<a href=\"".$list[$i]['lo_url']."\">".$location."</a>";
                                        else $display_location = $location;
                                    ?>
                                        <li class="media border-top-0 border-left-0 border-right-0 pl-0 pr-0">
	                                        <?php
	                                        echo $_ACETHEME->get_member_profile_img_current_connect(get_member_profile_img($list[$i]['mb_id']));
	                                        ?>
                                            <div class="media-body align-self-center">
                                                <h5 class="mt-0 mb-1">
                                                    <span class="badge badge-secondary mr-2" style="width: 50px;"><?php echo $list[$i]['num'] ?></span>
                                                    <span><?php echo $list[$i]['name'] ?></span>
                                                </h5>
                                                <div>
	                                                <?php echo $display_location ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
	                                }
	                                if ($i == 0) {
	                                ?>

                                        <li class="media border-top-0 border-left-0 border-right-0 pl-0 pr-0">
                                            <div class="media-body align-self-center">
                                                <h5 class="mt-0 mb-0">현재 접속자가 없습니다.</h5>
                                            </div>
                                        </li>
                                    <?php
	                                }
	                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container -->
            <!-- ============================================================== -->

<!-- } 현재접속자 목록 끝 -->