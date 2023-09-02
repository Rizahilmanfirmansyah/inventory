<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerImportController;
//LiveP
use App\Livewire\DashboardComponent;
use App\Livewire\UserAddComponent;
use App\Livewire\UserAllComponent;
use App\Livewire\Category\CategoryAllComponent;
use App\Livewire\Category\CategoryAddComponent;
use App\Livewire\Category\CategoryEditComponent;
use App\Livewire\Product\ProductAllComponent;
use App\Livewire\Product\ProductAddComponent;
use App\Livewire\Product\ProductEditComponent;
use App\Livewire\Customer\CustomerAddComponent;
use App\Livewire\Customer\CustomerEditComponent;
use App\Livewire\Customer\CustomerAllComponent;
use App\Livewire\ProductKeluar\PkAllComponent;
use App\Livewire\ProductKeluar\PkAddComponent;
use App\Livewire\ProductKeluar\PkEditComponent;
use App\Livewire\ProductMasuk\PmAddComponent;
use App\Livewire\ProductMasuk\PmAllComponent;
use App\Livewire\ProductMasuk\PmEditComponent;
use App\Livewire\Sales\SalesAllCompenent;
use App\Livewire\Sales\SalesEditComponent;
use App\Livewire\Sales\SalesAddComponent;
use App\Livewire\Supplier\SupplierAddComponent;
use App\Livewire\Supplier\SupplierAllComponent;
use App\Livewire\Supplier\SupplierEditComponent;






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
    return view('welcome');
});

Route::get('add-user', UserAddComponent::class)->name('user.add');
Route::get('all-user', UserAllComponent::class)->name('user.all');

//Auth

Route::group(['middlewire' =>  ['auth']], function(){
    Route::group(['middlewire' => ['role:admin']], function(){

    });
    Route::group(['middleware' => ['role:normal_user']], function(){

    });
});

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('aksilogin', [LoginController::class, 'aksilogin'])->name('aksilogin');
Route::post('logout', [LoginController::class, 'aksilogout'])->name('aksilogout');  

Route::get('reg', [RegisterController::class, 'index'])->name('register');
Route::post('aksireg', [RegisterController::class, 'aksireg'])->name('aksireg');

Route::get('dashboard', DashboardComponent::class)->name('dashboard.admin');

Route::get('index-category', CategoryAllComponent::class)->name('category.all');
Route::get('add-category', CategoryAddComponent::class)->name('category.add');
Route::get('edit-category/{category_id}', CategoryEditComponent::class)->name('category.edit');

Route::get('all-product', ProductAllComponent::class)->name('product.all');
Route::get('add-product', ProductAddComponent::class)->name('product.add');
Route::get('edit-product/{product_id}', ProductEditComponent::class)->name('product.edit');

Route::get('all-customer', CustomerAllComponent::class)->name('customer.all');
Route::get('add-customer', CustomerAddComponent::class)->name('customer.add');
Route::get('edit-customer/{customer_id}', CustomerEditComponent::class)->name('customer.edit');

Route::get('all-sales', SalesAllCompenent::class)->name('sales.all');
Route::get('add-sales', SalesAddComponent::class)->name('sales.add');
Route::get('edit-sales/{sales_id}', SalesEditComponent::class)->name('sales.edit');

Route::get('all-suppliers', SupplierAllComponent::class)->name('suppliers.all');
Route::get('add-suppliers', SupplierAddComponent::class)->name('suppliers.add');
Route::get('edit-suppliers/{suppliers_id}', SupplierEditComponent::class)->name('suppliers.edit');

Route::get('all-product_in', PmAllComponent::class)->name('product_masuk.all');
Route::get('add-product_in', PmAddComponent::class)->name('product_masuk.add');
Route::get('edit-product_in/{pm_id}', PmEditComponent::class)->name('product_masuk.edit');

Route::get('all-product_out', PkAllComponent::class)->name('product_keluar.all');
Route::get('add-product_out', PkAddComponent::class)->name('product_keluar.add');
Route::get('edit-product_out/{pk_id}', PkEditComponent::class)->name('product_keluar.edit');

//import_route
Route::post('import-customer', [CustomerImportController::class, 'CustomerImport'])->name('customer.import');
Route::get('export-customer', [CustomerImportController::class, 'CustomerExport'])->name('customer.export');




