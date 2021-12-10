<template>
        <div class="maincoffee">
            <div class="coffeehader">
                <img src="/img/f1.png" >
            <div class="line"/>
                <h1>인기 메뉴</h1>
            <div class="line2"/>
                <p>저의 '매화'는 품질과 혁신에 최선을 다하여 '매화'를 방문하시는 모든 고객님께
                    최고의 차 경험을 제공함으로
                    <br>
                    누구나 마음껏 차를 즐길 수 있는 차 대중화의 선도적 역할을 수행하겠습니다.
                </p>
            </div>
            <div class="coffeechose">
                <div class="homecoffee">
                    <img src="/img/instart.jpg" class="coffeeimg">
                        <h1>녹차</h1>
                            <p style="left: 170px; top: 60px;">따뜻한 한잔으로 가벼운 하루를
                            </p>
                            <p style="left: 170px; top: 100px;">
                            5200원
                            </p>
                </div>
            </div>
            <div class="coffeechose">
                <div class="homecoffee">
                    <img src="/img/instart.jpg" class="coffeeimg">
                        <h1>홍차</h1>
                            <p style="left: 170px; top: 60px;">영국 신사의 깊은 맛
                            </p>
                            <p style="left: 170px; top: 100px;">
                            8200원
                            </p>
                </div>
            </div>
            <div class="coffeechose">
                <div class="homecoffee">
                    <img src="/img/instart.jpg" class="coffeeimg">
                        <h1>진달래차</h1>
                            <p style="left: 170px; top: 60px;">끓는 물에 3분!
                            </p>
                            <p style="left: 170px; top: 100px;">
                            1200원
                            </p>
                </div>
            </div>
          <!-- <div id="app">
              <h3>kakao map(center, level)</h3>
              <div class="map-wrapper" style="width:100%, height:600px" ref="kakaomap"></div>
          </div> -->

                <img src="/img/q5.png" class="tree" >
                <img src="/img/a4.png" class="tree2" >
        </div>

</template>
<script>
export default {
    data() {
        return {
            title : '녹차',
            content : '쓰다',
            weiter : '4500원',
            mapInstance: null
        };
    },
};
</script>
<style lang="scss">
  .kmap{
    width: 100%;
    height: 600px;
  }
.maincoffee {
    width: 1110px;
    margin: 0  213px;
    height: 700px;
    margin-bottom: 20px;
    position: relative;
    .tree{
        left: 0px;
        width: 280px;
        position: absolute;
        z-index: 1;
        top: 260px;
    }
    .tree2{
        right: 110px;
        width: 455px;
        position: absolute;
        z-index: 1;
        top: 120px;
    }
    .coffeehader {
        width: 1110px;
        height: 170px;
        position: relative;
        display: flex;
        flex-wrap: wrap;
        img{
            left: 275px;
            width: 600px;
            height: 300px;
            position: absolute;
            z-index: 0;
            top: -40px;
        }
        h1 {
            z-index: 5;
            font-family: 'Nanum Pen Script', cursive;
            font-size: 3em;
            margin: 0;
            height: 85px;
            line-height: 100px;
            text-align: center;
            width: 100%;
            justify-content: center;
        }
        p {
             z-index: 5;
            font-family: 'Nanum Pen Script', cursive;
            font-size: 1.5em;
            width: 100%;
            text-align: center;
            margin: 0;
            color: rgb(139, 134, 134);
        }
        .line {
            top: 50px;
            right: 300px;
            position: absolute;
            width: 180px;
            border-bottom: 2px solid black;
        }
        .line2 {
            top: 50px;
            left: 300px;
            position: absolute;
            width: 180px;
            border-bottom: 2px solid black;
        }
    }
}
    .coffeechose{
        display: flex;
        flex-wrap: wrap;
        margin-top: 20px;
        width: 1110px;
        .homecoffee{
            margin: 0 auto;
            font-family: 'Nanum Pen Script', cursive;
            font-size: 1.5em;
            z-index: 6;
            width: 60%;
            height: 150px;
            border-radius: 20px;
            border: 1px solid rgb(175, 175, 175);
            position: relative;
                .coffeeimg{
                    height: 100%;
                    border-radius: 20px;
                }
                h1{
                    top: 15px;
                    left: 170px;
                    position: absolute;
                    margin: 0;
                    font-size: 2rem;
                }
                p{
                    position: absolute;
                    margin: 0;
                }
        }
    }
</style>
