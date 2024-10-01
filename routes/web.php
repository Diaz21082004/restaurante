<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\FacturaController;
 
// Ruta para la página de bienvenida
Route::get('/', function () {
    return view('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Rutas para el controlador de Menús
Route::resource('menus', MenuController::class);

// Rutas para el controlador de Pedidos
Route::resource('pedidos', PedidoController::class);

// Rutas para el controlador de Facturas
Route::resource('facturas', FacturaController::class);



// Rutas de la Factura
Route::resource('facturas', FacturaController::class);
use App\Http\Controllers\PDFController;

Route::get('/factura/{id}/pdf', [PDFController::class, 'generarFacturaPDF']);
Route::get('/reporte/ventas/pdf', [PDFController::class, 'generarReporteVentas']);


Route::resource('menus', MenuController::class);
