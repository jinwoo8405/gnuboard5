<?php
include_once('../common.php');
$group['subject'] = "ABOUT";
$group2['subject'] = "인사말";
include_once(G5_THEME_PATH.'/head2.php');
?>


  <div id="mission-section" class="ptb2 ptb-xs-60">

      <div class="row">
        <div class="col-sm-12">
          <div class="block-title v-line mb-35 ">
            <h2><span>이곳을 방문하신 여러분을 </span> 환영합니다.</h2>
            <p class="italic"> 대표 홍길동 </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="about-block clearfix">
            <div class="fl width-25per box-shadow mt-15 mb-xs-15"> <img class="img-responsive" src="<?php echo G5_THEME_URL; ?>/assets/images/about-1.jpg" alt="Photo"> </div>
            <div class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl">
              <div class="box-title">
                <h3>누구든지 본 사용 허가서를 있는 그대로 복제하고 배포할 수 있습니다.</h3>
              </div>
              <div class="text-content">
                <p> 그누보드는 공유 정신을 나타내는 "GNU" 와 게시판을 나타내는 "Board" 가 합쳐진 말입니다.</p>
  <p>그누보드는 웹에서 게시글, 회원정보 등을 편리하게 관리하는 게시판(BBS - Bulletin Board System) 프로그램입니다. 오픈된 소스 코드를 바탕으로 다양한 기능(플러그인)을 추가하기 쉽게 제작되어 있습니다.</p>
 <p>그누보드5의 대표적인 플러그인 으로는 쇼핑몰 기능을 하는 "영카트5" 가 있습니다. </p>

              </div>
            </div>
          </div>
        </div>
      </div>

  </div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>