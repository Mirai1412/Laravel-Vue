<template>
    <div class="mainbox">
         <Top/>
        <div class="homeimg">
            <img src="/img/d2.png" class="dag">
        </div>
        <Homepost/>
        <Hometwo/>
        <Homeone/>
        <Bottom/>
    <Control/>
    </div>
</template>
<script>
import Top from "./TB/Top.vue";
import Bottom from "./TB/Bottom.vue";
import Control from "./TB/Control.vue";

import Homeone from "./Home/Homeone.vue";
import Hometwo from "./Home/Hometwo.vue";
import Homepost from "./Home/Homepost.vue";

export default {
    components: {
        Homeone,
        Hometwo,
        Homepost,
        Top,
        Bottom,
        Control
    },
};
</script>
<style>
body{
    width: 1536px;
}
.dag{
    width: 100%;
    height: 455px;
    margin-top: 20px;
}
</style>
