<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SendEmailController;
use Spatie\Sitemap\SitemapGenerator;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/atividades/areas-de-atuacao', [MainController::class, 'activity']);
Route::get('/contato', [MainController::class, 'contact']);
Route::get('/privacidade', [MainController::class, 'privacy']);
Route::get('/sobre', [MainController::class, 'about']);
Route::get('/links', [MainController::class, 'link']);
Route::get('/aplicativo', [MainController::class, 'app']);

Route::post('/api/sendemail', [SendEmailController::class, 'send']);

Route::get('/sitemap', function () {
    SitemapGenerator::create('https://www.reradvocacia.com')->writeToFile('sitemap.xml');
    return 'Sitemap gerado com sucesso';
});
