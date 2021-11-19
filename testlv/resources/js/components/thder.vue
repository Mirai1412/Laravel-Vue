<template>
  <div class="headerpage">
<h1>sd</h1>
  </div>
</template>
<script>
export default {
  name: 'thder',
}
</script>

<style lang="scss">
@import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);
.headerpage{
  width: 100%;
  margin: 0 auto;
  position: relative;
  .hi1{
    position: absolute;
    right: 0px;
    width: 600px;
    z-index: 3;
  }
  .hi2{
    position: absolute;
    left: -70px;
    top: -20px;
    z-index: 10;
    width: 600px;
  }
}
.rl{
    color: black;
    text-decoration: none;
  }
.headerl{
  height: 50px;
  position: absolute;
  left:  4.5%;
  z-index: 1;
  ul{

    margin: 0;
    padding: 0;

  }
  li{
    display: inline-block;
    list-style: none;
    margin: 15px 10px;
    font-family: 'Nanum Pen Script', cursive;
    font-size: 1.3em;
  }
  li:hover{
    color: red;
  }
}
.headerserch{
  z-index: 3;
  height: 25px;
  top: 15px;
  position: absolute;
  left: 5%;
  vertical-align: text-bottom;
  button{
    font-family: 'Nanum Pen Script', cursive;
    font-size: 1.2rem;
    position: absolute;
    top: 1px;
    width: 70px;
    height: 25px;
    padding: 1px;
    margin: 0px 5px;
    background: white;
    border: 1px solid black;
    &:hover{
      color: red;
      background: black;
    }
  }

  input{
    height: 20px;
  }
}
.headert{
  border-bottom:3px solid rgb(209, 209, 209);
  width: 90%;
  height: 150px;
  margin: 0 auto;
  padding-top: 40px;
  display: flex;
  justify-content: center;
  position: relative;
  z-index: 1;
    .dag{
      position: absolute;
    }
}
.headerul{
  width: 90%;
  margin: 0 auto;
  border-bottom:3px solid rgb(209, 209, 209);
  display: flex;
  height: 47px;
  justify-content: center;
  position: relative;
  ul{
      margin: 0;
      padding: 0;
      position: absolute;
  }
  li{
      font-family: 'Nanum Pen Script', cursive;
      font-size: 1.5em;
      display: inline-block;
      margin: 0 20px;
      padding: 5px 0;
      height: 37px;
  }
  li:hover{
      border-bottom:2px solid black;
  }
}
</style>
