<?php

use App\Livewire\AboutPage;
use App\Livewire\Admin\AdminDashboardPage;
use App\Livewire\Admin\Dashboardpage;
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
Route::get('/admin', AdminDashboardPage::class)->name('admin');
