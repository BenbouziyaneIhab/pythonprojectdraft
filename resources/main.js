let Vue = require('vue')
import ListColid from './components/ListColid.vue'

const vue = new Vue({
	el : "#app",
	data:{
		tata : '',
	},
	components:{
		'list-colid' : ListColid
	}
});