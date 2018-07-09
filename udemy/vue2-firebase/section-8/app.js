new Vue({
	el: '#app',
	data: {
		title: 'Becoming a Vue Ninja',
		name: 'Ryu',
		url: 'https://youtube.com',
		classes: ['one', 'two']
	},
	methods: {
		greet(time) {
			return `Hello ${this.name}, good ${time}`
		}
	}
});
