<?php

/*Route::get('/',function (){
return 'Hello C Section';
});
*/
/*Route::get('/',function (){
return view('welcome');
});*/

//Route::get('/','ProductsController@homepage');
Route::resource('products','ProductsController');
Route::get('/heavy-bikes',function (){
return view('bikes');
})->name('bikes');


Route::get('/used-laptop',function (){
return view('laptops');
})->name('laptops');
Route::get('/contact-us',function (){
return view('contact');
});


?>