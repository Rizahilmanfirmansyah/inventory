<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
//LiveP
use App\Livewire\DashboardComponent;
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

//Auth

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('aksilogin', [LoginController::class, 'aksireg'])->name('aksireg');
Route::post('logout', [LoginController::class, 'aksilogout'])->name('aksilogout');  

Route::get('reg', [LoginController::class, 'index'])->name('register');
Route::post('aksireg', [LoginController::class, 'aksiireg'])->name('aksireg');

Route::get('dashboard', DashboardComponent::class)->name('dashboard.admin');

Route::get('index-category', CategoryAllComponent::class)->name('category.all');
Route::get('add-category', CategoryAddComponent::class)->name('category.add');
Route::get('edit-category/{category_id}', CategoryEditComponent::class)->name('category.edit');

Route::get('all-product', ProductAllComponent::class)->name('product.all');
Route::get('add-product', ProductAddComponent::class)->name('product.add');
Route::get('edit-product/{product_id}', ProductEditComponent::class)->name('product.edit');

Route::get('all-customer', CustomerAllComponent::class)->name('customer.all');
Route::get('add-customer', CustomerAddComponent::class)->name('customer.add');
Route::get('edit-customer', CustomerEditComponent::class)->name('customer.edit');

Route::get('all-product_in', PmAllComponent::class)->name('product_masuk.all');
Route::get('add-product_in', PmAddComponent::class)->name('product_masuk.add');
Route::get('edit-product_in/{pm_id}', PmEditComponent::class)->name('product_masuk.edit');




