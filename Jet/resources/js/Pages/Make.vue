<template>
<div>
    <Top/>
  <div class="makepage">
        <form  @submit.prevent="addtea"  enctype="multipart/form-data">
            <input type="hidden" name="_token" v-bind:value="csrf">
            <h1 style="text-align: center; font-size:3rem">메뉴 작성</h1>


        <div>
        <input type="text"  id="name" placeholder="Tea Name" v-model="this.form.name"  >
        </div>
            <div v-if="errors.name">{{ errors.name }}</div>

        <div >
        <input type="text"  id="text" placeholder="Explanation" v-model="this.form.text"  >
        </div>
            <div v-if="errors.text">{{ errors.text }}</div>

        <div>
        <input type="text"  id="price" placeholder="Money" v-model="this.form.price"  >
        </div>
            <div v-if="errors.price">{{ errors.price }}</div>

        <div>
        <input type="text" id="type" placeholder="Type" v-model="this.form.type" >
        </div>
            <div v-if="errors.type">{{ errors.type }}</div>

        <div >
            <input type="file" id="image" @input="form.image = $event.target.files[0]" class="ashjrt"
            >
        </div>
            <div v-if="errors.image">{{ errors.image }}</div>


        <button type="submit" class="btn btn-primary font-bold text-xl mx-2 my-2"
        style="margin-left: 145px;">작성</button>
        <a href="/" class="btn btn-primary font-bold text-xl mx-2 my-2">메인으로</a>
        </form>

    </div>
      <Bottom/>
      <Control/>
</div>
</template>
<script>
import Top from "./TB/Top.vue";
import Bottom from "./TB/Bottom.vue";
import Control from "./TB/Control.vue";
import { useForm } from '@inertiajs/inertia-vue3'

export default {
      props: [
        'errors',
        'tea',
        'csrf',

      ],
      setup () {
        const form = useForm({
        image: null,
        name: '',
        price: '',
        text: '',
        type : '',
      })
      function addtea() {
              console.log(this.form);
              form.post('/store', this.form)
          }
      return { form, addtea }
      },

      components: {
        Top,
        Bottom,
        Control,

    },
};
</script>
<style lang="scss">
.makepage{
    font-family: 'Nanum Pen Script', cursive;
    font-size: 1.5rem;
    width: 500px;
    margin:  0 auto;
    height: 550px;
    margin-top: 20px;
}
    button {
       background-color: none;

    }
    input{
      width: 500px;
      margin: 10px 0;
    }
</style>

