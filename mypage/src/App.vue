<template>
  <v-app>
    <v-main>

    <div class="mainbox">


        <Tree/>

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
.mainbox{
  width: 100%;
  height: 100%;
  background-image: url("../public/img/bsdf.jpg");
  background-size: cover;
    
}


</style>