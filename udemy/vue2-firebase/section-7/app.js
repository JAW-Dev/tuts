new Vue({
	el: '#app',
	data: {
		title: 'Becoming a Vue Ninja',
		name: 'Ryu'
	},
	methods: {
		greet(time) {
			return `Hello ${this.name}, good ${time}`
		}
	}
});
