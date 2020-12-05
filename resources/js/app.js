require('./bootstrap');
window.Vue = require('vue');

var app = new Vue({
	el: "#app",
	data: {
		message: "Hwllo Vue!"
	}
})
