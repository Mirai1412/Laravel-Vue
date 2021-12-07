<template>
    <div>
        <button type="submit"  v-if="as == 'button'">
            <slot></slot>
        </button>

        <a :href="href"  v-else-if="as =='a'">
            <slot></slot>
        </a>

        <Link :href="href"  v-else>
            <slot></slot>
        </Link>
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
        props: ['href', 'as']
    })
</script>
<style lang="scss">
button{
    width: 100px;
}
</style>
