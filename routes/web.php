<!-- <?php

Route::group(['prefix' => 'math'], function(){
    Route::get('/sum/{num1}/{num2}', 'MathController@sum');

    Route::get('/sub', 'MathController@sub');

    Route::get('/mult', 'MathController@mult');

    Route::get('/div', 'MathController@div');
});

Route::resource('country', 'CountryConttoller');
?> -->


<?php
 Route::get('/', 'SiteController@index');
 Route::get('/about', 'SiteController@about');
 Route::get('/contact', 'SiteController@contact');

 Route::get('extra', 'SiteController@extra');
?>