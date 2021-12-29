<template>
  <v-app>
    <v-main>
    <div class="mainbox">

      <h1 class="titles">Portfolio to Mirai</h1>
      <h1 class="subtitles">Yeungjin College</h1>



      <div class="flower"></div>

    </div>
    </v-main>
  </v-app>
</template>

<script>
import Tree from  './components/Tree/tree.vue';
export default {
  name: 'App',

  components: {
  Tree
  },

};
</script>
<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Vujahday+Script&display=swap');
body{
  margin: 0 auto;
  max-height: 719.2px;
}
.mainbox{
  background-image: url("../public/img/bsdf.jpg");
  background-size: cover;
  background-position: center;
  width: 100vw;
  height: 100vh;
  font-family: 'Vujahday Script', cursive;

  .titles{
    width: 100%;
    position: absolute;
    font-size: 7vmax;
    text-align: center;
    color: rgb(248, 110, 133);
    // -webkit-text-stroke: 3px white;
    animation-name: titles;
    animation-duration: 2s;
    animation-fill-mode: forwards;
    
  }
  @keyframes titles {
    	100%{top:4vmax;}
    	0%{
        top:20vmax;
        opacity: 0;
      }
  }

  .subtitles{
    width: 100%;
    position: absolute;
    font-size: 4vmax;
    text-align: center;
    color: rgb(243, 120, 141);
    // -webkit-text-stroke: 3px white;
    opacity: 0;
    animation-name: subtitles;
    animation-duration: 2s;
    animation-delay: 1s;
    animation-fill-mode: forwards;
  }
    @keyframes subtitles {
    	100%{
        top:13vmax;
        opacity: 1;
        }
    	0%{
        top:30vmax;
        opacity: 0;
      }
  }

  .flower{
    position: absolute;
    top: 300px;
    left: 300px;
    width: 50px;
    height: 50px;
    
    background-color: black;
  }


}

</style>