<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/article', [ArticleController::class, 'liste_article']);

Route::get('/ajouter', [ArticleController::class, 'ajouter_article']);

Route::get('/ajouter/traitement',[ArticleController::class,'ajouter_article_traitement']);