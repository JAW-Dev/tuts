import _ from 'lodash';
import React, { Component } from 'react';
import ReactDom from 'react-dom';
import YTSearch from 'youtube-api-search';
import SearchBar from './components/search_bar';
import VideoList from './components/video_list';
import VideoDetail from './components/video_detail'
const API_KEY = 'AIzaSyDsv_W6lqh3FSHt-KQSZMwlLiuGFpbNpD8';

class App extends Component {
	constructor(props) {
		super(props);

		this.state = {
			videos: [],
			slectedVideo: null
		};
		
		this.videoSearch('surfboards');
	}
	
	videoSearch(term) {
		YTSearch({key: API_KEY, term: term}, (videos) => {
			this.setState({
				videos: videos,
				slectedVideo: videos[0]
			});
		});
	}

	render() {
		const videoSearch = _.debounce((term) => { this.videoSearch(term) }, 300);
		
		return (
			<div>
				<SearchBar onSearchTermChange={videoSearch}/>
				<VideoDetail video={this.state.slectedVideo}/>
				<VideoList
					onVideoSelect={slectedVideo => this.setState({slectedVideo})}
					videos={this.state.videos} />
			</div>
		);
	}
}

ReactDom.render(<App />, document.querySelector('.container'));
