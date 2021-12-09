<template>
<div>
    <Top/>
    <div class="pasdbox">
            <!-- Page Content -->
            <main>
                <slot></slot>
            </main>
    </div>
    <Bottom/>
    <Control/>
</div>

</template>

<script>
    import Top from '@/Pages/TB/Top.vue'
    import Bottom from '@/Pages/TB/Bottom.vue'
    import Control from '@/Pages/TB/Control.vue'
    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        props: {
            title: String,
        },
        components: {
            Bottom,
            Control,
            Head,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Link,
            Top,
        },
        data() {
            return {
                showingNavigationDropdown: false,
            }
        },
        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
<style lang="scss">
.pasdbox{
    width: 1100px;
    margin: 0 auto;
    margin-top: 20px;
}
</style>
