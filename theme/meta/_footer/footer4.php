<?php
global $theme_config, $_ACETHEME;
if (!defined('_GNUBOARD_')) {
	exit;
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link href="'.G5_THEME_CSS_URL.'/footers/footer4.min.css" rel="stylesheet"/>', 0);
?>


<div class="footer4 mini-spacer">
	<div class="container ">
		<div class="row">
			<div class="col-lg-3 col-md-6 m-b-30">
				<h5 class="m-b-20">Address</h5>
				<p>
                    경기도 성남시<br/>
                    분당구 정자동 123-456<br/>
                    2층, 3층, 4층
                </p>
			</div>
			<div class="col-lg-3 col-md-6 m-b-30">
				<h5 class="m-b-20">Phone</h5>
				<p>
                    대표전화 : 02-1234-5678 <br/>
                    팩스 :  02-1234-5555</p>
			</div>
			<div class="col-lg-3 col-md-6 m-b-30">
				<h5 class="m-b-20">Email</h5>
				<p>
                    영업부 :  <a href="#" class="link">abc1234@naver.com</a> <br/>
                    기획실 :  <a href="#" class="link">xyz5678@naver.com</a>
                </p>
			</div>
			<div class="col-lg-3 col-md-6">
				<h5 class="m-b-20">Social</h5>
				<div class="round-social light">
					<a href="#" class="link"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="link"><i class="fab fa-twitter"></i></a>
					<a href="#" class="link"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>
		</div>

		<div class="f4-bottom-bar">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg h1-nav">
						<a href="<?php echo G5_URL ?>" class="navbar-brand">
                            <img src="<?php echo G5_THEME_URL."/images/logo/".$theme_config['logo_footer'] ?>" width="<?php echo $theme_config['logo_footer_width'] ?>" <?php echo $theme_config['logo_footer_height'] ? "height=\"".$theme_config['logo_footer_height']."\"" : "" ?> alt="로고">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header1" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
							<span class="fas fa-bars"></span>
						</button>

						<div class="collapse navbar-collapse" id="header1">
							<span class="hidden-lg-down">All Rights Reserved by (주) 테크놀로지 시스템.</span>
							<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
								<li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="#">About Me</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Work</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Freebies</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>