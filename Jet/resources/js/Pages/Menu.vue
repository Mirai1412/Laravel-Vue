<template>
<div>
    <Top/>
    <div class="sagjyt">
    <div v-for="tea in teas.data" :key="tea.id" >
          <div class="meihbkx2" style="height: 400px; width: 185px;">
            <img :src="tea.image" alt="image" class="hhitndf"
            style="border: 0.5px solid gray; ">
              <p style="font-size:2rem">{{tea.name}}</p>
              <p >{{tea.text}}</p>
              <p >{{tea.price}}원</p>
              <button @click="show(tea)"
              style="bottom: 0; left:38px">상세보기</button>
          </div>
    </div>

  </div>

  <pagination class="px-4 py-4" :links="teas.links" />
    <Bottom/>
    <Control/>
</div>
</template>
<script>
import Top from "./TB/Top.vue";
import Bottom from "./TB/Bottom.vue";
import Control from "./TB/Control.vue";
import Pagination from '@/Jetstream/Pagination.vue'


export default {
      props:['teas','user'],
      components: {
        Pagination,
        Top,
        Bottom,
        Control,

    },
    methods: {
      show: function(teas){
          this.$inertia.get('/show/' + teas.id);
      }
    }

};
</script>
<style lang="scss">
.sagjyt{
  justify-content: center;
  height: 500px;
  font-family: 'Nanum Pen Script', cursive;
  display: flex;
        .meihbkx2{
            width: 185px;
            margin: 50px 15px 0 15px;
            border: 2px solid black;
            display: flex;
            flex-wrap: wrap;
            border-radius: 15px;
            justify-content: center;
            padding: 15px;
            p{
              text-align: center;
              width: 140px;
              height: 60px;
              padding: 10px;
              margin: 0;
              font-size: 1.2rem;
            }
            button{

              font-size: 1.5rem;
            }
            .hhitndf{
              width: 150px;
              height: 150px;
              border-radius: 150px;

            }
        }

}
</style>
