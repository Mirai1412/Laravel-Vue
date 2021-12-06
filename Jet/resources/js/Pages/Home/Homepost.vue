<template>
        <div class="homepost">
            <div class="instar">
                <img src="/img/instart.jpg">
                <p>mirai_0807</p>
                <p>kkmm0807@naver.com</p>
                <p>주문내역 5</p>
                <p>배송 상태</p>
                <p></p>
                <p>임채환<br>
                   1999.8.7</p>
                <button>프로필 편집</button>
            </div>

        </div>

</template>
<script>
export default {
    name:''
}
</script>
<style lang="scss">
.homepost{
    width: 100%;
    padding: 50px;
    margin-top: 0px;
    position: relative;
    .postimg1{
        position: absolute;
        top: 0;
        right:   0;
    }

    .instar{
        display: flex;
        flex-wrap: wrap;
        width: 1380px;
        height: 200px;
        margin: 0 auto;
        border: 3px solid black;

        img{
            width: 150px;
            height: 150px;
            margin: 20px;
            border-radius: 100%;
            border: 1px solid black;
        }
        button{
            border: 1px solid black;
            background-color: white;
        }
    }
}
</style>
