<template>
<div>
    <Top/>
  <div class="dasdsads">

  </div>
      <Bottom/>
      <Control/>
</div>
</template>
<script>
import Top from "./TB/Top.vue";
import Bottom from "./TB/Bottom.vue";
import Control from "./TB/Control.vue";

export default {

      components: {
        Top,
        Bottom,
        Control
    },


};
</script>
<style lang="scss">
.dasdsads{
  height: 500px;
}
</style>
