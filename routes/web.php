<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tickets', [App\Http\Controllers\HomeController::class, 'tickets'])->name('tickets');
Route::get('/ganadores', [App\Http\Controllers\HomeController::class, 'ganadores'])->name('ganadores');


Route::get('/fix-server', function () {

    // 🔐 Clave de seguridad (cámbiala sí o sí)
    if (request('key') !== '123456789asdfghjkl') {
        abort(403, 'No autorizado');
    }

    $output = [];

    try {
        Artisan::call('optimize:clear');
        $output[] = 'optimize:clear OK';

        Artisan::call('config:clear');
        $output[] = 'config:clear OK';

        Artisan::call('cache:clear');
        $output[] = 'cache:clear OK';

        Artisan::call('route:clear');
        $output[] = 'route:clear OK';

        Artisan::call('view:clear');
        $output[] = 'view:clear OK';

    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }

    return implode('<br>', $output);
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
