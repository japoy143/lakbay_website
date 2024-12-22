<?php

use App\Livewire\AboutPage;
use App\Livewire\Admin\AdminAddHotelPage;
use App\Livewire\Admin\AdminBookingsPage;
use App\Livewire\Admin\AdminCustomersPage;
use App\Livewire\Admin\AdminDashboardPage;
use App\Livewire\Admin\AdminHotelsPage;
use App\Livewire\Admin\BookingsPage;
use App\Livewire\Admin\CustomersPage;
use App\Livewire\Admin\Dashboardpage;
use App\Livewire\Admin\Hotel\EditHotelpage;
use App\Livewire\Admin\HotelsPage;
use App\Livewire\ContactPage;
use App\Livewire\Homepage;
use App\Livewire\LoginPage;
use App\Livewire\PackagesPage;
use App\Livewire\RegisterPage;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class)->name('home');
Route::get('/packages', PackagesPage::class)->name('packages');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/about', AboutPage::class)->name('about');

//login
Route::get('/login', LoginPage::class)->name('login');
Route::get('/register', RegisterPage::class)->name('register');


//admin
Route::get('/admin', AdminDashboardPage::class)->name('admin.dashboard');
Route::get('/hotels', AdminHotelsPage::class)->name('admin.hotels');
Route::get('/bookings', AdminBookingsPage::class)->name('admin.bookings');
Route::get('/customers', AdminCustomersPage::class)->name('admin.customers');

//store
Route::get('/addhotel', AdminAddHotelPage::class)->name('addhotel');
//edit
Route::get('/admin/edit/{hotel}', EditHotelpage::class)->name('edithotel');
