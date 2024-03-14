<?php

use App\Http\Controllers\Clients;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuntaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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
    Route::get('punta/addpuntaclient', [PuntaController::class, 'AddClient'])->name('AddPuntaClient');
    Route::put('punta/addpuntaclient', [PuntaController::class, 'AddClientProceed'])->name('AddPuntaClientProceed');
    Route::get('punta/{id}/delete', [PuntaController::class, 'deleteclient'])->name('deletepuntaclient');
    Route::get('punta/{id}', [PuntaController::class, 'clientbill'])->name('clientbill');
    Route::get('punta/editpuntaclient/{id}', [PuntaController::class, 'Editclient'])->name('EditPuntaClient');
    Route::put('punta/updatepuntaclient/{id}', [PuntaController::class, 'updateclient'])->name('updatepuntaclient');
    Route::get('punta/editbillpuntaclient/{id}', [PuntaController::class, 'EditBillClient'])->name('EditBillClient');
    Route::put('punta/updatebillclient/{id}', [PuntaController::class, 'updatebill'])->name('updatebill');

    //Luyo Poblacion Carles
    Route::get('luyo', [LuyoPoblacionController::class, 'luyo'])->name('luyo'); 
    Route::get('luyo/addluyoclient', [LuyoPoblacionController::class, 'AddClient'])->name('AddLuyoClient');
    Route::put('luyo/addluyoclient', [LuyoPoblacionController::class, 'AddClientProceed'])->name('AddLuyoClientProceed');
    Route::get('luyo/{id}/delete', [LuyoPoblacionController::class, 'deleteclient'])->name('deleteluyoclient');
    Route::get('luyo/{id}', [LuyoPoblacionController::class, 'clientbill'])->name('clientbillluyo');
    Route::get('luyo/editluyoclient/{id}', [LuyoPoblacionController::class, 'Editclient'])->name('EditLuyoClient');
    Route::put('luyo/updateluyoclient/{id}', [LuyoPoblacionController::class, 'updateclient'])->name('updateluyoclient');
    Route::get('luyo/editbillluyoclient/{id}', [LuyoPoblacionController::class, 'EditBillClient'])->name('EditBillClientLuyo');
    Route::put('luyo/updatebillclient/{id}', [LuyoPoblacionController::class, 'updatebill']);

    //Reman Edem
    Route::get('remanedem/status', [DashboardController::class, 'remanearning'])->name('remanearning');


});
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
