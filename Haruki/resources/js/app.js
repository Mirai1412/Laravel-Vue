import VueRouter from 'vue-router';

require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('app-component', require('./components/AppComponent.vue').default);

Vue.use(VueRouter);
const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: () => import('./components/Home/Home.vue'),
        },
        {
            path: '/menu',
            name: 'menu',
            component: () => import('./components/expage/Menu.vue'),
        },
        {
            path: '/post',
            name: 'post',
            component: () => import('./components/expage/Post.vue'),
        }
    ]
});

const app = new Vue({
    el: '#app',
    router
});
