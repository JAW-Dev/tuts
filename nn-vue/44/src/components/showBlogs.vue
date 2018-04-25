<template>
	<div id="show-blogs">
		<h1>All Blog Articles</h1>
		<input type="text" v-model="search" placeholder="Search Blogs">
		<div v-for="blog in filteredBlogs" class="single-blog">
			<h2><router-link v-bind:to="'/blog/' + blog.id">{{ blog.title | to-uppercase}}</router-link></h2>
			<article>{{ blog.content | snippet}}</article>
		</div>
	</div>
</template>

<script>
import searchMixin from'../mixins/searchMixin'

export default {
	data () {
		return {
			blogs: [],
			search: ''
		}
	},
	methods: {
		
	},
	created() {
		this.$http.get('https://nn-vue-playlist-db870.firebaseio.com/posts.json').then(function(data){
			return data.json();
		}).then(function(data) {
			var blogsArray = [];
			for(let key in data) {
				data[key].id = key;
				blogsArray.push(data[key]);
			}
			this.blogs = blogsArray;
		});
	},
	computed: {

	},
	filters: {
		toUppercase(value) {
			return value.toUpperCase();
		}
	},
	directives: {
		'rainbow': {
			bind(el, binding, vnode) {
				el.style.color = "#" + Math.random().toString().slice(2,8);
			}
		}
	},
	mixins: [searchMixin]
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
		border: 1px dotted #aaa;
	}
	#show-blogs a{
		color: #444;
		text-decoration: none;
	}
	input[type="text"]{
		padding: 8px;
		width: 100%;
		box-sizing: border-box;
	}
</style>
