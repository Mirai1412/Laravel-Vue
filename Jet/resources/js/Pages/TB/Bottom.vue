<template>
  <div id="buttompage">
    <!-- <img src="/img/q4.png" class="bti1"> -->
    <div class="buttomul">
      <ul>
        <li><a href="/text2">이용약관</a></li>
        <li><a href="/text3">고객센터</a></li>
        <li><a href="/text4">FAQ</a></li>
        <li><a href="/text5">개인정보처리방침</a></li>
      </ul>
    </div>

    <div class="buttomt">
      <div class="buttomt2">
      <h1>© 2021 Laravel Personal Project.</h1>
      <p>A cup of warm coffee in your heart</p>
      </div>
    </div>
    <img src="/img/b54.png"  class="bottomimg1">
    <img src="/img/b53.png"  class="bottomimg2">
  </div>

</template>

<script>
export default {
    setup() {

    }
}
</script>

<style lang="scss">
#buttompage{
  width: 1386px;
  min-width:1386px;
  color: white;
  height: 100px;
  margin: 0 auto;
  border-top:3px solid black;
  margin-top: 50px;
  position: relative;
  padding-top: 50px;


.bottomimg1{
    position: absolute;
    top: -669px;
    width: 40%;
    right: -75px;

}
.bottomimg2{
    position: absolute;
    top: -615px;
    width: 30%;
    left:  -100px;

}
}
.buttomt{
  background-color: black;
  display: flex;
  height: 100px;
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
        color: red;
    }
  }
}
.bti1{
  width: 500px;
  position: absolute;
  top: -370px;
  left: -85px;
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
