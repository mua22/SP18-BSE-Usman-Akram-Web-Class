

<?php 
/*Route::get("/",function(){
	return "Hello Classs";
});*/

Route::get('/',function(){
	return view('homepage');
});

Route::get('/products/children-wear/show',function(){
	return view('kids');
})->name('kids');

Route::get('/men-wear',function(){
	return view('men');
});
?>