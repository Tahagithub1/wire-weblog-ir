<?php

use App\Livewire\Article\SingleArticle;
use App\Livewire\Index\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class);
Route::get('/article/{id}' , SingleArticle::class);

