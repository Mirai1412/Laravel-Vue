<template>
<div>
    <Top/>
  <div class="textodox">
      <h1>무엇을 도와드릴까요?</h1>
      <p>
        <br>
          <input type="text" class="oyjgd">
          <br>
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
import Button from '../../../../../Haruki/vendor/laravel/breeze/stubs/inertia-vue/resources/js/Components/Button.vue';

export default {
      components: {
        Top,
        Bottom,
        Control,
            Button
    },

};
</script>
<style lang="scss">
.textodox{
    width: 500px;
    margin:  0 auto;
    height: 265px;
    margin-top: 75px;
}
</style>
