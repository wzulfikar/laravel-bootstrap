<?php

Route::get('bootstrap/{playground?}',function(Request $request, $playground = 'readme'){
	$validator = Validator::make(Request::all(), [
	  'title' => 'required|unique:posts|max:255',
	  'body' => 'required',
	]);

	if($request->has('error'))
		return view('layouts.bootstrap.playground.'.$playground)->withErrors($validator);

	return view('layouts.bootstrap.playground.'.$playground);
});