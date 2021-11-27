<template>
    <div class="mainbox">
        <div class="homeimg">
            <img src="/img/d2.png" class="dag">
        </div>
        <Homepost/>
        <Hometwo/>
        <Homeone/>


        <!-- <Homeimg/> -->
    </div>
</template>
<script>
import Homeone from "./Homeone.vue";
import Hometwo from "./Hometwo.vue";
// import Homeimg from "./Homeimg.vue";
import Homepost from "./Homepost.vue";

export default {
    components: {
        Homeone,
        Hometwo,
        Homepost
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
