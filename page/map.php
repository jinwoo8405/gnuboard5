<?php
include_once('../common.php');
$group['subject'] = "ABOUT";
$group2['subject'] = "오시는길";
include_once(G5_THEME_PATH.'/head2.php');
?>


<section class="ptb ptb-xs-60">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2>찾아오시는길</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 contact pb-60 pt-30">
          <div class="row text-center">
            <div class="col-sm-4 pb-xs-30"> <i class="ion-android-call icon-circle pos-s"></i><a href="#" class="mt-15 i-block">02-1234-5678</a> </div>
            <div class="col-sm-4 pb-xs-30"> <i class="ion-ios-location icon-circle pos-s"></i>
              <p  class="mt-15"> 본 샘플사이트는 그누보드5로 제작된  <br />
                채러티 비즈니스 테마 입니다. </p>
            </div>
            <div class="col-sm-4 pb-xs-30"> <i class="ion-ios-email icon-circle pos-s"></i><a href="mailto:support@kidokjungbo.com"  class="mt-15 i-block">support@kidokjungbo.com</a> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Map Section -->
    <div class="map">
      <div id="map"></div>
    </div>
    <!-- Map Section -->

  </section>

             
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>