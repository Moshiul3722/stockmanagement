<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionEntryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// ==============================
// Admin routes
// ==============================
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'AdminDashboard'])
        ->name('admin.dashboard');

    Route::get('admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('admin/section/daptar/list', [SectionEntryController::class, 'DaptarList'])->name('admin.section.daptarList');
    Route::get('admin/section/daptar/add', [SectionEntryController::class, 'DaptarAdd'])->name('admin.section.daptarAdd');
    Route::get('admin/section/wing/list', [SectionEntryController::class, 'WingList'])->name('admin.section.wingList');
    Route::get('admin/section/wing/add', [SectionEntryController::class, 'WingAdd'])->name('admin.section.wingAdd');
    Route::get('admin/section/sub-section/list', [SectionEntryController::class, 'subSectionList'])->name('admin.section.subSectionList');
    Route::get('admin/section/sub-section/add', [SectionEntryController::class, 'subSectionAdd'])->name('admin.section.subSectionAdd');
    Route::get('admin/section/list', [SectionEntryController::class, 'sectionList'])->name('admin.section.sectionList');
    Route::get('admin/section/add', [SectionEntryController::class, 'sectionAdd'])->name('admin.section.sectionAdd');

    Route::get('admin/requisition/list', [SectionEntryController::class, 'requisitionList'])->name('admin.requisition.requisitionList');
    Route::get('admin/requisition/add', [SectionEntryController::class, 'requisitionAdd'])->name('admin.requisition.requisitionAdd');

    Route::get('admin/product-type/list', [SectionEntryController::class, 'productTypeList'])->name('admin.productType.list');
    Route::get('admin/product-type/add', [SectionEntryController::class, 'productTypeAdd'])->name('admin.productType.add');

    Route::get('admin/product/list', [SectionEntryController::class, 'productList'])->name('admin.product.list');
    Route::get('admin/product/add', [SectionEntryController::class, 'productAdd'])->name('admin.product.add');

    Route::get('admin/stock/list', [SectionEntryController::class, 'stockList'])->name('admin.stock.list');
    Route::get('admin/stock/add', [SectionEntryController::class, 'stockAdd'])->name('admin.stock.add');

    Route::get('admin/single_product/list', [SectionEntryController::class, 'singleProductList'])->name('admin.singleProduct.list');
});

Route::get('/profile', [UserController::class, 'UserProfile'])->name('user.profile');

Route::get('admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');


// ===========================
// Customer routes
// ===========================
Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('customer/dashboard', [CustomerController::class, 'CustomerDashboard'])
        ->name('customer.dashboard');
});
