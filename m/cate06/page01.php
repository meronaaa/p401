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
      <h2>관심고객등록</h2>
      <img src="/m/images/sub/cont_title_dec.jpg" alt="">
    </div>
    <div class="content">
      <form style="margin-top:-20px;" name="frm_form" method="post" action="/page/s603_ok.php" enctype="multipart/form-data">
          <div class="ebox">
            <table id="" class="tb_estimate" summary="">
              <thead>
                <tr>
                  <th style="border-bottom:1px solid #ccc;font-size:1.4em;padding-bottom:10px;">회원정보</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="bull_list">성명
                </th></tr>
                <tr>
                  <td><input type="text" name="user_name" id="" class="" style="width:30%;"></td>
                </tr>
                <tr>
                  <th class="bull_list">연령</th>
                </tr>
                <tr>
                  <td>
                    <span class="radio_wrap"> <input type="radio" name="age" value="10대이하"> 10대 이하</span>
                    <span class="radio_wrap"> <input type="radio" name="age" value="20대"> 20대</span>
                    <span class="radio_wrap"> <input type="radio" name="age" value="30대"> 30대</span>
                    <span class="radio_wrap"> <input type="radio" name="age" value="40대"> 40대</span>
                    <span class="radio_wrap"> <input type="radio" name="age" value="50대"> 50대</span>
                    <span class="radio_wrap"> <input type="radio" name="age" value="60대 이상"> 60대 이상</span>
                  </td>
                </tr>
                <tr>
                  <th class="bull_list">전화</th>
                </tr>
                <tr>
                  <td><input style="width:30%" type="text" name="cel01" id="" class="">-<input style="width:30%" type="text" name="cel02" id="" class="">-<input style="width:30%" type="text" name="cel03" id="" class=""></td>
                </tr>
                <tr>
                  <th class="bull_list">이메일</th>
                </tr>
                <tr>
                  <td><input style="width:40%" type="text" name="email01" id="" class=""> @
                  <input style="width:40%" type="text" name="email02" id="" class=""></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="ebox">
            <table id="" class="tb_estimate" summary="">
              <thead>
                <tr>
                  <th style="border-bottom:1px solid #ccc;font-size:1.4em;padding-bottom:10px;">관심 사항</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="bull_list">관심 타입</th>
                </tr>
                <tr>
                  <td>
                    <span class="radio_wrap"> <input type="radio" name="b_type" value="">14.84㎡A</span>
                    <span class="radio_wrap"> <input type="radio" name="b_type" value="">30.27㎡B</span>
                    <span class="radio_wrap"> <input type="radio" name="b_type" value="">19㎡A</span>
                    <span class="radio_wrap"> <input type="radio" name="b_type" value="">26㎡B</span>
                    <span class="radio_wrap"> <input type="radio" name="b_type" value="">41㎡C</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="ebox">
            <table id="" class="tb_estimate" summary="">
              <thead>
                <tr>
                  <th style="border-bottom:1px solid #ccc;font-size:1.4em;padding-bottom:10px;">개인정보수집동의</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="term_box">
                         더리브에서는 고객관리, 상담, 계약서 작성 등 서비스 제공을 위해 아래와 같은 최소한의 개인정보를 수집하고 있습니다.<br>
<br>
1. 수집하는 개인정보의 항목<br>
<br>
이름, 휴대전화번호, 이메일<br>
<br>
2. 개인정보 수집 방법<br>
<br>
더리브 다음과 같은 방법으로 개인정보를 수집합니다.<br>
<br>
-홈페이지 http://<br>
<br>
3. 개인정보의 수집 및 이용 목적<br>
<br>
개인정보의 수집은 아래와 같은 목적을 위하여 수집하며 이외의 목적으로는 사용되지 않습니다.
                    </div>
                  </td>
                </tr>
                <tr>
                  <td align="right"><input type="checkbox" id="chk_agree" name="privacy_yn" value="Y"><label for="chk_agree">동의</label>
                  <input type="checkbox" id="chk_agree" name="privacy_yn" value="Y"><label for="chk_agree">동의안함</label></td>

                </tr>
              </tbody>
            </table>
          </div>
          <div class="ac">
          	<input type="button" value="확인" class="comm_btn_ok" onclick="javascript:chkSubmit();">
          	<input type="button" value="취소" class="comm_btn_cancel" onclick="javascript:location.href='/web';">
          </div>
        </form>
    </div><!-- content -->
  </div><!-- container -->
</div><!-- container_wrap -->

<?include "../inc/footer.php";?>
