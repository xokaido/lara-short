  <?php


Route::get('/', function () { return view('welcome'); });
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout' );
Route::get( '/u/{url}', '\App\Http\Controllers\ShortURLController@handleRedirects' );

// Have no idea why the heck DELETE doesn't work with resource!
Route::middleware( 'auth' )->delete( '/urls/{id?}', '\App\Http\Controllers\ShortURLController@destroy' );
Route::middleware( 'auth' )->resource( '/urls/', '\App\Http\Controllers\ShortURLController' );

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
