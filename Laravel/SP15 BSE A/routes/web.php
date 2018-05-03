<?php


Route::get('/','PostsController@index');

/*Route::get('/',function (){
    return 'Hello Class';
});*/
/*
Route::get('/',function (){
    return view('frontpage');
});*/

Route::get('/t1',function (){
    return view('type1');
})->name('type-1');

Route::get('/type-2',function (){
    return view('type2');
});

Route::get('/moody',function (){
    return view('moody');
});

