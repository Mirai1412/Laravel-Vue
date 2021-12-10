<template>
<div>
    <Top/>
    <div class="jyhtgvv">

          <div style="ajyjggb">
            <img :src="`/${teas.image}`" alt="image" style="width: 300px; height: 300px;
            border: 1px solid black; border-radius:300px; margin: 30px;">
              <p style=" font-size:3rem; text-align: center;">{{teas.name}}</p>
              <p style=" font-size:2rem; text-align: center;">{{teas.text}}</p>
              <p style=" font-size:2rem; text-align: center;">{{teas.price}}원</p>
              <div style="display:flex; justify-content: center;font-size:2rem;">
              <button class="mx-2" @click="destroy(teas)">Delete</button>
              <button class="mx-2" @click="edit(teas)">Update</button>
              </div>
          </div>

          <dialog-modal :show="isEnabled" >
            <template #title>

            </template>
            <template #content>
                <div class="mb-4" >
                      <input type="file" id="image"  @input="teas.image = $event.target.files[0]"
                      class="satjhtgrt">
                        <br>

                        <div>
                        <input type="text"  id="name" class="satjhtgrt" placeholder="Tea Name" v-model="teas.name">
                        </div>
                            <div v-if="errors.name">{{ errors.name }}</div>


                        <input type="text"  id="text"  class="satjhtgrt" placeholder="Tea text" v-model="teas.text">
                        <div class="text-red" v-if="errors.text">{{ errors.text }}</div>
                                           <br>

                        <input type="text"  id="price" class="satjhtgrt" placeholder="Tea price" v-model="teas.price">
                        <div class="text-red" v-if="errors.price">{{ errors.price }}</div>

                                           <br>
                        <input type="text"  id="type" class="satjhtgrt" placeholder="Tea type" v-model="teas.type">
                        <div class="text-red" v-if="errors.type">{{ errors.type }}</div>
                </div>
            </template>
            <template #footer>
                  <button class="mx-2" @click="update(teas)" style="font-color-black">Update</button>
            </template>
        </dialog-modal>

  </div>
      <Bottom/>
      <Control/>
</div>
</template>
<script>
import Top from "./TB/Top.vue";
import Bottom from "./TB/Bottom.vue";
import Control from "./TB/Control.vue";
import DialogModal from '@/Jetstream/DialogModal.vue'

export default {
      data() {
        return {
          isEnabled: false,
          isUpdatable: true,
        };
      },
      props:['teas',
      'errors'],
      components: {
        Top,
        Bottom,
        Control,
        DialogModal
    },
    methods: {
      destroy: function(teas) {
          teas._method = 'delete';
          this.$inertia.delete('/teas'+ '/' + teas.id)
      },
      edit: function(teas){
          this.isEnabled = true;
          this.isUpdatable = false;
          this.form = Object.assign({}, teas);
      },
      update: function(teas){
          this.$inertia.post('/teas/' + teas.id, teas);
          this.isUpdated = true;
          this.isEnabled = false;
      }
    }


};
</script>
<style lang="scss">
#content{
  height: 500px;
}
.jyhtgvv{
  width: 1200px;
  font-family: 'Nanum Pen Script', cursive;
  margin: 0 auto;
  height: 600px;
  display: flex;
  justify-content: center;
  position: relative;


}
.satjhtgrt{
  width: 500px;
  margin: 10px 0 10px 60px;
  font-family: 'Nanum Pen Script', cursive;
  font-size: 1.5rem;
}
</style>
