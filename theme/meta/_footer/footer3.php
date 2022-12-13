<?php
global $theme_config, $_ACETHEME;
if (!defined('_GNUBOARD_')) {
	exit;
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link href="'.G5_THEME_CSS_URL.'/footers/footer3.min.css" rel="stylesheet"/>', 0);


$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<div class="footer3 bg-dark font-14">
	<div class="f3-topbar container ">
		<div class="d-flex">

			<div class="d-flex no-block align-items-center">
				<a href="<?php echo G5_URL ?>" class="m-r-20">
                    <img src="<?php echo G5_THEME_URL."/images/logo/".$theme_config['logo_footer'] ?>" width="<?php echo $theme_config['logo_footer_width'] ?>" <?php echo $theme_config['logo_footer_height'] ? "height=\"".$theme_config['logo_footer_height']."\"" : "" ?> alt="로고">
				</a>

				<div class="d-flex no-block m-b-10 m-t-20">				
					<div class="">
                    Participate in MegaProject, with NFT RVC Service & the Meta-Campus ecosystem.<br>
                    <b> info@MegaProject.io</b>
					</div>
				</div>				
			</div>
		</div>
			
		
	</div>
	
    
	<div class="f3-bottom-bar">
		<div class="container ">
            <div class="row">
				<div class="col-md-7 m-t-10 m-b-10 text-white">Copyright(c)2022.  All Rights Reserved by <span class="text-white">메가프로젝트 </span></div>
                
				 <div class=" col-md-5 ml-auto round-social">
	
					<a href="https://twitter.com/MEGA_project79" class="text-white"><i class="fab fa-twitter"></i>twitter</a>
					<a href="https://t.me/megagroup_official" class="text-white"><i class="fab fa-telegram"></i>group</a>				
					<a href="https://t.me/Mega_Project_Channel" class="text-white"><i class="fab fa-telegram"></i>channel</a>
				</div>
            </div>
		</div>
	</div>
</div>