<?php

use App\Http\Controllers\Clients;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuntaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LuyoPoblacionController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function() {
    //Punta Route
    Route::get('punta', [PuntaController::class, 'punta'])->name('punta'); 
    Route::get('punta/addpuntaclient', [PuntaController::class, 'addpuntaclient'])->name('addpuntaclient');
    Route::put('punta/addpuntaclient', [PuntaController::class, 'addpuntaclientproceed'])->name('addpuntaclientproceed');
    Route::get('punta/{id}/delete', [PuntaController::class, 'deletepuntaclient'])->name('deletepuntaclient');
    Route::get('punta/{id}', [PuntaController::class, 'clientbill'])->name('clientbill');
    Route::get('punta/editpuntaclient/{id}', [PuntaController::class, 'editpuntaclient'])->name('editpuntaclient');
    Route::put('punta/updatepuntaclient/{id}', [PuntaController::class, 'puntaupdateclient'])->name('puntaupdateclient');
    Route::get('punta/editbillpuntaclient/{id}', [PuntaController::class, 'EditBillClient'])->name('EditBillClient');
    Route::put('punta/updatebillclient/{id}', [PuntaController::class, 'updatebill'])->name('updatebill');

    //Luyo Poblacion Carles
    Route::get('luyo', [LuyoPoblacionController::class, 'luyo'])->name('luyo'); 


});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
