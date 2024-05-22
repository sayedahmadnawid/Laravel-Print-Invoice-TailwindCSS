<?php

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPdf\Facades\Pdf;
use function Spatie\LaravelPdf\Support\pdf;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {

    return pdf('japanese', [
        'companyName' => '株式会社アフガニスタンオタク',
    ]);
});

Route::get('/english', function () {

    return pdf('english', [
        'variable1' => 'some value',
    ]);
});
