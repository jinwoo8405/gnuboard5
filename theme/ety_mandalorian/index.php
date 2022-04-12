<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<?php 
/**************************************************************************

GNUBOARD 5.4

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.
해당 내용은 읽어 보시고 삭제하셔도 됩니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 책임이 따르게 됩니다.)

2. 돈을 받고 유상으로 작업하셔도 되지만 그에 대한 책임은 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/ 
?>




<!-------------------------- 슬라이드 -------------------------->
<header>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="carousel-item active" style="background-image: url('https://via.placeholder.com/2560x800')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4">디즈니 만달로리안 시즌3</h3>
		  <p class="ks4 f20">2022년도 시즌3 방영예정</p>
		</div>
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('https://via.placeholder.com/2560x800')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4">디즈니 만달로리안 시즌3</h3>
		  <p class="ks4 f20">2022년도 시즌3 방영예정</p>
		</div>
	  </div>
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('https://via.placeholder.com/2560x800')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4">디즈니 만달로리안 시즌3</h3>
		  <p class="ks4 f20">2022년도 시즌3 방영예정</p>
		</div>
	  </div>

	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
</header>
<!-------------------------- ./슬라이드 -------------------------->






<!-------------------------- 아이콘박스 -------------------------->
<div class="margin-top-100"></div>
<div class="container">
	<div class="center-heading ks4">
		<h2>MANDALORIAN 바로가기</h2>
		<span class="center-line"></span>
	</div>

	<div class="row padding-top-20">
		<div class="col-lg-3 col-md-3 col-sm-12 col-12 no-padding">
			<div class="box">							
				<div class="icon">
					<div class="info-pink">
						<span class="material-icons-outlined">travel_explore</span>
						<p class="ks4 f15 text-center">
							만달로리안 소개
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='/pages/about.php'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-12 no-padding">
			<div class="box">							
				<div class="icon">
					<div class="info-pink-2">
						<span class="material-icons-outlined">movie</span>
						<p class="ks4 f15 text-center">
							만달로리안 시즌정보 안내
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='/season_1'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-12 no-padding">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<span class="material-icons-outlined">live_tv</span>
						<p class="ks4 f15 text-center">
							만달로리안 예고편 바로가기
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='/season_3'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-12 no-padding">
			<div class="box">							
				<div class="icon">
					
					<div class="info">
						<span class="material-icons-outlined">collections</span>
						<p class="ks4 f15 text-center">
							갤러리
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='/gallery'">바로가기</button>
						</div>
					</div>
					
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
	</div><!-- /row -->

	<div class="d-none d-sm-block margin-top-30"></div><!-- pc 만 적용 -->

	<div class="margin-bottom-40"></div>
</div><!-- /container -->












<div class="margin-top-100"></div>
<div class="container-fluid" style="padding:0;margin:0px;">
	<div class="center-heading ks4">
		<h2>만달로리안 시즌3 <strong>예고편</strong> </h2>
		<span class="center-line"></span>
	</div>
	<div class="row" style="margin:0px;">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">
			<iframe width="100%" height="450" src="https://www.youtube.com/embed/KpyDBZTaAo4?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		

		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding bg-gray-2">
			<div class="a-box">
				<h2 class="ks4">THE DARKSABER</h2>
				<p class="ks4">
				현재는 시즌3을 남겨둔 상태 인데요.<br>
				원래는 시즌3 방영일이 2021년도 12월 25일에 예정되어 있었으나 현재는 미정 상태로 되었습니다.<br>
				시즌3의 시작 에피소으의 제목은 다크세이버 입니다.
				</p>
			</div>
		</div><!-- /col -->
	</div><!-- /row -->
	<div class="row" style="margin:0px;">
		<div class="col-lg-6 order-2 order-lg-6 no-padding text-right bg-gray-2">
			<div class="a-box">
				<h2 class="ks4">만달로리안 시즌3</h2>
				<p class="ks4">
				The Mandalorian Season 3 (2022) FIRST LOOK TRAILER | Disney+
				</p>
			</div>
		</div><!-- /col -->
		<div class="col-lg-6 order-1 order-lg-6 no-padding">
			<iframe width="100%" height="450" src="https://www.youtube.com/embed/g3Eb9RZsuu8?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		
		</div>
	</div><!-- /row -->
	<div class="row" style="margin:0px;">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">
			<iframe width="100%" height="450" src="https://www.youtube.com/embed/vk3ZvXeMlnE?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		

		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding bg-gray-2">
			<div class="a-box">
				<h2 class="ks4">만달로리안 시즌3</h2>
				<p class="ks4">
				The Mandalorian | Season 3 | Teaser Trailer | Disney+
				</p>
			</div>
		</div><!-- /col -->
	</div><!-- /row -->


</div><!-- /container -->










<!-------------------------- 게시판 -------------------------->
<div class="margin-top-100"></div>
<div class="container">
	<div class="center-heading ks4">
		<h2 class="ks4">시즌정보</h2>
		<span class="center-line"></span>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'season_1', 5, 40);?>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'season_2', 5, 40);?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'free', 5, 40);?>
		</div>
	</div>
</div>
<div class="margin-bottom-150"></div>




<!-------------------------- pallax box -------------------------->
<style>
.para-box{
    height: 350px; display: grid; align-items: center;
}
</style>
<div class="parallax-window" data-parallax="scroll" data-image-src="https://via.placeholder.com/1920x1080"><!-- 이미지 주소 -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 para-box text-center">
				
				<div class="">
					<h2 class='text-light ks5'>디즈니 만달로리안 바로가기</h2>
					<br />
					<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="https://www.disneyplus.com/ko-kr/series/the-mandalorian/3jLIGMDYINqD"'>바로가기</button>
				</div>
			</div>

		</div>
	</div>
</div><!-- /parallax -->





<!-------------------------- 제품안내 갤러리 -------------------------->
<div class="container margin-top-120 margin-bottom-150">
	<div class="center-heading margin-top-40">
		<h2 class="ks4">갤러리</h2>
		<span class="center-line"></span>
	</div>
	<!-- 
	LATEST : pic_basic_company 
	글자수 조정은 해당 스킨에서 해주세요~
	-->
	<?php echo latest('theme/pic_basic_company', 'gallery', 12, 24); ?>
</div>





<?php
include_once(G5_THEME_PATH.'/tail.php');