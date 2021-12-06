<template>
    <div>
        <div v-if="canLogin" >
            <Link v-if="$page.props.user" :href="route('Home')" class="text-sm text-gray-700 underline">
                Home
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 underline">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Register
                </Link>
            </template>
        </div>
    </div>
</template>

<style scoped>

</style>

<script>
    import { defineComponent } from 'vue'
    import {  Link } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            Link
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,

        }
    })
</script>
