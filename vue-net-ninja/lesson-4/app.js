new Vue({
	el: '#vue-app',
	data: {
		name: 'Jason',
		job: 'Ninja',
		website: 'https://jawdev.io',
		websiteTag: '<a href="https://jawdev.io">Jason\'s Website</a>'
	},
	methods: {
		greet: function(time) {
			return 'Good ' + time + ' ' + this.name;
		}
	}
})
