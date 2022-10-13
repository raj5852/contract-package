<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Raj\Contract\Http\Controllers\ContractController;



Route::group(['namespace'=>'Raj\Contract\Http\Controllers'],function(){
    Route::get('contract',[ContractController::class,'index']);
    Route::post('contract',[ContractController::class,'send'])->name('contract');
});

