<?php

// Route::get('/', 'App\Http\Controllers\CMS\WelcomeController@index')->name('welcome');

// Route::prefix('home')->group(function(){
//     Route::get('slider', 'App\Http\Controllers\CMS\HomeController@slider');
//     Route::prefix('trouble')->group(function(){
//         Route::get('poins', 'App\Http\Controllers\CMS\HomeController@poinsTrouble');
//         Route::get('list', 'App\Http\Controllers\CMS\HomeController@listTrouble');
//     });
//     Route::prefix('excellence')->group(function(){
//         Route::get('poins', 'App\Http\Controllers\CMS\HomeController@poinsExcellence');
//         Route::get('titleBg', 'App\Http\Controllers\CMS\HomeController@titleBgExcellence');
//     });
//     Route::prefix('botLogic')->group(function(){
//         Route::get('poins', 'App\Http\Controllers\CMS\HomeController@poinsBgBotLogic');
//         Route::get('titleDesc', 'App\Http\Controllers\CMS\HomeController@titleDescBgBotLogic');
//     });
//     Route::prefix('benefit')->group(function(){
//         Route::get('poins', 'App\Http\Controllers\CMS\HomeController@poinsBenefits');
//         Route::get('titleDesc', 'App\Http\Controllers\CMS\HomeController@titleDescBenefits');
//     });
//     Route::prefix('package')->group(function(){
//         Route::get('poins', 'App\Http\Controllers\CMS\HomeController@poinsPackage');
//         Route::get('content', 'App\Http\Controllers\CMS\HomeController@contentPackage');
//     });

//     // Route::get('tes', 'App\Http\Controllers\HomeController@tes');
// });

// Route::prefix('blog')->group(function(){
//     Route::get('list', 'App\Http\Controllers\CMS\BlogController@listBlog');
//     Route::get('edit', 'App\Http\Controllers\CMS\BlogController@editBlog');
//     Route::get('add', 'App\Http\Controllers\CMS\BlogController@addBlog');
// });

Route::prefix('about')->group(function(){
    Route::get('list', 'CMS\AboutController@listMedsos');
    Route::get('edit', 'App\Http\Controllers\CMS\AboutController@editMedsos');
    Route::get('add', 'App\Http\Controllers\CMS\AboutController@addMedsos');
    Route::get('personal', 'App\Http\Controllers\CMS\AboutController@personalData');
    Route::get('desc', 'App\Http\Controllers\CMS\AboutController@desc');
});