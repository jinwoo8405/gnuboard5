<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>



	<!-------------------------- 상단배경 수정 -------------------------->
	<?php
	$background_images = G5_URL.'/pages/img/1.jpg';
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
			.select-menu{width:300px; height:58px; padding:17px 70px 17px 5px; border-top:none; border-bottom:1px solid #fff; border-left: 1px solid #e1e1e1;border-right: 1px solid #f2f2f2;}
			.home{display:inline; width:140px; padding:17px 45px 17px 15px; border-left:1px solid #e1e1e1;}
			.menu{display:inline;}
		}
		/* desktop */
		@media (min-width: 1090px) {
			.select-menu{width:300px; height:58px; padding:17px 70px 17px 5px; border-top:none; border-bottom:1px solid #fff; border-left: 1px solid #e1e1e1;border-right: 1px solid #f2f2f2;}
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
							<option value="<?php echo G5_URL?>/pages/about.php" selected>만달로리안 소개</option>
							<option value="/season_1">시즌 정보</option>
							<option value="/season_3">예고편</option>
							<option value="/gallery">갤러리</option>
							<option value="/notice">공지사항</option>
							<option value="/free">자유게시판</option>
						</select>
					</div>

				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /container-fluid -->



	<div class="container margin-top-80">
		
		<div class="center-heading en1">
			<h2 class="ks4">만달로리안 소개</h2>
			<span class="center-line"></span>
		</div>

		<img src="https://via.placeholder.com/1100x400" class="img-fluid">
		<ul class="list-unstyled margin-top-50">
		  <li class="media">
			<div class="media-body">
			    <p>
					디즈니+에서 방영된 첫 번째 스타워즈 실사 드라마 시리즈. 은하 내전 이후, 제국이 몰락한 시대에 활약한 무명의 만달로리안 현상금 사냥꾼 딘 자린의 이야기를 추적하는 스페이스 오페라다.
				</p>
				<p>
					존 패브로[4]가 제작 총괄을 맡았으며, 데이브 필로니, 타이카 와이티티, 데보라 차우 감독 등의 제작진이 참여했다. 
					2019년 11월 12일, 디즈니 스트리밍 서비스의 공식 런칭을 알리며 최초의 디즈니+ 오리지널 시리즈로 공개하였다. 
				</p>
				<p>
					이후 2주도 채 지나지 않아 넷플릭스와 아마존 프라임 비디오의 화제작들을 추월하며 미국에서 가장 많이 스트리밍된 드라마가 되는 등, 2019년 최고의 화제작으로 떠올랐다. 2020년 프라임타임 에미상에는 드라마 시리즈 부문 최고우수 작품상 (Outstanding Drama Series) 후보로 올랐으며,프라임타임 크리에이티브 아트 에미상 7개 부문에서 수상했다.
				</p>
					시즌 2는 2020년 10월 30일부터 12월 18일까지 방영되었으며, 
					2020년 미국의 OTT 통합 최고의 시청률 기록을 갱신했다. 한편 시즌 3은 2022년에 방영될 예정이다.
					이와 같은 성공으로 현재 스핀오프 드라마 3개가 발표되었다. 
					<strong>(출처 나무위키)</strong>
			    </p>
			</div>
		  </li>
		</ul>
	</div>


	<div class="container mt-5">
		<div class="center-heading en1">
			<h2 class="ks4">만달로리안 시즌 1</h2>
			<span class="center-line"></span>
		</div>
		  <table class="table table-bordered">
			<thead>
			  <tr>
				<th><strong>제작사 디즈니 , 2019년 11월 12일 ~ 2019년 12월 27일</strong></th>
				<th width="10%"></th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>Chapter 1: The Mandalorian - 만달로어인</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_1/2')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 2: The Child - 아이</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_1/3')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 3: The Sin - 죄악</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_1/4')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 4: Sanctuary - 안식처</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_1/5')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 5: The Gunslinger - 총잡이</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_1/6')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 6: The Prisoner - 죄수</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_1/7')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 7: The Reckoning - 심판</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_1/8')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 8: Redemption - 구원</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_1/9')">바로가기</button></td>
			  </tr>
			</tbody>
		  </table>
	</div>




	<div class="container mt-5">
		<div class="center-heading en1">
			<h2 class="ks4">만달로리안 시즌 2</h2>
			<span class="center-line"></span>
		</div>
		  <table class="table table-bordered">
			<thead>
			  <tr>
				<th><strong>제작사 디즈니 , 2019년 11월 12일 ~ 2019년 12월 27일</strong></th>
				<th width="10%"></th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>Chapter 9: The Marshal - 보안관</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_2/1')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 10: The Passenger - 승객</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_2/3')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 11: The Heiress - 후계자</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_2/4')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 12: The Siege - 봉쇄</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_2/5')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 13: The Jedi - 제다이</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_2/6')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 14: The Tragedy - 비극</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_2/7')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 15: The Believer - 신봉자</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_2/8')">바로가기</button></td>
			  </tr>
			  <tr>
				<td>Chapter 16: The Rescue - 구조</td>
				<td><button type="button" class="btn btn-danger" onclick="window.open('/season_2/9')">바로가기</button></td>
			  </tr>
			</tbody>
		  </table>
	</div>



	<div class="container mt-5">
		<div class="center-heading en1">
			<h2 class="ks4">만달로리안 시즌 3</h2>
			<span class="center-line"></span>
		</div>
		  <table class="table table-bordered">
			<thead>
			  <tr>
				<th><strong>제작사 디즈니 , 2022년</strong></th>
				<th width="10%"></th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>2022년에 방영예정</td>
				<td></td>
			  </tr>

			</tbody>
		  </table>
	</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>