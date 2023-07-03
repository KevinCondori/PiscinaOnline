<?php

use Illuminate\Support\Facades\Route;
//use App\HttpProductsType;
use App\Http\Livewire\ProductsType;
use App\Http\Livewire\Lockers\ShowLockers;
use App\Http\Livewire\Products\Products;
use App\Http\Livewire\Notify\CustomerNotify;
//use App\Http\Livewire\Customers\CustomerComponent;
/*
CONTROLLERS OF THE PROJECT
*/
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoicereportController;
use App\Http\Controllers\InvoicecontrolController;
use App\Http\Controllers\NumeroletrasController;
use App\Http\Controllers\SystemlogController;
use App\Http\Controllers\GraphicreportController;
use App\Exports\InvoicesExport;

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

Route::get('/', function () {
    return view('appweb.index');
});
Route::get('/excelweb', function () {
    return (new InvoicesExport(['2021-11-25', '2022-11-12']))->download('ejemplo.xlsx');
});
Route::get('/websettings', function () {
    return view('WebSettings');
});
Route::get('/server1', function () {
    //return "conectadoooooo";
    return view('demoqr');
});
/*Route::get('/aboutsettings', function () {
    return view('appweb.aboutcomponent');
});
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard-component');
})->name('dashboard');
Route::get('productstype', ProductsType::class);
/*Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    ->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    ->get('/products', function () {
        return view('dashboard');
    })->name('dashboard');
})
*/

/*Route::middleware(['auth:sanctum', 'verified'])->get('/products', function () {
    return view('livewire.product');
})->name('product');*/
Route::get('/prueba1', function () {
    return view('prueba1');
});
Route::get('/prueba2', function () {
    return view('prueba2');

});
Route::get('/demo', function () {
    return view('demo');

});
Route::get('/products', function () {
    return view('ShowProducts');

});
Route::get('/typeproducts', function () {
    return view('Showtypeproduct');

});
Route::get('/consumption', function () {
    return view('ShowConsumptions');

});
Route::get('/listconsumption', function () {
    return view('ListConsumption');
});
Route::get('/invoice', function () {
    return view('ShowInvoice');

});
Route::get('/entrycustomer', function () {
    return view('entrycustomer');

});
Route::get('/dashboard-component', function () {
    return view('dashboard-component');
});
Route::get('/reports', function () {
    return view('ShowReport');
});
Route::get('/graphic-report', function () {
    return view('GraphicReportComponent');
});
/*
Route::get('/graphic-report-dinamic', function () {
    return view('GraphicReport');
});
*/
Route::get('/postcomponent', function () {
    return view('PostComponent');
});
Route::get('/lockers', function () {
    return view('LockersComponent');
});
Route::get('/eventcomponent', function () {
    return view('EventComponent');
});
Route::get('/eventreport', function () {
    return view('EventreportComponent');
});
Route::get('/usercomponent', function () {
    return view('UserComponent');
});
/* Route Promotions */
Route::get('/promotions', function () {
    return view('ShowPromo');
});
/* Route Customers */
Route::get('/showcustomers', function () {
    return view('ShowCustomers');
});
/* Route Notify Customer */
Route::get('/notifycustomer', function () {
    return view('NotifyCustomer');
});
Route::get('/logs-system-mode', [SystemlogController::class, 'index']);
Route::get('demoletras', [NumeroletrasController::class, 'index']);
Route::get('demodata', [NumeroletrasController::class, 'database']);
Route::get('backupshow', [NumeroletrasController::class, 'showfilesql'])->name('backupdata.show');

Route::get('image/{filename}', 'NumeroletrasController@displayImage')->name('image.displayImage');
/*Route::get('/invoicesmodule', function () {
    return view('InvoiceComponent');
});*/
Route::resource('/invoicesmodule', InvoiceController::class);
Route::resource('/invoicesreport', InvoicereportController::class);
Route::post('reportdate', [InvoicereportController::class, 'report_date'])->name('invoice.report_date');
Route::post('reportrangedate', [InvoicereportController::class, 'report_range_date'])->name('invoice.report_range_date');
Route::get('invoicereports/', [InvoiceController::class, 'report'])->name('invoice.report');
//Route::get('lockers', ShowLockers::class);
Route::get('invoicecontrol', [InvoicecontrolController::class, 'index'])->name('invoicecontrol.index');
Route::get('invoicecontrolcode', [InvoicecontrolController::class, 'controlcode1'])->name('invoicecontrol.controlcode');
Route::post('invoicecontrolstore', [InvoicecontrolController::class, 'store'])->name('invoicecontrol.store');
Route::get('/graphic-report-dinamic', [GraphicreportController::class, 'index']);
Route::post('/graphic-report-refrescar', [GraphicreportController::class, 'refrescar']);
/*
Componentes de la pagina
*/
Route::resource('/aboutsettings', AboutController::class);
Route::resource('/companysettings', CompanyController::class);
Route::get('/phpinfo', function() {
    return phpinfo();
});