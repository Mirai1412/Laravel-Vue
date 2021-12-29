<template>
    <div class="treebox">
        <div class="xbox" id="box1">
            <h2>box1</h2>
        </div>
        <div class="xbox"  id="box2">
            <h2>box2</h2>
        </div>
        <div class="xbox"  id="box3">
            <h2>box3</h2>
        </div>
    </div>
</template>
<script>
export default {

}
</script>

<style lang="scss">
.treebox{
    width: 100%;
    height: 90%;
    display: flex;
    justify-content: center;

.xbox{
    width: 16%;
    height: 80%;
    margin-top: 8rem;
    // -webkit-transform: skew(15deg);

    border: 1px solid black;

    &:hover{
        color: white;
        background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%);
            }
    }

    #box1{
            background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
    }
    #box2{

            background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
        &:active{
        transform: scale(0.5) translate(-50%, -50%);
        }
    }

    #box3{
            background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
    }

}

</style>