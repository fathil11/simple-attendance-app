<?php

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
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth:sanctum']], function(){
    // Dashboard
    Route::get('/dashboard', function(){
        return view('auth.dashboard');
    })->name('dashboard');

    // Employee
    Route::get('/karyawan', function(){
        return view('auth.employee.index');
    })->name('employee.index');

    // Statistic
    Route::get('/karyawan/statistik/pernah-cuti', function(){
        return view('auth.statistic.has-absence');
    })->name('employee.statistic.has-absence');

    Route::get('/karyawan/statistik/cuti-lebih-dari-sekali', function(){
        return view('auth.statistic.has-absence-more-than-one');
    })->name('employee.statistic.has-absence-more-than-one');

    Route::get('/karyawan/statistik/sisa-cuti', function(){
        return view('auth.statistic.absence-leftover');
    })->name('employee.statistic.absence-leftover');

});

