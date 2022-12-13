<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$curr_url = $_SERVER['REQUEST_URI'];
?>

<!-- ============================================================== -->
<!-- Navigation for Section -->
<!-- ============================================================== -->
<div class="container-fluid mt-4 mb-2 px-1">
    <!-- Row  -->
    <ul class="list-inline mb-0">
        <li class="list-inline-item">
            <a class="btn btn-dark bg-dark btn-sm mb-2 font-extrabold" style="width: 80px;">섹션</a>
        </li>
        <li class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_feature1.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_feature1.php'; ?>">서비스 소개 1</a>
        </li>
        <li class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_feature2.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_feature2.php'; ?>">서비스 소개 2</a>
        </li>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_feature3.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_feature3.php'; ?>">서비스 소개 3</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_feature4.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_feature4.php'; ?>">서비스 소개 4</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_feature5.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_feature5.php'; ?>">서비스 소개 5</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_banner.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_banner.php'; ?>">배너</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_form-banner.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_form-banner.php'; ?>">폼배너</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_c2a.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_c2a.php'; ?>">클릭유도</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_contacts.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_contacts.php'; ?>">오시는길</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_pricing.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_pricing.php'; ?>">가격표</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_team.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_team.php'; ?>">직원소개</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_testimonial.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_testimonial.php'; ?>">고객후기</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_timeline.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_timeline.php'; ?>">타임라인</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_card-slider.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_card-slider.php'; ?>">카드슬라이더</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_client.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_client.php'; ?>">고객사</a>
        </div>
        <div class="list-inline-item">
            <a class="btn btn-outline-secondary btn-sm mb-2 font-extrabold <?php echo (isset($curr_url) && strpos($curr_url, '_temp_counter.php') !== false) ? 'active' : '' ?>" href="<?php echo G5_THEME_URL.'/_temp_counter.php'; ?>">카운터</a>
        </div>
    </ul>

    <ul class="list-inline mb-0">
        <ul class="list-inline">
            <div class="list-inline-item">
                <a class="btn btn-dark bg-dark btn-sm mb-2 font-extrabold" style="width: 80px;">텍스트</a>
            </div>
		    <?php
		    $arr_color_shape = array("primary", "info", "success", "danger", "warning", "inverse", "muted", "dark", "light", "extra-light", "secondary", "facebook", "twitter", "white", "red", "yellow", "purple", "blue", "megna", "orange");
		    foreach ($arr_color_shape as $value) {
			    $url_active = "_temp_typo.php?color=".$value;
			    $str_active = (isset($curr_url) && strpos($curr_url, $url_active) !== false) ? 'active' : '';
			    $str_href = G5_THEME_URL."/_temp_typo.php?color=".$value;
			    echo '<div class="list-inline-item"><a class="btn btn-outline-secondary btn-sm btn-eng mb-2 font-medium '.$str_active.'" href="'.$str_href.'">'.$value.'</a></div>';
		    }
		    ?>
        </ul>

    </ul>

    <ul class="list-inline mb-1">
        <div class="list-inline-item">
            <a class="btn btn-dark bg-dark btn-sm mb-2 font-extrabold" style="width: 80px;">배경무늬</a>
        </div>
        <?php
            $arr_color_shape = array("primary", "info", "success", "danger", "warning", "inverse", "muted", "dark", "light", "extra-light", "secondary", "facebook", "twitter", "white", "red", "yellow", "purple", "blue", "megna", "orange");
            foreach ($arr_color_shape as $value) {
                $url_active = "_temp_shape.php?color=".$value;
                $str_active = (isset($curr_url) && strpos($curr_url, $url_active) !== false) ? 'active' : '';
                $str_href = G5_THEME_URL."/_temp_shape.php?color=".$value;
                echo '<div class="list-inline-item"><a class="btn btn-outline-secondary btn-sm btn-eng mb-2 font-medium '.$str_active.'" href="'.$str_href.'">'.$value.'</a></div>';
            }

        ?>
    </ul>

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="alert alert-danger mb-2">
                <h5 class="text-danger"><i class="fa fa-exclamation-circle"></i> 주의사항</h5>
                <div class="mb-0">
                    <span class="font-bold">1) 테마에 포함된 모든 요소는 <span class="text-danger">재배포</span> 또는 <span class="text-danger">재판매</span>할 수 없습니다!</span>
                </div>
                <div class="mb-0">
                    <span class="font-bold">2) 또한, 섹션 템플릿 라이브러리의 페이지들은 반드시 <span class="text-danger">관리자만 접근할 수 있도록</span> 해주시기 바랍니다.</span>
                </div>
                <div class="ml-2">
                    -- 테마구입시 기본적으로 관리자만 접근이 가능하도록 설정되어 있음 (관리자만 접근하는 코드 삭제 금지)
                </div>
            </div>

            <div class="alert alert-warning mb-2" role="alert">
                <h5>
                    <strong><i class="fas fa-info-circle mr-1" aria-hidden="true"></i></strong>
                    <span class="font-bold">웹페이지에서 말하는 <span class="font-bold text-danger">섹션(Section)</span>이란?</span>
                </h5>
                <div class="">
                    웹페이지를 이루는 단위를 말하는데, 이것들을 여러개 나열하면 웹페이지가 완성됩니다.<br/>
                    따라서, <span class="font-bold text-primary">원하는 섹션 템플릿을 여러개 나열</span>한 후, <span class="font-bold text-primary">텍스트와 이미지만 수정</span>하면 나만의 웹페이지가 완성됩니다.<br/>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="alert alert-primary mb-2" role="alert">
                <h5>
                    <strong><i class="fas fa-info-circle mr-1" aria-hidden="true"></i></strong>
                    <span class="font-bold">에이스테마는 섹션 템플릿 라이브러리를 제공합니다!</span>
                </h5>
                <div class="mb-2">
                    <span class="font-bold">1)</span> 섹션 템플릿 라이브러리 페이지로 접속하면, 각 섹션마다 <span class="font-bold text-danger">코드복사</span> 버튼이 존재합니다.<br/>
                    -- 이 버튼을 클릭하면 <span class="font-bold text-primary">자동으로 클립보드에 코드</span>가 복사됩니다.
                </div>
                <div class="mb-2">
                    <span class="font-bold">2)</span> 이후, <span class="font-bold text-primary">원하는 장소에 붙여넣고, 편집하여 사용</span>하시면 됩니다.<br/>
                    -- 당연히, 복수의 섹션을 이어 붙이는 것도 가능합니다.
                </div>
                <div class="mb-2">
                    <span class="font-bold">3)</span> 따라서, 원하는 섹션들을 선택하여 풍성하게 웹페이지를 꾸며 보세요!
                </div>
                <div class="">
                    <a class="btn btn-primary" href="http://ace-theme.com/z_manual_section.php" target="_blank" role="button">
                        섹션 템플릿 라이브러리 사용법
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Navigation for Section -->
<!-- ============================================================== -->

