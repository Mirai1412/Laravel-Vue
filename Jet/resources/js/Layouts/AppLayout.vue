<template>
<div>
        <!-- <jet-dropdown-link :href="route('profile.show')">
            Profile
        </jet-dropdown-link>

        <jet-dropdown-link :href="route('api-tokens.index')" v-if="$page.props.jetstream.hasApiFeatures">
            API Tokens
        </jet-dropdown-link> -->

        <!-- Authentication -->
        <form @submit.prevent="logout">
            <jet-dropdown-link as="button">
                Log Out
            </jet-dropdown-link>
        </form>

</div>
</template>

<script>
    import { defineComponent } from 'vue'

    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
        import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        props: {
            title: String,
        },
        components: {

            JetDropdownLink,
            Link

        },
        // data() {
        //     return {
        //         showingNavigationDropdown: false,
        //     }
        // },
        methods: {
            // switchToTeam(team) {
            //     this.$inertia.put(route('current-team.update'), {
            //         'team_id': team.id
            //     }, {
            //         preserveState: false
            //     })
            // },
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
