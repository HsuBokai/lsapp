require('./bootstrap');
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import IconsPlugin from 'bootstrap-vue'

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

var app = new Vue({
	el: "#app",
	data: {
		message: "Hwllo Vue!"
	}
})
