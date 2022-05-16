<?php

use Illuminate\Support\Facades\Route;
use Modullo\ModulesLmsLearningBase\Http\Controllers\ModulesLmsLearningBaseController;

Route::group(['namespace' => 'Modullo\ModulesLmsLearningCode\Http\Controllers','middleware' => ['web']],function() {


    Route::middleware('auth')->group(function () {

        Route::group(['prefix' => 'tenant'],function(){

            Route::get('dashboard','ModulesLmsLearningCodeTenantController@index')->name('code-dashboard');


//            Route::group(['prefix' => 'courses'],function() {
//                Route::get('', 'ModulesLmsLearningBaseTenantController@allCourses');
//            });

        });
    });

});
