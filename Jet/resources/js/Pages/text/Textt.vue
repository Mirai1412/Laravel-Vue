<template>
<div>
    <Top/>
        <div class="sgsdf">
            <div>
                <h1 style="text-align:center;" >환영합니다.</h1>
                <br>
                <p style="text-align:center;">
                '매화'의 서비스 및 제품(이하 ‘서비스’)을 이용해 주셔서 감사합니다.<br>
                본 약관은 다양한 서비스의 이용과 관련하여 관련 서비스를 제공하는 <br>
                주식회사'Mirai' 와 이를 이용하는 Mirai 서비스 회원 또는 비회원과의 관계를 설명하며, <br>
                아울러 여러분의 네이버 서비스 이용에 도움이 될 수 있는 유익한 정보를 포함하고 있습니다.<br>
                본 서비스를 이용하시거나 본 서비스 회원으로 가입하실 경우 <br>
                여러분은 본 약관 및 관련 운영 정책을 확인하거나 동의하게 되므로, <br>
                잠시 시간을 내시어 주의 깊게 살펴봐 주시기 바랍니다</p>
            </div>
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
.sgsdf{
    width: 950px;
    margin:  0 auto;
    height: 320px;
    margin-top: 35px;
    font-family: 'Nanum Pen Script', cursive;

    h1{
    font-size: 2.5rem;
    }
    p{
    font-size: 1.5rem;
    }
}
</style>
