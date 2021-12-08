<template>
  <div id="headerpage">
        <img src="/img/q1.png" class="hi1">
        <img src="/img/q3.png" class="hi2">
        <div class="headert">
            <a href="/" ><img src="/img/logos.png" class="dag2"></a>
        </div>
        <div class="headerul">
            <ul>
                <li><a href="/" class="rl">메인</a></li>
                <li><a href="/menu" class="rl">메뉴</a></li>
                <li><a href="/coffee" class="rl">주문하기</a></li>
                <li><a href="/basket" class="rl">장바구니</a></li>
                <li><a href="/text1" class="rl">문의하기</a></li>
            </ul>
        </div>

        <div class="headerul2">
                <div v-if="canLogin == false">
                    <Link v-if="$page.props.user" :href="route('Make')">
                        <p>메뉴작성</p>
                    </Link>
                    <Link v-if="$page.props.user" :href="route('profile.show')">
                        <p>프로필</p>
                    </Link>
                    <template v-else>
                        <Link :href="route('login')" >
                        <p>로그인</p>
                        </Link>
                        <Link  :href="route('register')" >
                            <p>회원가입</p>
                        </Link>
                    </template>
                </div>
        </div>

  </div>

</template>

<script>
    import { defineComponent } from 'vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
            JetDropdownLink,
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
        },
        methods: {
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
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
      left: 576px;
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
  width: 460px;
  margin: 0 auto;
  border-bottom:3px solid rgb(0, 0, 0);
  display: flex;
  flex-wrap: wrap;
  height: 47px;
  justify-content: center;
  position: relative;

    p{
      font-family: 'Nanum Pen Script', cursive;
      font-size: 1.5em;
      display: inline-block;
      margin: 0 20px;
      padding: 5px 0;
      height: 47px;
      line-height: 41px;
      &:hover{
          color: red;
      }
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
