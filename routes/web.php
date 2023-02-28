<?php

use App\Http\Controllers\admin\DashboardController;
use App\Mail\InvoiceOrderMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






//                              -----------------App Routes---------------


//Auth Contol
Route::group(['middleware' => ['auth']], function () {
    //WishList Routes 
    Route::get('/wishlist', [App\Http\Controllers\App\WishlistController::class, 'index'])->name('index.wishlist');
    //CartRoutes
    Route::get('/cart', [App\Http\Controllers\App\CartController::class, 'index'])->name('index.cart');
    //Checkout Routes
    Route::get('/checkout', [App\Http\Controllers\App\CheckoutController::class, 'index'])->name('index.checkout');
    Route::get('/thank-you', [App\Http\Controllers\App\CheckoutController::class, 'thanks'])->name('index.thankyou');
    Route::get('/invoice', [App\Http\Controllers\App\CheckoutController::class, 'sendInvoice'])->name('index.invoice');
    //Orders Routes
    Route::get('/orders', [App\Http\Controllers\App\OrderController::class, 'index'])->name('index.order');
    Route::get('/orders/{id}', [App\Http\Controllers\App\OrderController::class, 'details'])->name('detail.order');
    Route::get('/user-detail', [App\Http\Controllers\App\UserDetailController::class, 'index'])->name('index.userDetail');
});



//Home
Route::get('/', [App\Http\Controllers\App\HomeController::class, 'index'])->name('index.home');
Route::get('/trends', [App\Http\Controllers\App\TrendController::class, 'index'])->name('index.trends');
Route::get('/arrivals', [App\Http\Controllers\App\ArrivalController::class, 'index'])->name('index.arrivals');

//Search Routes
Route::get('/search', [App\Http\Controllers\App\HomeController::class, 'search'])->name('search.home');



//Categories Routes
Route::group(['prefix' => 'categories'], function () {

    Route::get('/', [App\Http\Controllers\App\CategoryConroller::class, 'index'])->name('index.category.app');
    Route::get('/{slug}', [App\Http\Controllers\App\CategoryConroller::class, 'listProductFromCategory'])->name('list.category.app');



    //Products Routes
    Route::get('/{category_slug}/{product_slug}', [App\Http\Controllers\App\ProductController::class, 'detailProduct'])->name('detail.product.app');
    // Tüm Ürünler Eklenecek




});













//                                      ----------------Admin Routes--------------


Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function () {



    Route::get('/index', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');



    Route::get('/settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('index.setting');
    Route::post('/settings', [App\Http\Controllers\Admin\SettingController::class, 'store'])->name('store.setting');
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('index.user');
    Route::put('/users', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('update.user');







    //Category Routes


    Route::group(['prefix' => 'category'], function () {

        Route::get('/index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('index.category');
        Route::get('/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('create.category');
        Route::post('/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store.category');
        Route::get('{id}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('edit.category');
        Route::put('{id}/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('update.category');
    });





    //Orders Routes


    Route::group(['prefix' => 'orders'], function () {




        Route::get('/index', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('index.orders.admin');
        Route::get('/details/{id}', [App\Http\Controllers\Admin\OrderController::class, 'details'])->name('detail.orders.admin');
        Route::put('/details/{id}', [App\Http\Controllers\Admin\OrderController::class, 'update'])->name('update.orders.admin');
        Route::get('/invoice/{id}', [App\Http\Controllers\Admin\OrderController::class, 'invoiceView'])->name('viewInvoice.orders.admin');
        Route::get('/invoice/{id}/generate', [App\Http\Controllers\Admin\OrderController::class, 'generateInvoice'])->name('generateInvoice.orders.admin');
        Route::get('/invoice/{id}/send-invoice', [App\Http\Controllers\Admin\OrderController::class, 'sendInvoice'])->name('sendInvoice.orders.admin');
    });





    //Brands Routes


    Route::group(['prefix' => 'brand'], function () {


        //  Route::get('/',App\Http\Livewire\Admin\Brand\Index::class);

        Route::get('/index', [App\Http\Controllers\Admin\BrandConroller::class, 'index'])->name('index.brand');
        //Route::get('/create',[App\Http\Controllers\Admin\BrandConroller::class,'create'])->name('index.create');




    });



    //Products Routes


    Route::group(['prefix' => 'product'], function () {


        Route::get('/index', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('index.product');
        Route::get('/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('create.product');
        Route::post('/create', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('store.product');
        Route::get('/{id}/edit', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('edit.product');
        Route::put('/{id}/update', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('update.product');
        Route::get('/{id}/delete', [App\Http\Controllers\Admin\ProductController::class, 'deleteImage'])->name('delete.productImage');
        Route::get('/{category_id}/delete/{product_id}', [App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('delete.product');
        Route::post('/color/delete', [App\Http\Controllers\Admin\ProductController::class, 'deleteProdColor'])->name('delete.color.product');
        Route::post('/color/update', [App\Http\Controllers\Admin\ProductController::class, 'updateProdColor'])->name('update.color.product');
        
        // Route::post('/color/edit/{prod_color_id}',[App\Http\Controllers\Admin\ProductController::class,'updateProdColor'])->name('update.prodColor.product');

        // Route::get('/test', [App\Http\Controllers\Admin\ProductController::class, 'test'])->name('test');
    });


    //Colors Routes

    Route::group(['prefix' => 'color'], function () {

        Route::get('/index', [App\Http\Controllers\Admin\ColorController::class, 'index'])->name('index.color');
        Route::post('/index', [App\Http\Controllers\Admin\ColorController::class, 'store'])->name('store.color');
        Route::get('/{id}/edit', [App\Http\Controllers\Admin\ColorController::class, 'edit'])->name('edit.color');
        Route::put('/{id}/edit', [App\Http\Controllers\Admin\ColorController::class, 'update'])->name('update.color');
        Route::get('/{id}/delete', [App\Http\Controllers\Admin\ColorController::class, 'destroy'])->name('delete.color');
    });




    //Sliders Routes

    Route::group(['prefix' => 'slider'], function () {

        Route::get('/index', [App\Http\Controllers\Admin\SliderController::class, 'index'])->name('index.slider');
        Route::get('/create', [App\Http\Controllers\Admin\SliderController::class, 'create'])->name('create.slider');
        Route::post('/store', [App\Http\Controllers\Admin\SliderController::class, 'store'])->name('store.slider');
        Route::get('/{id}/delete', [App\Http\Controllers\Admin\SliderController::class, 'destroy'])->name('delete.slider');
        Route::get('/{id}/edit', [App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('edit.slider');
        Route::put('/{id}/update', [App\Http\Controllers\Admin\SliderController::class, 'update'])->name('update.slider');
    });
});
