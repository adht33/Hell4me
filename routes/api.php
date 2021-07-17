<?php
use Illuminate\Http\Example;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});
 
   // Route :: name ('api.')->group{function() {
       // Route ::get('/',function(){
         //   return 'Listados de endpoints accesibles';
       // })->name('info');

     
    //Route::get('ejem',[example::class, 'example']);
    
//});

Route :: name ('api.')->group(function() {
    Route ::get('/',function(){
        return 'Listados de endpoints accesibles';
    })->name('info');

Route::prefix ('app')->name('app')->group( function(){
    Route :: get ('auth', function(){
        return 'Generar access token a partir apikey';
    })->name('auth');
    Route:: get('validate', function(){
        return 'Validar access token vigente';
    })->name('validate');
    Route:: get('refresh', function(){
        return 'Regenerar access token por apikey';
    })->name('refresh');;
        Route :: get ('scheme', function(){
            return 'funciones asociadas a la app';
        })->name('scheme');
});


Route::get('ejem',[example::class, 'example'])->name('example');

Route :: resource('users', UserController::class)->name('create','edit');
});
