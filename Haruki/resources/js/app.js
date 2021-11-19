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
        // {
        //     path: '/menu',
        //     name: 'task',
        //     component: () => import('./components/task/Task.vue'),
        // }
    ]
});

const app = new Vue({
    el: '#app',
    router
});
