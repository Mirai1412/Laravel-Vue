<template>
<div>
    <Top/>
  <div class="asgfasd">
        <h1 style="text-align:center; font-size: 2.5rem;">'매화'에서는  내 개인정보를 어떻게 안전하게 보호하나요?</h1>
        <br>
        <p style="text-align:center">보안과 개인정보는 본인에게도 중요하지만 '매화'에게도 중요한 문제입니다. <br>
        '매화'는 강력한 보안을 제공하여 개인정보가 안전하게 보호되고 있으며 원할 때 언제든지 액세스할 수 있다는 믿음을 주는 것을 최우선으로 생각합니다.<br>
        <br>
        '매화'는 보안을 강화하고 개인정보를 보호하며 더 효과적이고 효율적으로 서비스를 제공하기 위해 항상 노력하고 있습니다.
        <br>
        '매화'는 매년 보안을 위해 수억 달러의 비용을 지출하고 사용자의 정보를 안전하게 보호하기 위해 세계적으로 명망 있는 데이터 보안 전문가를 고용합니다.
        <br>
        2단계 인증 및 광고 설정과 같이 사용하기 편리한 개인정보 보호 및 보안 도구를 구축했습니다.
        <br>
        따라서 '매화'에 공유하는 정보에 대해 안심하셔도 됩니다.
        </p>
        <br>
        <br>
        <h1 style="text-align:center; font-size: 2.5rem;">검색결과에서 나에 대한 정보를 삭제하려면 어떻게 해야 하나요?</h1>
        <br>
        <p style="text-align:center"> 검색결과는 웹에 공개적으로 표시되는 콘텐츠를 그대로 반영하고 있습니다. <br>
        검색엔진은 웹사이트에서 콘텐츠를 직접 삭제할 수 없기 때문에 '매화'에서 검색결과를 삭제하여도 웹에 있는 콘텐츠는 삭제되지 않습니다. <br>
        <br>
        웹에서 삭제하려면 콘텐츠가 게시된 해당 사이트의 웹마스터에게 문의하여 변경을 요청하시기 바랍니다.
        <br>
        콘텐츠가 삭제되고 '매화'에 업데이트가 반영되면 '매화'에 검색결과에 더 이상 해당 콘텐츠가 표시되지 않습니다.
        <br>
        긴급하게 삭제 요청을 하려는 경우에는 '매화' 도움말 페이지를 방문하여 자세한 내용을 참조할 수 있습니다.
        </p>
        <br>
        <br>
        <h1 style="text-align:center; font-size: 2.5rem;">검색결과를 클릭할 때 내가 입력한 검색어가 웹사이트로 전송되나요?</h1>
        <br>
        <p style="text-align:center"> 검색결과는 웹에 공개적으로 표시되는 콘텐츠를 그대로 반영하고 있습니다. <br>
        전송되는 경우도 있습니다. 사용자가 매화화 검색에서 검색결과를 클릭하면
        <br>
        웹브라우저가 검색결과 페이지의 인터넷 주소(URL)를 대상 웹페이지에 리퍼러 URL로 전송할 수 있습니다.<br>
        <br>
        이때 검색결과 페이지의 URL에 사용자가 입력한 검색어가 포함될 수 있습니다.
        <br>
        SSL 검색('매화'의 암호화된 검색 기능)을 사용하면 대부분의 경우 검색어가 리퍼러 URL의 URL에 포함되어 전송되지 않습니다.
        <br>
        그러나 인지도가 낮은 브라우저를 사용할 때와 같이 예외적인 경우에는 전송될 수도 있습니다.
                <br>
        리퍼러 URL에 포함된 검색어나 정보는 매화 애널리틱스 또는 애플리케이션 프로그래밍 인터페이스(API)를 통해 확인할 수 있습니다.
                <br>
        또한 광고 클릭으로 이어진 정확한 키워드에 관한 정보가 광고주에게 전송될 수 있습니다.
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
.asgfasd{
    width: 1100px;
    margin:  0 auto;
    height: 1250px;
    margin-top: 75px;
    font-family: 'Nanum Pen Script', cursive;
    font-size: 1.5rem;
}
</style>
