<template>
  <div id="buttompage">
<h3>d</h3>
  </div>
</template>

<script>
export default {
  name: 'buttom',
}
</script>
<style lang="scss">
#buttompage{
  width: 100%;
  color: white;
  height: 100px;
  margin: 0 auto;
  border-top:3px solid black;
  margin-top: 50px;
  position: relative;
  padding-top: 50px;
}
.buttomt{
  background-color: black;
  display: flex;
  height: 73px;
  justify-content: center;
  font-family: 'Nanum Pen Script', cursive;
  font-size: 1.5rem;
  padding-top: 26px;
  .buttomt2{
      h1{
        font-size: 1.0em;
        margin: 0;
      }
      p{
        font-size: 0.7em;
        text-align: center;
        margin: 0;
      }
  }
}
.buttomul{
  height:  50px;
  color: black;
  font-family: 'Nanum Pen Script', cursive;
  font-size: 1.5rem;
  width: 100%;
  display: flex;
  justify-content: center;
  position: absolute;
  top: 0;
  ul{
    margin: 0;
    list-style: none;
    padding: 0;
  }
  li{
    display: inline-block;
    margin: 0 20px;
    height: 49px;
    line-height: 49px;
      &:hover{
      border-bottom: 5px solid red;
    }
  }
}
.bti1{
  width: 500px;
  position: absolute;
  top: -370px;
  z-index: 1;
}
.bti2{
  width: 350px;
  position: absolute;
  top: -327px;
  z-index: 1;
  right: 0;
}
</style>
