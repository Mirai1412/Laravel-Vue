<template>
  <div class="menupage">
      <div class="menubox">
          <div class="menu1">
               <img src="/img/아메리카노.png">
                <!-- <img src="@/views/imges/sk/q5.png" class="bakf"> -->
               <h1>아메리카노</h1>
              <p>상쾌한 아침에는 한잔의 아메리카노!
                  <br>
              가격 : 1500원
                  <br>
              Ice / Hot 선택가능
                 <br>
              샷추가 가능
              </p>
              <button>주문</button>
          </div>
      </div>
  </div>
</template>
<script>
export default {
    name:'menupost'
};
</script>
<style lang="scss">
.menupage{
    min-height: 420px;
    width: 90%;
    margin: 0 auto;
    height: 100%;
    font-family: 'Nanum Pen Script', cursive;
    .menubox{
        width: 1105.910px;
        margin: 0 auto;
        height: 100%;
        margin-top: 50px;
        display: flex;
        flex-wrap: wrap;

        .menu1{
        z-index: 8;
        border: 1px solid rgb(228, 228, 228);
        width: 220px;
        height: 400px;
        margin: 0 27.238px 20px 27.238px;
        position: relative;
        background-color: white;
        .bakf{
            position: absolute;
            left: 0;
            bottom: 0;
            height: 300px;
        }
        img{
            width: 100%;
            height: 150px;
        }
        h1{
            text-align: center;
            margin-bottom: 0;
        }
        p{
            padding: 10px;
            margin: 0;
            font-size: 1.2rem;
            height: 150px;
        }
        button {
            font-family: 'Nanum Pen Script', cursive;
            background: #ffffff;
            color: rgb(0, 0, 0);
            border: none;
            // border-left: 3px solid black;
            // border-right: 3px solid black;
            position: relative;
            height: 60px;
            font-size: 1.6em;
            padding: 0 2em;
            cursor: pointer;
            width: 80%;
            height: 30px;
            margin: 0 10%;
            transition: 800ms ease all;
            outline: none;
        }
        button:hover {
            background: #fff;
            color: red;
        }
        button:after,
        button:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            height: 2px;
            width: 0;
            background: #000000;
            transition: 400ms ease all;
        }
        button:after {
            right: inherit;
            top: inherit;
            left: 0;
            bottom: 0;
        }
        button:hover:after,
        button:hover:before {
            width: 100%;
            transition: 800ms ease all;
        }
        }
    }
}
</style>
