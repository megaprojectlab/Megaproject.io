<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

global $is_admin;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$visit_skin_url.'/style.css">', 0);
?>

<!-- 접속자집계 시작 { -->
<div class="card border">
    <div class="card-body">
        <h3 class="card-title">
            접속자집계
            <span class="float-right small">
                <?php if ($is_admin == "super") {  ?>
                    <a href="<?php echo G5_ADMIN_URL ?>/visit_list.php" class="" title="관리자">
                        <i class="fas fa-cog fa-spin fa-fw text-danger"></i>
                    </a>
                <?php }  ?>
            </span>
        </h3>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                <span>오늘</span>
                <span class="badge badge-secondary badge-pill"><?php echo number_format($visit[1]) ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                <span>어제</span>
                <span class="badge badge-secondary badge-pill"><?php echo number_format($visit[2]) ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                <span>최대</span>
                <span class="badge badge-secondary badge-pill"><?php echo number_format($visit[3]) ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                <span>전체</span>
                <span class="badge badge-secondary badge-pill"><?php echo number_format($visit[4]) ?></span>
            </li>
        </ul>
    </div>
</div>
<!-- } 접속자집계 끝 -->