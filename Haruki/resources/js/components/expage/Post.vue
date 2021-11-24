<template>
<div class="test12">
  <form v-on:submit="submitForm">
    <div>
      <label for="name">name: </label>
      <input id="name" type="text"  v-model="name">
    </div>
    <div>
      <label for="text">text: </label>
      <input id="text" type="text"   v-model="text">
    </div>
    <button type="submit">create</button>
  </form>
</div>
</template>
<script>
export default {
    name:'post',
    data() {
        return {
            name: "",
            text: "",
        };
    },
    methods: { // 메서드 구현
    submitForm: function() {
      console.log(this.username, this.password);
    }
  }

}
</script>
<style lang="scss">
.test12{
    margin: 50px 0 0 430px;
}
</style>
