<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

	<!-------------------------- 상단배경 수정 -------------------------->
	<?php
	$background_images = G5_URL.'/pages/img/5.jpg';
	?>
	<style>
	/* mobile */
	@media (min-width: 1px) and (max-width: 1089px) {
			.about-bg{background-image:url('<?php echo $background_images?>');width:100%;-webkit-background-size:100% auto;-moz-background-size:100% auto;-o-background-size:100% auto;background-position:center; background-size: cover; background-repeat:no-repeat;color:#fff;height:100%;padding-top: 70px;}.ml-auto,.mx-auto{padding-top:10px;padding-bottom:10px}.lead{font-size:12px;font-weight:300}.display-4{ font-size:1.5rem;font-weight:300;}.btn,a.btn{line-height:20px!important;height:20px!important;padding:0 5px;text-align:center;font-weight:700;border:0;-webkit-transition:background-color .3s ease-out;-moz-transition:background-color .3s ease-out;-o-transition:background-color .3s ease-out;transition:background-color .3s ease-out}.btn-outline-secondary{font-size:11px;padding:0 5px}
	}
	/* desktop */
	@media (min-width: 1090px) {
		.about-bg{background-image:url('<?php echo $background_images?>');background-position:center center;background-repeat:no-repeat;color:#fff;height:300px}.lead{font-size:1.25rem;font-weight:300}.display-4{font-size:2.5rem;font-weight:300;line-height:1.2}
	}
	</style>


	<div class="position-relative overflow-hidden p-md-5 text-center bg-dark bg-sub-1 ety-mt-main about-bg">

	  <div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-normal"><?php echo $title?></h1>
		<p class="lead font-weight-normal ko1">
			<?php echo $title_sub?>
		</p>
	  </div>
	  <div class="product-device shadow-sm d-none d-md-block"></div>
	  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>
	<!-------------------------- ./상단배경 수정 -------------------------->


		<style>
		@media only screen and (max-width: 320px) {
			.SF_board{
				overflow-x: auto;white-space: nowrap;
			}
		}

		@media only screen and (min-width: 321px) and (max-width: 768px){
			.SF_board{
				overflow-x: auto;white-space: nowrap;
			}
		}

		/* 페이지 selec 박스 */
		/* mobile */
		@media (min-width: 1px) and (max-width: 1089px) {
			.mb-5, .my-5 {
				margin-bottom: 0rem!important;
			}
			.select-menu{width:190px; height:58px; padding:17px 70px 17px 5px; border-top:none; border-bottom:1px solid #fff; border-left: 1px solid #e1e1e1;border-right: 1px solid #f2f2f2;}
			.home{display:inline; width:140px; padding:17px 45px 17px 15px; border-left:1px solid #e1e1e1;}
			.menu{display:inline;}
		}
		/* desktop */
		@media (min-width: 1090px) {
			.select-menu{width:190px; height:58px; padding:17px 70px 17px 5px; border-top:none; border-bottom:1px solid #fff; border-left: 1px solid #e1e1e1;border-right: 1px solid #f2f2f2;}
			.home{display:inline; width:140px; padding:17px 45px 17px 15px; border-left:1px solid #e1e1e1;}
			.menu{display:inline;}
		}
	</style>
	<div class="container-fluid" style="background:#f5f5f5; border-bottom:1px solid #e1e1e1;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="home">
						<i class="fas fa-home"></i> HOME
					</div>
					<div class="menu">
						<select name="" class="select-menu" onchange="location.href=this.value">
							<option value="<?php echo G5_URL?>/pages/product.php" selected>사업안내 1</option>
							<option value="<?php echo G5_URL?>/pages/product-2.php">사업안내 2</option>
							<option value="<?php echo G5_URL?>/pages/service.php">서비스</option>
						</select>
					</div>

				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /container-fluid -->


	<div class="container">
		<div class="center-heading margin-top-80">
			<h2>PRODUCT</h2>
			<span class="center-line"></span>
		</div>
		<div class="row content-boxes-v2 margin-bottom-30">
			<div class="col-md-4 margin-bottom-30">
				<h2 class="heading">
					<a href="#">
						<span class="info-2"><i class="fab fa-android"></i></span>
						<span class="ks5">무료테마</span>
					</a>
				</h2>
				<p class="ks3 f13">
				소프트존은 에티테마 커뮤니티를 개설하고 무료 테마를 제작하고 있습니다. 무료로 제작되는 테마를 지속적으로 개발할 예정입니다.
				</p>
			</div><!-- ./col -->
			<div class="col-md-4 margin-bottom-30">
				<h2 class="heading">
					<a href="#">
						<span><i class="fab fa-angular"></i></span>
						<span class="ks5">프리미엄 테마</span>
					</a>
				</h2>
				<p class="ks3 f13">
				아래의 이미지들은 현재 컨덴츠몰에서 판매되고 있는 유료테마들 입니다. 바로 가기 버튼을 클릭하시면 프리미엄 테마로 이동하게 됩니다.
				</p>
			</div><!-- ./col -->
			<div class="col-md-4">
				<h2 class="heading">
					<a href="#">
						<span><i class="fas fa-audio-description"></i></span>
						<span class="ks5">웹개발업무</span>
					</a>
				</h2>
				<p class="ks3 f13">
				소프트존에서는 간단한 프로그램 부터 복잡한 프로그램까지 개발합니다. 테마만 개발하는것이 아니고 각종 솔루션 템플릿등을 추가적으로 개발중입니다.
				</p>
			</div><!-- ./col -->

			<div class="col-md-4 margin-bottom-30">
				<h2 class="heading">
					<a href="#">
						<span><i class="fab fa-android"></i></span>
						<span class="ks5">무료테마</span>
					</a>
				</h2>
				<p class="ks3 f13">
				소프트존은 에티테마 커뮤니티를 개설하고 무료 테마를 제작하고 있습니다. 무료로 제작되는 테마를 지속적으로 개발할 예정입니다.
				</p>
			</div><!-- ./col -->
			<div class="col-md-4 margin-bottom-30">
				<h2 class="heading">
					<a href="#">
						<span><i class="fab fa-angular"></i></span>
						<span class="ks5">프리미엄 테마</span>
					</a>
				</h2>
				<p class="ks3 f13">
				아래의 이미지들은 현재 컨덴츠몰에서 판매되고 있는 유료테마들 입니다. 바로 가기 버튼을 클릭하시면 프리미엄 테마로 이동하게 됩니다.
				</p>
			</div><!-- ./col -->
			<div class="col-md-4">
				<h2 class="heading">
					<a href="#">
						<span><i class="fas fa-audio-description"></i></span>
						<span class="ks5">웹개발업무</span>
					</a>
				</h2>
				<p class="ks3 f13">
				소프트존에서는 간단한 프로그램 부터 복잡한 프로그램까지 개발합니다. 테마만 개발하는것이 아니고 각종 솔루션 템플릿등을 추가적으로 개발중입니다.
				</p>
			</div><!-- ./col -->
		</div><!-- ./row -->
	</div><!-- /container -->



    <!-- Page Content -->
	<style>
	table td {
		color: #666;
		font-size: 15px;
	}
	</style>
    <div class="container">
		<table class="table table-bordered">
		  <thead>
			<tr>
			  <th style="width: 100px;">부서</th>
			  <th>안내사항</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>인사부서</td>
			  <td>
				인사관련 문의사항 부서 입니다. 02-0000-0000

			  </td>
			</tr>
			<tr>
			  <td>영업부서</td>
			  <td>
				<p>
					기술영업 또는 신규영업등이 있을때 영업부서에 전달할 내용을 알려주시면 그에 맞는 보상을 해드리는 부서 입니다. (영업부서 : 02-0000-0000)<br>
					비즈니스영업관련 안내는 내선번호 (02-0000-0001)
				</p>
			  </td>
			</tr>
			<tr>
			  <td>기술부서</td>
			  <td>
				<p>장비가 문제가 발생되거나 프로그램 버그 및 오류관련된 부서<br>031-0000-0000 (내선번호 : 99번)</p>
				
			  </td>
			</tr>
			<tr>
			  <td>현장지원</td>
			  <td>
				<p>작업진행에 있어서 문제가 생기는 경우 현장지원을 해드리는 부서 입니다 매장내 직원분들께 문의를 주시거나<br>031-0000-0000 으로 연락 주시면 빠르게 처리해드리도록 하겠습니다.</p>
			  </td>
			</tr>

		  </tbody>
		</table>
	</div><!-- /container -->





	<!-- Page Content -->
	<div class="container">
		<div class="center-heading margin-top-50">
			<h2 class="ks5">제품안내</h2>
			<span class="center-line"></span>
		</div>

		<div class="row">
			<div class="col-lg-4 margin-bottom-20">
				<!--card-->
				<div class="card">
				  <img src="https://via.placeholder.com/348x348" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title ks5">소개타이틀</h5>
					<p class="card-text ks3 f14">완성도 높은 테마 입니다. 질문답변게시판을 운영하고 있으며, 반응형으로 제작되어져 있습니다.</p>
					<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>
				  </div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-4 margin-bottom-20">
				<!--card-->
				<div class="card">
				  <img src="https://via.placeholder.com/348x348" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title ks5">소개타이틀</h5>
					<p class="card-text ks3 f14">그누보드(CMS) 5.4 버전에 최적화 되어 있습니다. 계속 업데이트 되는 테마 입니다.</p>
					<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>
				  </div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-4 margin-bottom-20">
				<!--card-->
				<div class="card">
				  <img src="https://via.placeholder.com/348x348" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title ks5">소개타이틀</h5>
					<p class="card-text ks3 f14">그누보드(CMS) 5.4 버전에 최적화 되어 있습니다. 계속 업데이트 되는 테마 입니다.</p>
					<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>
				  </div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-4 margin-bottom-20">
				<!--card-->
				<div class="card">
				  <img src="https://via.placeholder.com/348x348" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title ks5">소개타이틀</h5>
					<p class="card-text ks3 f14">그누보드(CMS) 5.4 버전에 최적화 되어 있습니다. 계속 업데이트 되는 테마 입니다.</p>
					<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>
				  </div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-4 margin-bottom-20">
				<!--card-->
				<div class="card">
				  <img src="https://via.placeholder.com/348x348" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title ks5">소개타이틀</h5>
					<p class="card-text ks3 f14">그누보드(CMS) 5.4 버전에 최적화 되어 있습니다. 계속 업데이트 되는 테마 입니다.</p>
					<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>
				  </div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-4 margin-bottom-20">
				<!--card-->
				<div class="card">
				  <img src="https://via.placeholder.com/348x348" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title ks5">소개타이틀</h5>
					<p class="card-text ks3 f14">그누보드(CMS) 5.4 버전에 최적화 되어 있습니다. 계속 업데이트 되는 테마 입니다.</p>
					<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>
				  </div>
				</div>
				<!--/card-->
			</div><!-- /col -->
		</div>

		<div class="margin-top-50"></div>
	</div>
	<!-- /.container -->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>