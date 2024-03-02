<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('clientes', 'Clientecontroller');
Route::get('/clientes/create', 'ClienteController@create')->name('clientes.create');
Route::post('/clientes', 'ClienteController@store')->name('clientes.store');
Route::get('/clientes/edit', 'ClienteController@edit')->name('clientes.edit');
Route::delete('/clientes/{id}', 'ClienteController@destroy')->name('clientes.destroy');
Route::get('/clientes/{id}', 'ClienteController@show')->name('clientes.show');
Route::get('/clientes', 'ClienteController@index')->name('clientes.index');


Route::resource('Productos', 'ProductoController');
Route::get('/productos/create', 'ProductoController@create')->name('productos.create');
Route::post('/productos', 'productoController@store')->name('productos.store');
Route::get('/productos/edit', 'ProductoController@edit')->name('productos.edit');
Route::delete('/productos/{producto}', 'ProductoController@destroy')->name('productos.destroy');
Route::get('/productos/{producto}', 'ProductoController@show')->name('productos.show');
Route::get('/productos', 'ProductoController@index')->name('productos.index');


Route::resource('Categorias', 'CategoriaController');
Route::get('/categorias/create', 'CategoriaController@create')->name('categorias.create');
Route::post('/categorias', 'CategoriaController@store')->name('categorias.store');
Route::get('/categorias', 'CategoriaController@index')->name('categorias.index');
Route::delete('/categorias/{categoria}', 'CategoriaController@destroy')->name('categorias.destroy');
Route::get('/categorias/{categoria}', 'CategoriaController@show')->name('categorias.show');
Route::get('/categorias/{categoria}/edit', 'CategoriaController@edit')->name('categorias.edit');



Route::resource('Envios', 'EnvioController');
Route::get('/envios/create', 'EnvioController@create')->name('envios.create');
Route::post('/envios', 'EnvioController@store')->name('envios.store');
Route::get('/envios', 'EnvioController@index')->name('envios.index');
Route::delete('/envios/{envio}', 'EnvioController@destroy')->name('envios.destroy');
Route::get('/envios/{envio}', 'EnvioController@show')->name('envios.show');
Route::get('/envios/{envio}/edit', 'EnvioController@edit')->name('envios.edit');


Route::resource('Pedidos', 'PedidoController');
Route::get('/pedidos/create', 'PedidoController@create')->name('pedidos.create');
Route::post('/pedidos', 'PedidoController@store')->name('pedidos.store');

Route::resource('Proveedores', 'ProveedoreController');
Route::get('/proveedores/create', 'ProveedoreController@create')->name('proveedores.create');
Route::post('/proveedores', 'ProveedoreController@store')->name('proveedores.store');
Route::get('/proveedores', 'ProveedoreController@index')->name('proveedores.index');
Route::delete('/proveedores/{proveedor}', 'ProveedoreController@destroy')->name('proveedores.destroy');
Route::get('/proveedores/{proveedor}', 'ProveedoreController@show')->name('proveedores.show');
Route::get('/proveedores/{proveedor}/edit', 'ProveedoreController@edit')->name('proveedores.edit');


Route::resource('Compras', 'CompraController');
Route::get('/compras/create', 'CompraController@create')->name('compras.create');
Route::post('/compras', 'CompraController@store')->name('compras.store');
Route::get('/compras', 'CompraController@index')->name('compras.index');
Route::delete('/compras/{id}', 'CompraController@destroy')->name('compras.destroy');
Route::get('/compras/{compra}', 'CompraController@show')->name('compras.show');
Route::get('/compras/{compra}/edit', 'CompraController@edit')->name('compras.edit');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');







route::middleware('auth')->group(function(){

    Route::get('/clientes', 'ClienteController@index')->name('clientes');

    Route::get('/productos', 'ProductoController@index')->name('productos');

    Route::get('/proveedores', 'ProveedoreController@index')->name('proveedores');

    Route::get('/pedidos', 'PedidoController@index')->name('pedidos');

    Route::get('/envios', 'EnvioController@index')->name('envios');

    Route::get('/categorias', 'CategoriaController@index')->name('categorias');

    Route::get('/compras', 'CompraController@index')->name('compras');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
