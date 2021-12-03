<template>
  <div id="headerpage">
    <img src="/img/q1.png" class="hi1">
    <img src="/img/q3.png" class="hi2">
    <!-- <div class="headerl">
        <ul>
          <li>로그인</li>
          <li>회원가입</li>
          <li><router-link to="/post" class="rl">메뉴작성</router-link></li>
        </ul>
    </div> -->
    <div class="headert">
        <img src="/img/logos.png" class="dag2">
    </div>
    <div class="headerul">
        <ul>
            <li><a href="/" class="rl">메인</a></li>
            <li><a href="/menu" class="rl">메뉴</a></li>
            <li><a href="/coffee" class="rl">주문하기</a></li>
            <li><a href="/basket" class="rl">장바구니</a></li>
            <li><a href="/question" class="rl">문의하기</a></li>
        </ul>
    </div>
    <div class="headerul2">
        <ul>
            <li><a href="/login" class="rl">로그인</a></li>
            <li><a href="/register" class="rl">회원가입</a></li>
            <li><a href="/post" class="rl">메뉴작성</a></li>
        </ul>
    </div>
  </div>

</template>

<script>
export default {
    setup() {

    }
}
</script>

<style lang="scss">
@import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);
#headerpage{
  width: 1536px;
  min-width:1536px;
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
    z-index: 3;
    width: 600px;
  }
}
.rl{
    color: black;
    text-decoration: none;
  }
// .headerl{
//   height: 50px;
//   position: absolute;
//   left:  4.5%;
//   ul{
//     margin: 0;
//     padding: 0;
//   }
//   li{
//     display: inline-block;
//     list-style: none;
//     margin: 15px 10px;
//     font-family: 'Nanum Pen Script', cursive;
//     font-size: 1.3em;
//     &:hover{
//         color: red;
//     }
//   }
//   li:hover{
//     color: red;
//   }
// }
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
  border-bottom:3px solid rgb(0, 0, 0);
  width: 90%;
  height: 150px;
  margin: 0 auto;
  padding-top: 40px;
  display: flex;
  justify-content: center;
  position: relative;
  z-index: 1;
    .dag2{
      position: absolute;
      top: 20px;
      height: 125px;
    }
}
.headerul{
  width: 90%;
  margin: 0 auto;
  border-bottom:3px solid rgb(0, 0, 0);
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
      height: 47px;
  }
  li:hover{
      border-bottom:2px solid red;
  }
  a{
    color: black;
    text-decoration: none;
    &:hover{
    color: red;
    }
  }
}
.headerul2{
  width: 30%;
  margin: 0 auto;
  border-bottom:3px solid rgb(0, 0, 0);
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
      height: 47px;
  }
  li:hover{
      border-bottom:2px solid red;
  }
  a{
    color: black;
    text-decoration: none;
    &:hover{
    color: red;
    }
  }
}
</style>
