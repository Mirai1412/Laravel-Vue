<template>
  <v-app>
    <v-main>
    <div id="mainbox">

      <h1 id="titles">Portfolio to Mirai</h1>
      <h1 id="subtitles">Yeungjin College</h1>

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

    </div>
    </v-main>
  </v-app>
</template>

<script>

export default {
  name: 'App',

  components: {

  },

};
</script>
<style lang="scss">
@import '@/assets/scss/flower.scss';
@import '@/assets/scss/main.scss';

body{
  margin: 0 auto;
  overflow: hidden;
}

</style>