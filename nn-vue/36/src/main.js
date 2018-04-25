import Vue from 'vue'
import App from './App.vue'
import VueResource from 'vue-resource'

Vue.use(VueResource);

// Filters
Vue.filter('to-uppercase', function(value){
	return value.toUpperCase();
});

Vue.filter('snippet', function(value){
	return value.slice(0, 100) + '...';
});

Vue.directive('theme', {
	bind(el, binding, vnode) {
		if (binding.value == 'wide') {
			el.style.maxWidth = '1020px';
		} else if (binding.value = 'narrow') {
			el.style.maxWidth = '560px';
		}

		if(binding.arg == 'column') {
			el.style.background = '#ddd';
			el.style.padding = '20px';
		}
	}
	
});

new Vue({
  el: '#app',
  render: h => h(App)
})
