<template>
  <v-app>
    <v-main id="app">
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
import About from './components/About.vue';

export default {
  name: 'App',
  components: {
    About
  },
  
  methods:{
    aboutbutton:function(){
      this.$swal({
        title:"About Me",
        showConfirmButton: false,
        showCloseButton: true,
        html:
        '<div class="aboutbox">'+
          '<div class="imgnamebox">'+
            '<img src="./img/te.png" class="myimg">'+
            '<h1  class="hname">임채환</h1>'+
            '<p class="ename">Lim ChaeHwan</p>'+
          '</div>'+
            '<div class="mylinkbox">'+
            '<div class="about1"><h1 class="hschool">출신학교</h1><br><p class="pschool">영진전문대학교<br>컴퓨터정보계열</p></div>'+
            '<div class="about1"><h1  class="htel">연락처</h1><br><p class="ptel">Tel : 010-9115-2813></p></div>'+
            '<div class="about1"><h1  class="hemail">이메일</h1><br><p class="pemail">Email : kkas0807@naver.com</p></div>'+
            '<div class="about1"><h1  class="hgit">깃 허브</h1><br><a href="https://github.com/Mirai1412" class="pgit">github.com/Mirai1412</a></div>'+
            '<div class="about1"><h1  class="hinstar">인스타</h1><br><a href="https://github.com/Mirai1412" class="pgit">github.com/Mirai1412</a></div>'+
            '<div class="about1"><h1  class="hday">생년월일</h1><br><p class="pday">1999.08.07</p></div>'+
          '</div>'+
        '</div>'
        ,
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
        html:
        '<div id="line2"></div>'
        +
        '<div id="projectbox1"><div class="puls1"><div class="pulsy"></div><div class="pulsx"></div></div></div>'
        +
        '<div id="projectbox2"><div class="puls2"><div class="pulsy"></div><div class="pulsx"></div></div></div>'
        ,
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