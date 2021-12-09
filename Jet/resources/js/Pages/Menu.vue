<template>
<div>
    <Top/>
      <div v-for="tea in teas" :key="tea.id" >
    <div class="menupage">
          <div class="meihbkx2" style="border: 1px solid black">
            <img :src="`/${tea.image}`" alt="image">
              <p>{{tea.image}}</p>
              <p>{{tea.name}}</p>
              <p>{{tea.type}}</p>
              <p>{{tea.price}}</p>
              <p>{{tea.text}}</p>
          </div>
      </div>
    </div>

    <Bottom/>
    <Control/>
</div>
</template>
<script>
import Top from "./TB/Top.vue";
import Bottom from "./TB/Bottom.vue";
import Control from "./TB/Control.vue";


export default {
       props:['teas'],
      components: {
        Top,
        Bottom,
        Control,

    },

};
</script>
<style lang="scss">
.menupage{
    min-height: 420px;
    width: 90%;
    margin: 0 auto;
    height: 100%;
    font-family: 'Nanum Pen Script', cursive;
    .menubox{
        width: 1105.910px;
        margin: 0 auto;
        height: 100%;
        margin-top: 50px;
        display: flex;
        flex-wrap: wrap;

        p{
            padding: 10px;
            margin: 0;
            font-size: 1.2rem;
            height: 150px;
        }

        }
    }

</style>
