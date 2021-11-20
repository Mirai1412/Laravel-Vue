<template>
<div class="test12">
    <form>
    <div>
      <label for="name">메뉴이름</label>
      <input
        type="text"
        name="name"
        id="name"
        placeholder="Menu Name"
        v-model="name"
        required
      />
    </div>
    <div>
      <label for="text">메뉴설명</label>
      <input
        type="text"
        name="text"
        id="text"
        v-model="text"
        required
      />
    </div>
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
    methods: {
        postMenus() {
        const formData = new FormData();
        formData.append("name", this.name);
        formData.append("text", this.text);
        axios
        .post("/store", formData)
        .then((response) => {
          this.name = "";
          this.text = "";
          alert('작성완료');
        }).then((result) => {
            this.$parent.getMenu();
          })
        .catch((error) =>{
            console.log(error);
        });
    },
}
}
</script>

<style lang="scss">
.test12{
    margin: 50px 0 0 430px;
}
</style>
