<template>
  <div>
    <Top/>
    <div style="" class="asddsdsc">
        <h1 style="">오시는 길</h1>
            <div class="kmap" ref="map"></div>
                <br>
        <h1 style=" font-size: 2rem;">
            영진전문대 청문관 2층
            <br>
            Tel : 053-321-8296
           </h1>
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
      level: 3 //지도의 레벨(확대, 축소 정도)
    };

    const mapInstance = new kakao.maps.Map(container, options);
    console.log(mapInstance);

    var markerPosition  = new kakao.maps.LatLng(35.8958005512751, 128.62238368250738);

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(mapInstance)

  },
}
</script>

<style>
  .kmap{
    width: 50%;
    margin: 0 auto;
    height: 480px;
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
