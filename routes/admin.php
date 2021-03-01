<?php

Route::prefix('cms')->group(function(){
    Route::get('welcome', 'CMS\WelcomeController@index')->name('welcome');
    Route::prefix('home')->group(function(){
        Route::get('slider', 'CMS\CmsHomeController@slider');
        Route::prefix('trouble')->group(function(){
            Route::get('list', 'CMS\CmsHomeController@listTrouble');
            Route::get('edit/{id}', 'CMS\CmsHomeController@editListTrouble');
            Route::get('addList', 'CMS\CmsHomeController@addListTrouble');
            Route::post('uploadTrouble', 'CMS\CmsHomeController@uploadListTrouble')->name('upload.ListTrouble');
            Route::post('updateTrouble', 'CMS\CmsHomeController@updateListTrouble')->name('update.ListTrouble');
            Route::get('delete/{id}', 'CMS\CmsHomeController@deleteListTrouble');

            Route::get('poins', 'CMS\CmsHomeController@listPoinsTrouble');
            Route::get('editPoins/{id}', 'CMS\CmsHomeController@editPoinsTrouble');
            Route::get('addPoins', 'CMS\CmsHomeController@addPoinsTrouble');
            Route::post('uploadTrouble', 'CMS\CmsHomeController@uploadPoinsTrouble')->name('upload.PoinsTrouble');
            Route::post('updateTrouble', 'CMS\CmsHomeController@updatePoinsTrouble')->name('update.PoinsTrouble');
            Route::get('deletePoins/{id}', 'CMS\CmsHomeController@deletePoinsTrouble');
        });
        Route::prefix('excellence')->group(function(){
            Route::get('poins', 'CMS\CmsHomeController@listPoinsExcellence');
            Route::get('addList', 'CMS\CmsHomeController@addPoinsExcellence');
            Route::post('uploadExcellence', 'CMS\CmsHomeController@uploadPoinsExcellence')->name('upload.PoinsExcellence');
            Route::post('updateExcellence', 'CMS\CmsHomeController@updatePoinsExcellence')->name('update.PoinsExcellence');
            Route::get('editExcellence/{id}', 'CMS\CmsHomeController@editPoinsExcellence');
            Route::get('deleteExcellence/{id}', 'CMS\CmsHomeController@deletePoinsExcellence');

            
            Route::get('titleBg', 'CMS\CmsHomeController@titleBgExcellence');
        });
        Route::prefix('botLogic')->group(function(){
            Route::get('poins', 'CMS\CmsHomeController@listPoinsBotLogic');
            Route::get('addList', 'CMS\CmsHomeController@addPoinsBotLogic');
            Route::post('uploadBotLogic', 'CMS\CmsHomeController@uploadPoinsBotLogic')->name('upload.PoinsBotLogic');
            Route::post('updateBotLogic', 'CMS\CmsHomeController@updatePoinsBotLogic')->name('update.PoinsBotLogic');
            Route::get('editBotLogic/{id}', 'CMS\CmsHomeController@editPoinsBotLogic');
            Route::get('deleteBotLogic/{id}', 'CMS\CmsHomeController@deletePoinsBotLogic');

            Route::get('titleDesc', 'CMS\CmsHomeController@titleDescBgBotLogic');
        });
        Route::prefix('benefit')->group(function(){
            Route::get('poins', 'CMS\CmsHomeController@listPoinsBenefits');
            Route::get('addList', 'CMS\CmsHomeController@addPoinsBenefits');
            Route::post('uploadPoinsBenefits', 'CMS\CmsHomeController@uploadPoinsBenefits')->name('upload.PoinsBenefits');
            Route::post('updatePoinsBenefits', 'CMS\CmsHomeController@updatePoinsBenefits')->name('update.PoinsBenefits');
            Route::get('editPoinsBenefits/{id}', 'CMS\CmsHomeController@editPoinsBenefits');
            Route::get('deletePoinsBenefits/{id}', 'CMS\CmsHomeController@deletePoinsBenefits');

            
            Route::get('titleDesc', 'CMS\CmsHomeController@titleDescBenefits');
        });
        Route::prefix('package')->group(function(){
            Route::get('poins', 'CMS\CmsHomeController@poinsPackage');
            Route::get('content', 'CMS\CmsHomeController@contentPackage');
        });
    
        // Route::get('tes', 'App\Http\Controllers\CmsHomeController@tes');
    });
    
    Route::prefix('blog')->group(function(){
        Route::get('list', 'CMS\CmsArticleController@listArticle');
        Route::get('edit/{id}', 'CMS\CmsArticleController@editArticle');
        Route::get('add', 'CMS\CmsArticleController@addArticle');
        Route::post('uploadBlog', 'CMS\CmsArticleController@uploadArticle')->name('upload.blog');
        Route::post('updateBlog', 'CMS\CmsArticleController@updateArticle')->name('update.blog');
        Route::get('delete/{id}', 'CMS\CmsArticleController@deleteArticle');
    });

    
    Route::prefix('about')->group(function(){
        Route::get('list', 'CMS\AboutController@listMedsos');
        Route::get('edit', 'CMS\AboutController@editMedsos');
        Route::get('add', 'CMS\AboutController@addMedsos');
        Route::get('personal', 'CMS\AboutController@personalData');
        Route::get('desc', 'CMS\AboutController@desc');
    });

});

