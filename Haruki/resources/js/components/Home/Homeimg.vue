<template>
        <div class="store">
            <div class="bg1">
            <img src="/img/store/bg1.jpg">
            </div>
            <div class="bg2">
            <img src="/img/store/bg2.jpg">
            </div>
            <div class="bg3">
            <img src="/img/store/bg3.png">
            </div>
            <div class="bg4">
            <img src="/img/store/bg4.png">
            </div>
            <div class="bg5">
            <img src="/img/store/bg5.png">
            </div>
        </div>
</template>
<script>
export default {
    name:'control'
}
</script>
<style lang="scss">
.store{
  width: 1110px;
  margin: 0 auto;
  margin-top: 20px;
  height: 920px;
  z-index: 5;
  position: relative;
    .bg1{
     position: absolute;
     width: 550px;
     height: 500px;
    }
    .bg2{
     position: absolute;
     width: 540px;
     height: 300px;

     right: 0;
    }
    .bg3{
     position: absolute;
     width: 540px;
     height: 300px;
     right: 0;
     top: 320px;
    }
    .bg4{
     position: absolute;
     width: 550px;
     height: 400px;
     top: 520px;
    }
    .bg5{
     position: absolute;
     width: 540px;
     height: 280px;
     right: 0;
     top: 640px;
    }
    img{
        width: 100%;
        height: 100%;
    }
}
</style>
