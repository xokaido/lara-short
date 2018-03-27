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
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout' );

Route::get('/', function () {
    return view('welcome');
});
// $url = 'https://www.upwork.com/d/contracts/19784694';

// $hash = hash( 'sha512', $url );

// function shorten( $text )
// {
//     $regex1 = '/(?P<words>[a-z]{2,4})/';
//     $regex2 = '/(?P<digits>[\d]{3,4})/';
//     preg_match_all( $regex1, $text, $words );
//     preg_match_all( $regex2, $text, $digits );

//     $start  = end( $words[ 'words' ] );
//     $middle = end( $digits[ 'digits' ] );
//     $end    = prev( $words[ 'words' ] );
//    return  $start . $middle . $end;  
// }

// printf( "Shortened: %s\n", shorten( $hash ) );
// // Shortened: eca0577cacf


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
