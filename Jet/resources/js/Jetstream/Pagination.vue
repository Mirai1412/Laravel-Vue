<template>
    <div v-if="links.length > 3">
        <div class="flex flex-wrap -mb-1" style="margin: 0 auto;width: 50%; justify-content: center;">
            <template v-for="(link, p) in links" :key="p" >
                <div v-if="link.url === null" class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-black-100 border rounded"
                    v-html="link.label" />
                <inertia-link v-else
                    class="mr-1 mb-1 px-4 py-3 text-black-300 leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-black-500"
                    :class="{ 'bg-black-700 black-black-400': link.active }" :href="link.url" v-html="link.label" />
            </template>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            links: Array
        },
    }
</script>

