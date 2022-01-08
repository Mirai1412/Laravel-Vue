<template>
  <v-app>
    <v-main>
    <div id="mainbox">
      <div id="blackbox"></div>
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
        <button v-on:click="skillbutton">
        <font-awesome-icon :icon="['fas', 'tools']" id="tools"/>
        <h1>Skill</h1>
          </button>
      </div>

      <div id="projectbox">
        <button v-on:click="projectbox">
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
        title:"About Me",
        showConfirmButton: false,
        showCloseButton: true,
        customClass: {
          container: "aboutbuttonid",
        },
      }
      );
    },
    skillbutton:function(){
      this.$swal({
        title:"My Skill",
        showConfirmButton: false,
         showCloseButton: true,
        html:
        '<p id="front">Front-end</p>'+
        '<div id="line1"></div>'+
        '<img src="./img/logo/vue.png" class="vue">'+
        '<img src="./img/logo/HCJ.png" class="html">'+
        '<img src="./img/logo/java.png" class="java">'+
        '<img src="./img/logo/php.png" class="php">'+
        '<img src="./img/logo/scss.png" class="scss">'+
        '<img src="./img/logo/spl.png" class="spl">'+                      
        '<p id="back">Back-end</p>',
        customClass: {
          container: "skillbuttonid",
        },
      }
      );
    },
    projectbox:function(){
      this.$swal({
        title:"My ProJect",
        showConfirmButton: false,
        showCloseButton: true,
        customClass: {
          container: "projectboxid",
        },
      }
      );
    },
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