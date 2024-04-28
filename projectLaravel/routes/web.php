<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerStagiaire;
use App\Http\Controllers\ControllerBlog;
use App\Http\Controllers\ControllerLogin;
use App\Services\Calcul;
use Faker\Container\ContainerInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

// Route::prefix('/stagiaires')->name('stagiaires.')->group(function(){
//     Route::controller(ControllerStagiaire::class)->group(function(){
//         Route::get('/','index')->name('index');
//         Route::get('/create','create')->name('create');
//         Route::post('/','store')->name('store');
//         Route::delete('/{stagiaire}','destroy')->name('destroy');
//         Route::get('/{stagiaire}/edit','edit')->name('edit');
//         Route::put('/{stagiaire}','update')->name('update');
//         Route::get('/{stagiaire}','show')->name('show')->where(['id'=>'\d+']);


//     });
    

// })
// ;
Route::resource('stagiaires',ControllerStagiaire::class);
Route::middleware('guest')->group(function(){
    Route::get('/login',[ControllerLogin::class,'show'])->name('login.show');
    Route::post('/login',[ControllerLogin::class,'login'])->name('login');
})
;
Route::get('/logout',[ControllerLogin::class,'logout'])->name('login.logout')->middleware('auth');
Route::get('/',[ControllerBlog::class,'index'])->name('homePage')->middleware('auth');

//Suite
Route::get('/bienvenue',function(){
    return response()->download('storage/images/image.jpg',disposition:'inline');

    // $response = new Response('bienvenue',200);
    // return $response;
});
Route::get('/cookies/get',function(Request $request){
    dd($request->cookie('age'));
});
Route::get('/cookies/set/{cookie}',function($cookie){
    $response = new Response();
    $cookieObject = cookie('age',$cookie,5);
    return $response->withCookie($cookieObject);
    
});