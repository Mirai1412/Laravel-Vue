<template>
    <div class="main">
        <Top/>
        <div class="container">
            <router-view/>
        </div>
        <Bottom/>
        <Control/>
    </div>
</template>
<script>
import Top from "./Top.vue";
import Control from "./Control.vue";
import Bottom from "./Bottom.vue";

export default {
    components: {
        Top,
        Bottom,
        Control
    },
};
</script>
<style>
body{
    background-color: white;
    margin: 0 auto;
}
.container{
    width: 1536px;
}
html{
  scroll-behavior: smooth;
}
</style>
