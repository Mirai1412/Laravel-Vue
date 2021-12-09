<template>
  <div>
    <Top/>
    <div style="" class="asddsdsc">
        <h1 style="">오시는 길</h1>
            <div class="kmap" ref="map"></div>
    </div>

       <Bottom/>
    <Control/>
  </div>

</template>

<script>
import Top from "../TB/Top.vue";
import Bottom from "../TB/Bottom.vue";
import Control from "../TB/Control.vue";

export default {
        components: {
        Top,
        Bottom,
        Control,

    },
  mounted(){
    let kakao = window.kakao;
    console.log(this.$refs.map);

    var container = this.$refs.map; //지도를 담을 영역의 DOM 레퍼런스
    var options = { //지도를 생성할 때 필요한 기본 옵션
      center: new kakao.maps.LatLng(35.8958005512751, 128.62238368250738), //지도의 중심좌표.
      level: 5 //지도의 레벨(확대, 축소 정도)
    };

    kakao.maps.Map(container, options); //지도 생성 및 객체 리턴

    var markerPosition  = new kakao.maps.LatLng(5.8958005512751, 128.62238368250738);

    var marker = new kakao.maps.Marker({
    position: markerPosition
    });

    marker.setMap(map);

  }
}
</script>

<style>
  .kmap{
    width: 50%;
    margin: 0 auto;

    height: 500px;
    border: 2px solid black;
    border-radius: 15px;

  }
  h1{
          font-family: 'Nanum Pen Script', cursive;
      font-size: 4rem;
  }
  .asddsdsc{
    width: 80%;
    margin: 0 auto;
    text-align: center;
  }
</style>
