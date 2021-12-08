<template>
<div>
    <Top/>
  <div class="aegaegsdfd">

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
    width: 500px;
    margin:  0 auto;
    height: 265px;
    margin-top: 75px;
}
</style>
