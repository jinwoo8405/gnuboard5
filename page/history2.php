<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

	<!-------------------------- 상단배경 수정 -------------------------->
	<?php
	$background_images = G5_URL.'/pages/img/2.jpg';
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
							<option value="<?php echo G5_URL?>/pages/about.php">인사말</option>
							<option value="<?php echo G5_URL?>/pages/history.php" selected>연혁</option>
							<option value="<?php echo G5_URL?>/pages/pages-1.php">페이지</option>
						</select>
					</div>

				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /container-fluid -->



	<div class="container margin-top-80 margin-bottom-80">
		<div class="center-heading en1">
			<h2>HISTORY</h2>
			<span class="center-line"></span>
		</div>
		<ul class="list-unstyled">
		  <li class="media">
			<img src="https://via.placeholder.com/100x100" class="mr-3" alt="...">
			<div class="media-body">
			  <h5 class="mt-0 mb-1 ks5">신명기</h5>
			  <p class="ks3">이스라엘인들이 가나안 땅에 도착하기 전, 모세가 야훼의 가르침을 마지막으로 전하고 죽기까지의 내용을 담고 있다. 대부분 출애굽기, 민수기 등에 등장했던 가르침이 반복되는 내용이기 때문에 신명기라는 이름이 붙었다.  [위키백과] </p>
			</div>
		  </li>
		  <li class="media my-4">
			<img src="https://via.placeholder.com/100x100" class="mr-3" alt="...">
			<div class="media-body">
			  <h5 class="mt-0 mb-1 ks5">시편</h5>
			  <p class="ks3">19세기까지 시편의 저자는 다윗인 것으로 여겨졌다. 특별히 시편 자체에서 다윗의 이름으로 칭해지는 시편은 모두 74편이나 된다. 칠십인역은 더욱이 14편의 시가 추가로 다윗의 것으로 여기고 있다. [위키백과]</p>
			</div>
		  </li>
		  <li class="media my-4">
			<img src="https://via.placeholder.com/100x100" class="mr-3" alt="...">
			<div class="media-body">
			  <h5 class="mt-0 mb-1 ks5">시편</h5>
			  <p class="ks3">19세기까지 시편의 저자는 다윗인 것으로 여겨졌다. 특별히 시편 자체에서 다윗의 이름으로 칭해지는 시편은 모두 74편이나 된다. 칠십인역은 더욱이 14편의 시가 추가로 다윗의 것으로 여기고 있다. [위키백과]</p>
			</div>
		  </li>
		  <li class="media my-4">
			<img src="https://via.placeholder.com/100x100" class="mr-3" alt="...">
			<div class="media-body">
			  <h5 class="mt-0 mb-1 ks5">시편</h5>
			  <p class="ks3">19세기까지 시편의 저자는 다윗인 것으로 여겨졌다. 특별히 시편 자체에서 다윗의 이름으로 칭해지는 시편은 모두 74편이나 된다. 칠십인역은 더욱이 14편의 시가 추가로 다윗의 것으로 여기고 있다. [위키백과]</p>
			</div>
		  </li>
		  <li class="media my-4">
			<img src="https://via.placeholder.com/100x100" class="mr-3" alt="...">
			<div class="media-body">
			  <h5 class="mt-0 mb-1 ks5">시편</h5>
			  <p class="ks3">19세기까지 시편의 저자는 다윗인 것으로 여겨졌다. 특별히 시편 자체에서 다윗의 이름으로 칭해지는 시편은 모두 74편이나 된다. 칠십인역은 더욱이 14편의 시가 추가로 다윗의 것으로 여기고 있다. [위키백과]</p>
			</div>
		  </li>
		  <li class="media my-4">
			<img src="https://via.placeholder.com/100x100" class="mr-3" alt="...">
			<div class="media-body">
			  <h5 class="mt-0 mb-1 ks5">시편</h5>
			  <p class="ks3">19세기까지 시편의 저자는 다윗인 것으로 여겨졌다. 특별히 시편 자체에서 다윗의 이름으로 칭해지는 시편은 모두 74편이나 된다. 칠십인역은 더욱이 14편의 시가 추가로 다윗의 것으로 여기고 있다. [위키백과]</p>
			</div>
		  </li>
		  <li class="media my-4">
			<img src="https://via.placeholder.com/100x100" class="mr-3" alt="...">
			<div class="media-body">
			  <h5 class="mt-0 mb-1 ks5">시편</h5>
			  <p class="ks3">19세기까지 시편의 저자는 다윗인 것으로 여겨졌다. 특별히 시편 자체에서 다윗의 이름으로 칭해지는 시편은 모두 74편이나 된다. 칠십인역은 더욱이 14편의 시가 추가로 다윗의 것으로 여기고 있다. [위키백과]</p>
			</div>
		  </li>
		</ul>
	</div>






<?php
include_once(G5_THEME_PATH.'/tail.php');
?>