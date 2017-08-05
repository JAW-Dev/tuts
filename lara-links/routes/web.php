<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
	// Get the Link model and extract the database fields object.
	$links = \App\Link::all();
	
	// Point this route to the welcome blade template.
	// Pass the database fileds object to the bade tamplate.
	return view('welcome', ['links' => $links]);
});

Route::get('/submit', function () {
	// Point this route to the bubmit blade template.
	return view('submit');
});

Route::post('/submit', function (Request $request) {
	
	// Validate the request post obejct entries.
	$validator = Validator::make($request->all(), [
			'title' => 'required|max:255',
			'url' => 'required|max:255',
			'description' => 'required|max:255',
	]);
	
	// If validation fails redirect back to the form
	// with the post input and the errors.
	if ($validator->fails()) {
			return back()
					->withInput()
					->withErrors($validator);
	}
	
	// Instantiate a new instance of the Link model.
	$link = new \App\Link;
	// Apply the request object entries to variables.
	$link->title = $request->title;
	$link->url = $request->url;
	$link->description = $request->description;
	
	// Save the post to the Links database table.
	$link->save();
	
	// Redirect to the homepage.
	return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
