<template>
        <div class="homem">
            <div class="hometitle">
                <img src="/img/l12.png">
                <h1>"NO matter what is happening in your life, you always offer tea"</h1>
                <p>- Clemantine Wamariya -</p>
            </div>
        </div>
</template>
<script>
export default {

};
</script>
<style lang="scss">

.homem {
    width: 1382px;
    // border-bottom: 3px solid rgb(209, 209, 209);
    border-bottom: 3px solid black;
    border-top: 3px solid black;
    height: 200px;
    margin: 0 auto;
    margin-top: 50px;
    margin-bottom: 50px;
    display: flex;
    justify-content: center;
    padding: 30px 0;
    position: relative;
    background-color: white;
    left: -138px;
    .hometitle {
        height: 140px;
        display: flex;
        flex-wrap: wrap;
        width: 1180px;
    h1 {
            width: 100%;
            display: flex;
            justify-content: center;
            font-family: 'Nanum Pen Script', cursive;
            font-size: 3em;
            margin: 0;
        }
    p {
            font-family: 'Nanum Pen Script', cursive;
            font-size: 2em;
            color: rgb(109, 109, 109);
            margin: 0 auto;
        }
    img{
            margin: 0 auto;
        }
    }
}

</style>
