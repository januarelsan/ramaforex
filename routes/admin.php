<?php

Route::prefix('cms')->group(function(){
    Route::get('welcome', 'CMS\WelcomeController@index')->name('welcome');
    Route::prefix('home')->group(function(){
        Route::get('slider', 'CMS\HomeController@slider');
        Route::prefix('trouble')->group(function(){
            Route::get('poins', 'CMS\HomeController@poinsTrouble');
            Route::get('list', 'CMS\HomeController@listTrouble');
        });
        Route::prefix('excellence')->group(function(){
            Route::get('poins', 'CMS\HomeController@poinsExcellence');
            Route::get('titleBg', 'CMS\HomeController@titleBgExcellence');
        });
        Route::prefix('botLogic')->group(function(){
            Route::get('poins', 'CMS\HomeController@poinsBgBotLogic');
            Route::get('titleDesc', 'CMS\HomeController@titleDescBgBotLogic');
        });
        Route::prefix('benefit')->group(function(){
            Route::get('poins', 'CMS\HomeController@poinsBenefits');
            Route::get('titleDesc', 'CMS\HomeController@titleDescBenefits');
        });
        Route::prefix('package')->group(function(){
            Route::get('poins', 'CMS\HomeController@poinsPackage');
            Route::get('content', 'CMS\HomeController@contentPackage');
        });
    
        // Route::get('tes', 'App\Http\Controllers\HomeController@tes');
    });
    
    Route::prefix('blog')->group(function(){
        Route::get('list', 'CMS\BlogController@listBlog');
        Route::get('edit/{id}', 'CMS\BlogController@editBlog');
        Route::get('add', 'CMS\BlogController@addBlog');
        Route::post('uploadBlog', 'CMS\BlogController@uploadBlog')->name('upload.blog');
        Route::post('updateBlog', 'CMS\BlogController@updateBlog')->name('update.blog');
        Route::get('delete/{id}', 'CMS\BlogController@deleteBlog');
    });

    
    Route::prefix('about')->group(function(){
        Route::get('list', 'CMS\AboutController@listMedsos');
        Route::get('edit', 'CMS\AboutController@editMedsos');
        Route::get('add', 'CMS\AboutController@addMedsos');
        Route::get('personal', 'CMS\AboutController@personalData');
        Route::get('desc', 'CMS\AboutController@desc');
    });

});

