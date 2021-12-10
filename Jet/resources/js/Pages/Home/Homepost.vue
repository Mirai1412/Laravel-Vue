<template>
        <div class="homepost">
            <div class="instar">
                <img src="/img/instart.jpg" class="prisd">
                <p style="top:20px; left:200px;font-size: 3rem;">Mirai_0807</p>
                <p style="top:80px; left:202px; font-size: 2rem;" >kkmm0807@naver.com</p>
                <p style="top:170px; right:500px; font-size: 2rem;">주문내역<br>5</p>
                <p style="top:170px; right:340px; font-size: 2rem;">배송 상태<br>배송중</p>
                <p style="top:170px; right:210px; font-size: 2rem;">주문 조회<br>조회하기</p>
                <form @submit.prevent="logout" style="position: absolute;
                top:111px; left:320px; width: 300px;">
                    <jet-dropdown-link as="button">
                        <p style="font-size: 1.3rem;border : 1px solid black; padding: 0 20px;" class="asdse">로그아웃</p>
                    </jet-dropdown-link>
                </form>
                <button class="prigbe">
                    <a href="route('profile.show')">
                        장바구니
                    </a>
                </button>
            </div>

            <img src="/img/t4.png" class="asdds">

        </div>
</template>
<script>
    import { defineComponent } from 'vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'

    export default defineComponent({
        components: {
                   JetDropdownLink

        },
        props: {
            canLogin: Boolean,

        },
        methods: {
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
<style lang="scss">
.homepost{
    font-family: 'Nanum Pen Script', cursive;
    width: 100%;
    padding: 50px;
    padding-top: 100px;
    margin-top: 0px;
    height: 350px;

    position: relative;
    .prigbe{
        position: absolute;
        top:128px;
        left:200px;
        border: 1px solid black;
        width: 100px;
        font-size: 1.3rem;
        padding: 0 ;
        &:hover{
            background-color: black;
            color: white;
        }
    }
    .postimg1{
        position: absolute;
        top: 0;
        right: 120px;
    }
        .asdds{
            width: 600px;
            height: 400px;
            position: absolute;
            top: 50px;
            left: 80px;
            z-index: 1;
        }
    .instar{
        z-index: 8;
        background-color: white;
        position: relative;
        width: 780px;
        height: 300px;
        margin-left: 620px;
        border: 3px solid black;
        border-radius: 15px;

        .prisd{
            width: 150px;
            height: 150px;
            margin: 20px;
            border-radius: 100%;
            border: 2px solid rgb(165, 159, 159);
        }

        P{
            text-align: center;
            position: absolute;
            font-size: 2rem;
        }
        .asdse{
            text-align: center;
            position: absolute;
            font-size: 2rem;
            &:hover{
                background-color: black;
                color: white;
            }
        }

    }
}
</style>
