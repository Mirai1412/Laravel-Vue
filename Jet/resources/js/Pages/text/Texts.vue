<template>
<div>
    <Top/>
        <div class="asfsd">
            <img src="/img/l12.png">
            <h1 style="text-align:center; font-size: 2.5rem;" >무엇을 도와드릴까요?</h1>
            <input type="text" placeholder="문제를 설명해 주세요">
            <p>
                Tel : 010-9115-2813
                <br>
                Email : kkas0807@naver.com
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
.asfsd{
    width: 1100px;
    margin:  0 auto;
    height: 265px;
    margin-top: 75px;
    position: relative;
    font-family: 'Nanum Pen Script', cursive;
    img{
        position: absolute;
        left: 535px;
        top: -60px;
    }
    input{
        width: 300px;
        position: absolute;
        left: 400px;
        top: 80px;
    }
    p{
        width: 500px;
        position: absolute;
        left: 403px;
        top: 140px;
        font-size: 1.5rem;
    }
}
</style>
