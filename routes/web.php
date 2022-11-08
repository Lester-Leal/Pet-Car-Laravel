<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeleteController;

use App\Http\Controllers\SettingController;
use App\Http\Controllers\AdminPetController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CustomerPetController;
use App\Http\Controllers\AdminInvoiceController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminScheduleController;
use App\Http\Controllers\AdminDiagnosisController;
use App\Http\Controllers\CustomerInvoiceController;
use App\Http\Controllers\CustomerServiceController;
use App\Http\Controllers\AdminAppointmentController;
use App\Http\Controllers\AdminTransactionController;
use App\Http\Controllers\CustomerScheduleController;
use App\Http\Controllers\CustomerDiagnosisController;
use App\Http\Controllers\CustomerAppointmentControlle;
use App\Http\Controllers\CustomerAppointmentController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\CustomerTransactionController;

Route::get('/clear-cache', function () {
  Artisan::call('cache:clear');
  return "Cache is cleared";
});

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::Delete('delete', [DeleteController::class, 'delete'])->name('delete');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
  Route::resource('categories', AdminCategoryController::class);
  Route::resource('services', AdminServiceController::class);
  Route::resource('customers', AdminCustomerController::class);
  Route::resource('pets', AdminPetController::class);
  Route::resource('users', AdminUserController::class);
  Route::resource('diagnosis', AdminDiagnosisController::class);
  Route::resource('schedules', AdminScheduleController::class);
  Route::resource('invoices', AdminInvoiceController::class);
  Route::resource('transactions', AdminTransactionController::class);
  Route::get('transactions/report/{period}', [AdminTransactionController::class, 'report'])->name('transaction.report');
  Route::get('settings', [SettingController::class, 'index'])->name('settings');
  Route::post('settings', [SettingController::class, 'store']);

  Route::get('appointments', [AdminAppointmentController::class, 'index'])->name('appointments');
  Route::patch('appointments/update/{status}', [AdminAppointmentController::class, 'update'])->name('appointments.update');

  Route::get('get/pets', [AdminDiagnosisController::class, 'getPets'])->name('getPets');
  Route::get('get/invoice', [AdminTransactionController::class, 'getInvoice'])->name('getInvoice');
  Route::get('get/invoice/amount', [AdminTransactionController::class, 'getAmount'])->name('getAmount');
});

Route::group(['prefix' => 'customer', 'as' => 'customer.', 'middleware' => ['auth']], function () {
  Route::get('services', [CustomerServiceController::class, 'index'])->name('services');
  Route::get('pets', [CustomerPetController::class, 'index'])->name('pets');
  Route::get('diagnosis', [CustomerDiagnosisController::class, 'index'])->name('diagnosis');
  Route::get('invoices', [CustomerInvoiceController::class, 'index'])->name('invoices');
  Route::get('schedules', [CustomerScheduleController::class, 'index'])->name('schedules');
  Route::get('transactions', [CustomerTransactionController::class, 'index'])->name('transactions');
  Route::resource('appointments', CustomerAppointmentController::class);
  Route::get('appointment/calendar', [CustomerAppointmentController::class, 'calendar'])->name('appointments.calendar');
  Route::get('appointment/calendar/get', [CustomerAppointmentController::class, 'getCalendar'])->name('appointments.calendar.get');

  Route::get('settings', [CustomerProfileController::class, 'index'])->name('settings');
  Route::patch('settings/update}', [CustomerProfileController::class, 'update'])->name('settings.update');
});
