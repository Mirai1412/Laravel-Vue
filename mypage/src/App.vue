<template>
  <v-app>
    <v-main>
    <div id="mainbox">

      <h1 id="titles"><span>Portfolio to Mirai</span></h1>
      <h1 id="subtitles"><span>- Yeungjin College -</span></h1>

      <div id="flower1">
        <font-awesome-icon :icon="['fas', 'leaf']" id="leaf1"/>
      </div>

      <div id="flower2">
        <font-awesome-icon :icon="['fas', 'leaf']" id="leaf2"/>
      </div>

      <div id="flower3">
        <font-awesome-icon :icon="['fas', 'leaf']" id="leaf3"/>
      </div>

      <div id="flower4">
        <font-awesome-icon :icon="['fas', 'leaf']" id="leaf4"/>
      </div>

      <div id="flower5">
        <font-awesome-icon :icon="['fas', 'leaf']" id="leaf5"/>
      </div>

      <div id="flower6">
        <font-awesome-icon :icon="['fas', 'leaf']" id="leaf6"/>
      </div>

    <div id="boxs">
      
      <div id="linkbox">
        <button v-on:click="aboutbutton">
        <font-awesome-icon :icon="['fas', 'handshake']" id="mylink"/>
        <h1>About Me</h1>
          </button>
      </div>

      <div id="skillbox">
        <button v-on:click="aboutbutton">
        <font-awesome-icon :icon="['fas', 'tools']" id="tools"/>
        <h1>Skill</h1>
          </button>
      </div>

      <div id="projectbox">
        <button v-on:click="aboutbutton">
        <font-awesome-icon :icon="['fas', 'book-reader']" id="books"/>
        <h1>Project</h1>
        </button>
      </div>
      
    </div>


     
    </div>
    </v-main>
  </v-app>
</template>

<script>

export default {
  name: 'App',
  components: {

  },
  methods:{
    aboutbutton:function(){
      this.$swal({
        showCancelButton: true,
        
      }
      );
    }
  }


};
</script>
<style lang="scss">
@import '@/assets/scss/flower.scss';
@import '@/assets/scss/main.scss';
@import '@/assets/scss/boxs.scss';
@import '@/assets/scss/sweet.scss';

body{
  margin: 0 auto;
  overflow: hidden;
}

</style>