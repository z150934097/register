import Vue from 'vue'
import App from './App'
import VueResource from 'vue-resource-master'
import VueRouter from 'vue-router-dev'

Vue.use(VueResource)
Vue.use(VueRouter)
/* eslint-disable no-new */
new Vue({
  el: 'body',
  components: { App }
})
