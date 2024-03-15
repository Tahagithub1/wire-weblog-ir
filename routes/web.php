<?php

use App\Livewire\Article\SingleArticle;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Index\Index;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class);
Route::get('/article/{id}' , SingleArticle::class);


Route::get('/register', register::class )->middleware('guest');
Route::get('/login', Login::class)->middleware('guest');
Route::get('/logout' , function(){
  Auth::logout();
  return redirect('/');
});


