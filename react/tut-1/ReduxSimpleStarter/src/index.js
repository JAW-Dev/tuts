import React from 'react';
import ReactDom from 'react-dom';

import SearchBar from './components/search_bar';

// YouTube API Key
const API_KEY = 'AIzaSyDsv_W6lqh3FSHt-KQSZMwlLiuGFpbNpD8';

// Create a new component. This component should produce some HTML.
const App = () => {
	return (
		<div>
			<SearchBar />
		</div>
	);
}

// Tale this component's generated HTML and put it in the page (in the DOM).
ReactDom.render(<App />, document.querySelector('.container'));
