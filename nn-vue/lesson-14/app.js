var one = new Vue({
	el: '#vue-app-one',
	data: {
		title: "View App One"
	},
	methods: {
	},
	computed: {
		greet: function() {
			return 'Hello form App One :)';
		}
	}
})

var two = new Vue({
	el: '#vue-app-two',
	data: {
		title: "Vue App Two"
	},
	methods: {
		changeTitle: function() {
			one.title = "Title Changed";
		}
	},
	computed: {
		greet: function() {
			return 'Hello form App Two :)';
		}
	}
})

two.title = "Changed from Outside";
