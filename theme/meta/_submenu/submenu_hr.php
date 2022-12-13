<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
<div class="container mt-0">

    <?php
    $url = $chk_filename_with_param;
    $sql_fetch_array = " select * from {$g5['menu_table']} where length(me_code) = '4' and me_link like '%".$url."' and me_use = '1' order by me_order, me_id ";

    $me_fetch_array = sql_fetch_array(sql_query($sql_fetch_array, false));
    $me_code = mb_substr($me_fetch_array['me_code'],0 ,2);
    $me_name = $me_fetch_array['me_name'];

    $sql = " select * from {$g5['menu_table']} where me_code like '{$me_code}%' and me_use = '1' order by me_order, me_code ";
    $query = sql_query($sql, false);
    $num = sql_num_rows($query);
    for($i=0; $i < $num;$i++) {
        $list_submenu[$i] = sql_fetch_array($query);
    }

    // 메뉴 자체가 있을 경우
    if ($me_code > 0) {
        ?>

        <nav class="nav nav-pills flex-column flex-sm-row">
            <?php
            for($i=0;$i<count($list_submenu);$i++) {
                $class_active = "";
                if( strpos($list_submenu[$i]['me_link'], $url) !== false && $list_submenu[$i]['me_name'] == $me_name && startsWith($list_submenu[$i]['me_code'], $me_code) ) {
                    $class_active = "bg-".$theme_config['act_color_submenu']." text-white";
                }
                if ($i == 0) {
                    ?>
                    <!-- 1단메뉴 출력 -->
                    <a class="nav-link border active disabled bg-dark font-extrabold" href="javascript:void(0)"><?php echo $list_submenu[$i]['me_name']?><i class="fas fa-angle-right ml-2"></i></a>
                    <?php
                } else {
                    ?>
                    <!-- 2단메뉴(서브 메뉴) 출력 -->
                    <a class="flex-sm-fill text-sm-center nav-link border font-bold <?php echo $class_active?>" href="<?php echo $list_submenu[$i]['me_link']?>" target="_<?php echo $list_submenu[$i]['me_target']?>"><?php echo $list_submenu[$i]['me_name']?></a>
                    <?php
                }
            }
            ?>
        </nav>
        <?php
    } else {
        ?>
        <!--등록된 메뉴가 없습니다-->
        <?php
    }
    ?>

</div>


