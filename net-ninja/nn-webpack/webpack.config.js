const path = require('path');

module.exports = {
	
	// Define entry point.
	entry: "./src/script-1.js",
	
	// Define Output point.
	output: {
		path: path.resolve('./dist'),
		filename: "bundle.js"
	},
	
	module: {
		
		// Loaders.
		loaders: [
			
			// Babel Loader.
			{
				// Test to only run on .js files.
				test: /\.js$/,
				
				// Exclude node_modules directory.
				exclude: /(node_modules)/,
				
				// Which loader to use.
				loader: "babel-loader",
				
				query: {
					
					// Which presets to use.
					presets: ['es2015']
				}
				
			},
			
			// CSS and Sass Loader.
			{
				// Test to only run on .scss files.
				test: /\.scss$/,
				
				// Which loader to use.
				// Use ! to pipe loaders. sass-loader pipes to css-loader pipes to style-loader
				loader: "style-loader!css-loader!sass-loader",
			}
			
		]
	}
};
