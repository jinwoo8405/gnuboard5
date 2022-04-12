<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<?php if(defined('_INDEX_')) { ?>


<?php } else { ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service Section end --> 


<?php } ?>



    <button type="button" id="top_btn">
    	<i class="fa fa-angle-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>


<!-- } 콘텐츠 끝 -->


<!-- FOOTER -->
  <footer class="footer pt-30 pt-xs-0">
    <div class="container"> 
      
      <!--Footer Info -->
      <div class="row footer-info mb-0">
        <div class="col-md-12 col-sm-12 col-xs-12 mb-sm-30">
          <h4 class="mb-30">채러티 비즈니스</h4>
          <address>
          본 샘플사이트는 그누보드5로 제작된 채러티 비즈니스 테마 입니다.
          </address>
          <ul class="link-small">
            <li> <a href="mailto:business@support.com">support@kidokjungbo.com</a> </li>
            <li> <a>02-1234-5678</a> </li>
          </ul>
        </div>
     
      </div>
      <!-- End Footer Info --> 
    </div>
    
    <!-- Copyright Bar -->
    <div class="copyright">
      <div class="container">
        <p class=""> © 2021 <a><b> kidokjungbo.com</b></a>. All Rights Reserved. </p>
      </div>
    </div>
    <!-- End Copyright Bar --> 
    
  </footer>
  <!-- END FOOTER --> 
  
</div>
<!-- Site Wraper End --> 


<!-- } 하단 끝 -->


<?php
include_once(G5_THEME_PATH."/tail.sub.php");