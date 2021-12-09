<template>
<div>
    <Top/>
  <div class="aegaegsdfd">
    <h1 style="text-align:center; font-size: 2.5rem;">개인정보처리방침</h1>
      <p style="text-align:center">
        '매화'는 서비스 사용자들이 신뢰를 바탕으로 정보를 제공한다는 것을 잘 알고 있습니다.<br>
        '매화'는 사용자의 신뢰에 대한 막중한 책임을 인지하며 최선을 다해 개인정보를 보호하고 사용자가 직접 제어할 수 있도록 노력하고 있습니다.<br>
        이 개인정보처리방침은 '매화'에서 수집하는 정보의 유형, 정보를 수집하는 이유, 정보를 업데이트, 관리, 내보내기, 삭제하는 방식에 대한 이해를 돕기 위한 것입니다.
      </p>
      <br>
      <h1 style="text-align:center;font-size: 2.5rem;">사용자는 '매화'에서 수집하는 정보와 이용 방식에 대해 선택권이 있습니다</h1>
      <p style="text-align:center">
        이 섹션에서는 서비스 이용 시 개인정보를 관리하기 위한 주요 설정을 설명합니다. <br>
        개인정보 보호 진단을 방문하여 중요한 개인정보 보호 설정을 검토하고 조정할 수 있습니다. <br>
        이러한 도구 이외에 제품에서도 구체적인 개인정보 보호 설정을 제공하고 있으며 제품 개인정보 보호 가이드에서 자세히 알아볼 수 있습니다.
      </p>
  </div>
      <Bottom/>
      <Control/>
</div>
</template>
<script>
import Top from "../TB/Top.vue";
import Bottom from "../TB/Bottom.vue";
import Control from "../TB/Control.vue";

export default {
      components: {
        Top,
        Bottom,
        Control
    },

};
</script>
<style lang="scss">
.aegaegsdfd{
    width: 950px;
    margin:  0 auto;
    height: 460px;
    margin-top: 35px;
    font-family: 'Nanum Pen Script', cursive;
    font-size: 1.5rem;
}
</style>
