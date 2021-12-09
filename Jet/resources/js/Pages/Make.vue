<template>
<div>
    <Top/>
  <div class="makepage">
        <form  @submit.prevent="addtea"  enctype="multipart/form-data">
            <input type="hidden" name="_token" v-bind:value="csrf">
            <h1>메뉴 작성</h1>

        <div >
            <label for="image">이미지</label>
            <input type="file" id="image" @input="form.image = $event.target.files[0]">
        </div>
            <div v-if="errors.image">{{ errors.image }}</div>

        <div>
        <label for="name">이름 : </label>
        <input type="text"  id="name" placeholder="Name" v-model="this.form.name" style="width:30%" >
        </div>
            <div v-if="errors.name">{{ errors.name }}</div>

        <div >
        <label for="text">설명 : </label>
        <input type="text"  id="text" placeholder="text" v-model="this.form.text" style="width:30%" >
        </div>
            <div v-if="errors.text">{{ errors.text }}</div>

        <div>
        <label for="price">가격 : </label>
        <input type="text"  id="price" placeholder="'원'빼고 입력" v-model="this.form.price" style="width:30%" >
        </div>
            <div v-if="errors.price">{{ errors.price }}</div>

        <div>
        <label for="type">종류 : </label>
        <input type="text" id="type" placeholder="type" v-model="this.form.type" style="width:30%" >
        </div>
            <div v-if="errors.type">{{ errors.type }}</div>

        <button type="submit" class="btn btn-primary font-bold text-xl mx-2 my-2">작성</button>
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
    width: 500px;
    margin:  0 auto;
    height: 265px;
    margin-top: 75px;
}
    button:hover {
        color: #0077ff;
    }
</style>

