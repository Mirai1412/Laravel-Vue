<template>
        <div class="homepost">
            <div class="instar">
                <img src="/img/instart.jpg">
                <p>mirai_0807</p>
                <button>프로필 편집</button>
                <p>주문내역 5</p>
                <p>주문내용</p>
                <p>주문내용</p>
                <p>임채환<br>
                   1999.8.7</p>
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
    width: 1110px;
    margin: 0 auto;
    margin-top: 20px;
    border: 1px solid black;
    .instar{
        width: 500px;
        height: 400px;
        border: 3px solid black;
        border-radius: 10%;
        img{
            width: 150px;
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
