
<?php

use Illuminate\Support\Facades\Route;


Route::group([

    'as'=>'neputer',
    'prefix'=>'neputer',
    'middleware'=>'web',

],function (){

//        Route::get('product','ProductController');
});
