<?php

use App\Solid\PdfExport;
use App\Solid\SaleReports;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    
    $saleReports = new SaleReports();
    $pdfExport = new PdfExport();

    return $pdfExport->export(
        $saleReports->between('1 jan 2022', '31 jan 2022')
    );


    return view('welcome');
});
