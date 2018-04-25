<template>
	<div id="show-blogs">
		<h1>All Blog Articles</h1>
		<div v-for="blog in blogs" class="single-blog">
			<h2>{{ blog.title }}</h2>
			<article>{{ blog.body }}</article>
		</div>
	</div>
</template>

<script>
import axios from 'axios';

export default {
	data () {
		return {
			blogs: []
		}
	},
	methods: {
		
	},
	created() {
		this.$http.get('https://jsonplaceholder.typicode.com/posts').then(function(data){
			this.blogs = data.body.slice(0, 10);
		});

		// axios.get('https://jsonplaceholder.typicode.com/posts')
		// .then(response => {
		// 	console.log(response);
		// 	this.blogs = response.data.slice(0, 10);
		// })
		// .catch(error => {
		// 	console.log(error);
		// });
	}
}
</script>

<style>
	#show-blogs{
		max-width: 800px;
		margin: 0px auto;
	}
	.single-blog{
		padding: 20px;
		margin: 20px 0;
		box-sizing: border-box;
		background: #eee;
	}
</style>
