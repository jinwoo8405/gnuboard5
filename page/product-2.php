<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

	<!-------------------------- 상단배경 수정 -------------------------->
	<?php
	$background_images = G5_URL.'/pages/img/6.jpg';
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
		<p class="lead font-weight-normal ks4">
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
							<option value="<?php echo G5_URL?>/pages/product.php">사업안내 1</option>
							<option value="<?php echo G5_URL?>/pages/product-2.php" selected>사업안내 2</option>
							<option value="<?php echo G5_URL?>/pages/service.php">서비스</option>
						</select>
					</div>

				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /container-fluid -->



	<div class="container margin-top-80 margin-bottom-80">
		<div class="row">
			<div class="col-lg-6">
				<ul class="list-unstyled">
				  <li class="media">
					<img src="https://via.placeholder.com/100x100" class="mr-3" alt="...">
					<div class="media-body">
					  <h5 class="mt-0 mb-1 ks5">잠언</h5>
					  <p class="ks3">목적은 "지혜와 훈계를 알게 하며, 그 행동을 훈계하도록 하고, 어리석은 자와 젊은 자에게 지식과 근신함을 주고, 잠언과 비유와 지혜있는 자의 말과 그 오묘함을 깨닫도록 한다."라고 머릿말에 기록하고 있다. [위키백과]</p>
					</div>
				  </li>
				  <li class="media my-4">
					<img src="https://via.placeholder.com/100x100" class="mr-3" alt="...">
					<div class="media-body">
					  <h5 class="mt-0 mb-1 ks5">요한복음서</h5>
					  <p class="ks3">요한복음서의 저자는 마태오(마태), 마르코(마가), 루가(누가) 등 다른 복음서 저자들과는 다른 전승을 바탕으로 성경을 쓴 것으로 보인다.  [위키백과] </p>
					</div>
				  </li>
				</ul>
			</div><!-- ./col -->
			<div class="col-lg-6">
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
				</ul>
			</div><!-- ./col -->
		</div><!-- ./row -->
	</div><!-- ./container -->


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




	<div class="container marketing margin-top-80 margin-bottom-100">
		<div class="row">
		  <div class="col-lg-4 text-center">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<h3 class="title">IOS</h3>
						<p class="ks3 f15">
							애플사의 IOS 부터 안드로이드 운영체제까지 모두 지원되는 무료 비즈니스 반응형 홈페이지 입니다.
							스마트TV, 각종 태블릿등 어떤 기기에도 브라우저가 있으면 표준 및 최적화되어 제작되고 있습니다.
						</p>
						
					</div>
				</div>
				<div class="space"></div>
			</div><!-- /box -->
		  </div><!-- /.col-lg-4 -->
		  <div class="col-lg-4 text-center">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<h3 class="title">IOS</h3>
						<p class="ks3 f15">
							애플사의 IOS 부터 안드로이드 운영체제까지 모두 지원되는 무료 비즈니스 반응형 홈페이지 입니다.
							스마트TV, 각종 태블릿등 어떤 기기에도 브라우저가 있으면 표준 및 최적화되어 제작되고 있습니다.
						</p>
						
					</div>
				</div>
				<div class="space"></div>
			</div><!-- /box -->
		  </div><!-- /.col-lg-4 -->
		  <div class="col-lg-4 text-center">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<h3 class="title">IOS</h3>
						<p class="ks3 f15">
							애플사의 IOS 부터 안드로이드 운영체제까지 모두 지원되는 무료 비즈니스 반응형 홈페이지 입니다.
							스마트TV, 각종 태블릿등 어떤 기기에도 브라우저가 있으면 표준 및 최적화되어 제작되고 있습니다.
						</p>
						
					</div>
				</div>
				<div class="space"></div>
			</div><!-- /box -->
		  </div><!-- /.col-lg-4 -->
		</div><!-- /.row -->

	  </div><!-- ./container -->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>