<?php
global $theme_config, $_ACETHEME;
if (!defined('_GNUBOARD_')) {
	exit;
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link href="'.G5_THEME_CSS_URL.'/footers/footer2.min.css" rel="stylesheet"/>', 0);
?>


<div class="footer2 font-14 bg-dark">
	<div class="f2-topbar container ">
		<div class="d-flex">
			<a href="<?php echo G5_URL ?>">
                <img src="<?php echo G5_THEME_URL."/images/logo/".$theme_config['logo_footer'] ?>" width="<?php echo $theme_config['logo_footer_width'] ?>" <?php echo $theme_config['logo_footer_height'] ? "height=\"".$theme_config['logo_footer_height']."\"" : "" ?> alt="로고">
			</a>
			<div class="ml-auto align-self-center">
				<span class="text-white mr-2 ">매타캠퍼스</span> © 2022. All rights reserved.
			</div>
		</div>
	</div>
	<div class="f2-middle">
		<div class="container ">
			<div class="row">
				<!-- Column -->
				<div class="col-lg-4 col-md-6">
					<p class="p-t-10">Nullam erat ametam arcu lorme pharetra id risus act sectetur ipsum luctus est ullam erat ametam arcu lorme pharetra id us act sectetur ipsum luctus est. </p>
					<p>Vestibulum in accumsa maga eds maurise elit tincidunt turpis id semper. </p>
					<div class="m-t-20 m-b-30">
						<a href="#" class="link"><i class="fa fa-facebook"></i></a>
						<a href="#" class="link"><i class="fa fa-twitter"></i></a>
						<a href="#" class="link"><i class="fa fa-linkedin"></i></a>
						<a href="#" class="link"><i class="fa fa-pinterest"></i></a>
						<a href="#" class="link"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<!-- Column -->
				<div class="col-lg-2 col-md-6">
					<ul class="general-listing">
						<li><a href="#"><i class="fa fa-circle"></i> Home</a></li>
						<li><a href="#"><i class="fa fa-circle"></i> Services</a></li>
						<li><a href="#"><i class="fa fa-circle"></i> Pricing</a></li>
						<li><a href="#"><i class="fa fa-circle"></i> Case Studies</a></li>
						<li><a href="#"><i class="fa fa-circle"></i> Blog</a></li>
						<li><a href="#"><i class="fa fa-circle"></i> Contact Us </a></li>

					</ul>
				</div>
				<!-- Column -->
				<!-- Column -->
				<div class="col-lg-3 col-md-6 info-box">
					<div class="d-flex no-block">
						<div class="m-r-20 align-self-top"><i class="fas fa-map-marker-alt fa-2x"></i></div>
						<div class="info">
                           서울시 강남구 영동대로 511<br/>
                            무역센터 3407호<br/>
                            
						</div>
					</div>
					<div class="d-flex no-block">
						<div class="m-r-20 align-self-top"><i class="fas fa-clock fa-2x"></i></div>
						<div class="info">
							<span class="font-medium text-muted db  m-t-5">8.00 AM - 6:00PM</span>
						</div>
					</div>
					<div class="d-flex no-block">
						<div class="m-r-20 align-self-top"><i class="fas fa-phone fa-2x"></i></div>
						<div class="info">
							<span class="font-medium text-muted db  m-t-5">02-1234-5678</span>
						</div>
					</div>
					<div class="d-flex no-block">
						<div class="m-r-20 align-self-top"><i class="fas fa-envelope fa-2x"></i></div>
						<div class="info">
							<a href="#" class="font-medium text-muted db  m-t-5">abc1234@naver.com</a>
						</div>
					</div>
				</div>
				<!-- Column -->
				<!-- Column -->
				<div class="col-lg-3 col-md-6">
					<div class="subscribe-box">
						<div class="display-4 text-white"><i class="icon-Mail-3"></i></div>
						<p>Nullam erat ametam arcuing lorme pharetra id risus act sectetur ipsum luctus est. </p>
						<form>
							<div class="m-b-20"><input class="form-control" placeholder="enter email"></div>
							<button class="btn btn-danger-gradiant">JOIN US</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>