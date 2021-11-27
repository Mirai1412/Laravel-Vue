<template>
    <div class="main" id="app">
        <Top/>
        <div class="container">
            <slot/>
        </div>
        <Bottom/>
        <Control/>
    </div>
</template>
<script>
import Top from "./Top.vue";
import Control from "./Control.vue";
import Bottom from "./Bottom.vue";
import Home from './Home/Home.vue';
import Menu from './expage/Menu.vue';

export default {
    components: {
        Top,
        Bottom,
        Control,
        Home,
        Menu
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
