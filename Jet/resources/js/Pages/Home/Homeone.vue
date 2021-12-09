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
                    <img src="/img/아메리카노.png" class="coffeeimg">
                        <h1>{{ title }}</h1>
                            <p>{{ content }}
                                <br>
                            {{ weiter }}
                            </p>
                        <h2>장바구니 -></h2>
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
    mounted(){

        var container = this.$refs.kakaomap; //지도를 담을 영역의 DOM 레퍼런스
        var options = { //지도를 생성할 때 필요한 기본 옵션
          center: new window.kakao.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
          level: 3 //지도의 레벨(확대, 축소 정도)
        };

        this.mapInstance = new window.kakao.maps.Map(container, options); //지도 생성 및 객체 리턴
        console.log(mapInstance);
    }
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
            width: 80%;
            height: 150px;
            border: 1px solid rgb(175, 175, 175);
            position: relative;
                .coffeeimg{
                    height: 100%;
                }
                h1{
                    top: 10px;
                    left: 15rem;
                    position: absolute;
                    margin: 0;
                }
                p{
                    top: 4.5rem;
                    left: 15rem;
                    position: absolute;
                    margin: 0;
                }
                h2{
                    top: 3.5rem;
                    right: 2rem;
                    position: absolute;
                    margin: 0;
                }
        }
    }
</style>
