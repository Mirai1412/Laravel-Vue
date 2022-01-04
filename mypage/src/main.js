import Vue from 'vue'
import App from './App.vue'
import vuetify from './plugins/vuetify'
import '@/assets/scss/flower.scss';
//fort-awesome
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { faLeaf } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faFontAwesome } from '@fortawesome/free-brands-svg-icons'

Vue.config.productionTip = false

library.add(faUserSecret, faFontAwesome, faLeaf)

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.config.productionTip = false

new Vue({
  vuetify,
  render: h => h(App)
}).$mount('#app')
