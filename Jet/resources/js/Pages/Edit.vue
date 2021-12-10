<template>
<div>
    <Top/>
  <div class="makepage">
        <form  @submit.prevent="save"  enctype="multipart/form-data">
            <input type="hidden" name="_token" v-bind:value="csrf">
            <h1 style="text-align: center; font-size:3rem">메뉴 수정</h1>

        <div>
        <input type="text"  id="name" placeholder="Tea Name"
        v-model="this.name2">
        </div>
            <div v-if="errors.name">{{ errors.name }}</div>

        <div >
        <input type="text"  id="text" placeholder="Explanation" v-model="text"  >
        </div>
            <div v-if="errors.text">{{ errors.text }}</div>

        <div>
        <input type="text"  id="price" placeholder="Money" v-model="price"  >
        </div>
            <div v-if="errors.price">{{ errors.price }}</div>

        <div>
        <input type="text" id="type" placeholder="Type" v-model="type" >
        </div>
            <div v-if="errors.type">{{ errors.type }}</div>
        <div >
            <input type="file" id="image"
            @input="form.image = $event.target.files[0]" class="ashjrt"
            >
        </div>
            <div v-if="errors.image">{{ errors.image }}</div>


        <button type="submit" class="btn btn-primary font-bold text-xl mx-2 my-2"
        style="margin-left: 145px;" >작성</button>
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
      data(){
        return {
          name2:this.$page.props.tea.name,
          type:this.tea.type,
          text:this.tea.text,
          image:this.tea.image,
          price:this.tea.price,
        }
      },
      props: [
        'errors',
        'tea',
        'csrf',

      ],
      mounted() {
        console.log(this.$page.props)
        // this.tea = this.$page.props.tea
      },
       methods: {
          save: function () {
            // 메소드 안에서 사용하는 `this` 는 Vue 인스턴스를 가리킵니다
            // const formdata = new FormData();
            // formdata.append('image',this.tea.image)
            // formdata.append('name2',this.tea.name)
            // formdata.append('price',this.tea.price)
            // formdata.append('text',this.tea.text)
            // formdata.append('type',this.tea.type)
            axios.put("/teas/"+this.tea.id, {
              'image': this.tea.image,
              'name2': this.tea.name,
              'price': this.tea.price,
              'text': this.tea.text,
              'type': this.tea.type,
            })
              .then(response=>{
                alert(response.data)
              })
              .catch((err) => {
                console.error(err)
              })

            }
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

