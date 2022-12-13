<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$curr_url = $_SERVER['REQUEST_URI'];
?>

<?php if ($is_admin && !has_url_str('param_no', '_temp_', '', '', $curr_url)) {  ?>
    <div class="container-fluid bg-light b-b text-center py-3">
        <a class="btn btn-info-gradiant" href="<?php echo G5_THEME_URL ?>/_temp_feature1.php" target="_blank" role="button">섹션 템플릿 라이브러리 바로가기</a>
    </div>
<?php }  ?>