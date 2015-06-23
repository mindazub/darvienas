<?php



// interface BarInterface {}

// class Bar implements BarInterface {}
// class SecondBar implements BarInterface {}

// // App::bind('BarInterface', function(){
// // 	return new Bar;
// // });

// // App::bind('BarInterface', 'Bar');
// App::bind('BarInterface', 'SecondBar');
// // arba app()->bind('BarInterface', 'SecondBar')

// // Route::get('bar', function(BarInterface $bar){
// // 	dd($bar);
// // });

// Route::get('bar', function(BarInterface $bar){
// 	$bar = App::make('BarInterface');
// 	// $bar = app()->make('BarInterface');
// 	// $bar = app()['BarInterface'];
// 	// $bar = app('BarInterface');

// 	dd($bar);
// });



Route::get('foo', 'FooController@foo');


Route::get('/', [
	'as' => 'home',
	'uses' => 'ArticlesController@index'
	]);

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::resource('articles', 'ArticlesController');

Route::get('tags/{tags}','TagsController@show');

Route::resource('admin', 'AdminController');

Route::controllers([
	'auth'=>'Auth\AuthController',
	'password'=>'Auth\PasswordController',
	]);

// Route::get('foo', ['middleware'=>'manager', function(){
// 	return 'this is only for managers';
// }]);

Route::get('foo/{bar}', function(){
	
});