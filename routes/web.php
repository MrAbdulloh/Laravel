<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
                //all categories

Route::get('categories' , function (){
    $categories = App\Models\Category::all();
   return view('categories.index')->with(['categories' =>$categories]);
})->name('categories.index');

//          creat categories

Route::get('categories/create',  function (){
    return view('categories.create');
})->name('categories.create');

Route::post('categories', function (Illuminate\Http\Request $request){
    Category::create([
        'name'=>$request->name
    ]);
    return redirect()->route('categories.index');
})->name('categories.store');

//              edit

Route::get('categories/edit/{id}',  function (Illuminate\Http\Request $request, $id){
    $category = Category::find($id);

    return view('categories.edit', compact('category'));
})->name('categories.edit');

Route::put('categories/{id}', function (Illuminate\Http\Request $request, $id){
    $category = Category::find($id);

    $category->update([
        'name'=>$request->name
    ]);
    return redirect()->route('categories.index');
})->name('categories.update');

Route::delete('categories', function (Illuminate\Http\Request $request, $id){
    $category = Category::find($id);
    $category->delete();

    return redirect()->route('categories.index');

})->name('categories.destroy');

Route::get('test', function (){
    dd(\route('categories.store'));
});



//_______________________________________________________________________________
Route::get('Products',function (){
$Products = Product::all();
return view('product.index')->with(['Products'=>$Products]);
})->name('product.index');

// create

Route::get('Products/create',  function (){
    return view('product.create');
})->name('product.create');


Route::post('Products', function (Illuminate\Http\Request $request){
    Product::create([
        'name'=>$request->name,
        'price'=>$request->price
    ]);
    return redirect()->route('product.index');
})->name('products.store');
