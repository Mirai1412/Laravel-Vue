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
        // Homeimg
    },
};
</script>
<style>

.dag{
    width: 100%;
    margin: 20px 0;
}
</style>
