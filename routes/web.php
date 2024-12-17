<?php

use App\Livewire\AboutPage;
use App\Livewire\ContactPage;
use App\Livewire\Homepage;
use App\Livewire\PackagesPage;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class)->name('home');
Route::get('/packages', PackagesPage::class)->name('packages');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/about', AboutPage::class)->name('about');
