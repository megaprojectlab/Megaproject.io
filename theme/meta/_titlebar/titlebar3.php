<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$ace_titlebar_text = get_head_title($g5['title']);
$bo_table = $_GET["bo_table"];

?>

<div class="<?php echo $theme_config['titlebar_width']; ?>">
    <div class="banner-innerpage bg-secondary">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center ">
                <!-- Column -->
                <div class="col-md-6 align-self-center text-center aos-init aos-animate" data-aos="fade-down" data-aos-duration="1200">
                    <h2 class="title font-bold text-white">
	                    <?php echo $ace_titlebar_text; ?>
                    </h2>
                    <h6 class="subtitle op-8 text-white">
                        <?php
                        include G5_THEME_PATH . "/_subtitle/subtitle.php"
                        ?>
                    </h6>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
</div>
