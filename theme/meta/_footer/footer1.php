<?php
global $theme_config, $_ACETHEME;
if (!defined('_GNUBOARD_')) {
	exit;
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link href="'.G5_THEME_CSS_URL.'/footers/footer1.min.css" rel="stylesheet"/>', 0);
?>


<div class="footer1 font-14">
	<div class="f1-topbar">
		<div class="container ">
			<!-- Row  -->
			<div class="row">
				<!-- Column -->
				<div class="col-md-12" data-aos="fade-right" data-aos-duration="1200">
					<nav class="navbar navbar-expand-lg f1-nav">
                        <a class="navbar-brand hidden-md-up" href="#">Footer Navbar</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ft1" aria-controls="ft1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
						<div class="collapse navbar-collapse" id="ft1">
							<ul class="navbar-nav">
								<li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="#">About Me</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Work</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
							</ul>
							<ul class="navbar-nav ml-auto">
								<li class="nav-item"><a class="nav-link text-dark font-bold text-uppercase" href="#"><i class="fas fa-user text-danger m-r-10"></i>고객문의게시판</a></li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- Column -->
			</div>
		</div>
	</div>
	<!-- Row  -->
	<div class="f1-middle">
		<div class="container ">
			<div class="row">
				<!-- Column -->
				<div class="col-lg-3 col-md-6">
					<a href="<?php echo G5_URL ?>">
                        <img src="<?php echo G5_THEME_URL."/images/logo/".$theme_config['logo_footer'] ?>" width="<?php echo $theme_config['logo_footer_width'] ?>" <?php echo $theme_config['logo_footer_height'] ? "height=\"".$theme_config['logo_footer_height']."\"" : "" ?> alt="로고">
					</a>
					<p class="m-t-20">You can relay on our amazing features list and also our customer services will be great experience.</p>
					<p>our amazing features list and also our customer services is great.</p>
				</div>
				<!-- Column -->
				<!-- Column -->
				<div class="col-lg-3 col-md-6">
					<div class="d-flex no-block m-b-10 m-t-20">
						<div class="m-r-20 align-self-top"><i class="fas fa-map-marker-alt fa-2x"></i></div>
						<div class="info">
							<span class="font-medium text-dark db m-t-5">(주) 테크놀로지 시스템</span><br/>
							<p>
                                경기도 성남시<br/>
								분당구 정자동 123-456<br/>
								2층, 3층, 4층
                            </p>
						</div>
					</div>
					<div class="d-flex no-block m-b-10">
						<div class="m-r-20 align-self-top"><i class="fas fa-phone fa-2x"></i></div>
						<div class="info">
							<span class="font-medium text-dark db  m-t-5">02-1234-5678</span>
						</div>
					</div>
					<div class="d-flex no-block m-b-30">
						<div class="m-r-20 align-self-top"><i class="fas fa-envelope fa-2x"></i></div>
						<div class="info">
							<a href="#" class="font-medium text-dark db  m-t-5">abc1234@naver.com</a>
						</div>
					</div>
				</div>
				<!-- Column -->
				<!-- Column -->
				<div class="col-lg-6 col-md-12 m-t-5">
					<h6 class="font-medium m-t-20">Services we Offer</h6>
					<ul class="general-listing two-part with-arrow m-t-10">
						<li><a href="#"><i class="fas fa-angle-right"></i> Website Design</a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i> Application Development</a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i> Mobile Development</a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i> Search Engine Optimzation</a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i> Digital Marketing</a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i> Website Development </a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i> eBook Writing </a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i> SaaS base Applications</a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i> Ruby on Rails Development </a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i> Php Development</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Row  -->
	<div class="f1-bottom-bar">
		<div class="container ">
			<div class="d-flex">
				<div class="m-t-10 m-b-10">© All Rights Reserved by (주)테크놀로지시스템.</div>
				<div class="links ml-auto m-t-10 m-b-10">
					<a href="#" class="link p-10"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="link p-10"><i class="fab fa-twitter"></i></a>
					<a href="#" class="link p-10"><i class="fab fa-linkedin"></i></a>
					<a href="#" class="link p-10"><i class="fab fa-pinterest"></i></a>
					<a href="#" class="link p-10"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>