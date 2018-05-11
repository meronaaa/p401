<?include "../inc/head_sub.php";?>
<?include "../inc/gnb.php";?>
<?include "../inc/header.php";?>

<div class="container_wrap">
  <div class="visual_wrap">
    <div class="visual sub_visual">
      <img src="../images/sub/sub_visual.jpg" alt="서브비주얼">
    </div><!-- visual -->
  </div><!-- visual_wrap -->

  <div class="container">
    <div class="cont_title">
      <h2>오시는 길</h2>
      <img src="../images/sub/cont_title_dec.jpg" alt="">
    </div>

    <div class="content">
      <!-- * Daum 지도 - 지도퍼가기 -->
      <!-- 1. 지도 노드 -->
      <div style="width:100%" id="daumRoughmapContainer1525666537884" class="root_daum_roughmap root_daum_roughmap_landing"></div>
      <!--
      	2. 설치 스크립트
      	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
      -->
      <script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

      <!-- 3. 실행 스크립트 -->
      <script charset="UTF-8">
      	new daum.roughmap.Lander({
      		"timestamp" : "1525666537884",
      		"key" : "o27g",
      		"mapWidth" : "100" + "%",
      		"mapHeight" : "350"
      	}).render();
      </script>

      <img src="../images/sub/c1-p3.jpg" alt="">
    </div><!-- content -->
  </div><!-- container -->
</div><!-- container_wrap -->

<?include "../inc/footer.php";?>
