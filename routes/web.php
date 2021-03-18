<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/home', 'HomeController@index')->name('home');
Route::redirect('/home', '/');

// Client Routes 
Route::get('/', 'Client\HomeController@index')->name('client.home');
Route::get('/about-us', 'Client\AboutController@index')->name('client.about');
Route::get('/forex-masterclass', 'Client\ForexController@index')->name('client.forex');

// Vip Package
Route::get('/vip-package', 'Client\VipController@index')->name('client.vip');
// Route::post('/package/add', 'Client\CartController@add')->name('client.cart.add');

Route::get('/support', 'Client\SupportController@index')->name('client.support');
// Client Routes

// Client Blog Routes
Route::get('/inkblog', 'Client\BlogController@index')->name('client.blog');
Route::get('/inkblog/{slug}', 'Client\BlogController@show')->name('client.blog.show');
// Client Blog Routes

// Affiliate Admin Panel Routes
Route::prefix('affiliate')->group(function(){
    Route::get('/dashboard', 'Client\AffiliateDashboardController@index')->name('client.affiliate.dashboard');
    Route::get('/generate-link', 'Client\Dashboard\Affiliate\GenerateLinkController@index')->name('client.affiliate.generate.index');
    Route::patch('/generate-link', 'Client\Dashboard\Affiliate\GenerateLinkController@update')->name('client.affiliate.generate.update');
});
// Affiliate Admin Panel Routes

// Membership Auth Routes
Route::get('/membership/login', 'Client\MemberController@loginView')->name('client.member.login.view');
Route::get('/membership/register', 'Client\MemberController@registerView')->name('client.member.register.view');
Route::post('/membership/register', 'Client\MemberController@register')->name('client.member.register');
// Membership Auth Routes

// Membership Admin Panel Routes
Route::prefix('membership')->group(function(){
    Route::get('/dashboard', 'Client\MemberDashboardController@index')->name('client.member.dashboard');
    Route::get('/downloads', 'Client\MemberDashboardController@downloads')->name('client.member.downloads');

    // Membership Admin Panel Address Routes
    Route::prefix('address')->group(function(){
        Route::get('/', 'Client\Dashboard\Membership\AddressController@index')->name('client.member.address.index');

        // Billing Address Routes
        Route::get('/billing/add', 'Client\Dashboard\Membership\AddressController@addBilling')->name('client.member.address.billing.add');
        Route::post('/billing', 'Client\Dashboard\Membership\AddressController@storeBilling')->name('client.member.address.billing.store');
        Route::get('/billing/edit', 'Client\Dashboard\Membership\AddressController@editBilling')->name('client.member.address.billing.edit');
        Route::patch('/billing', 'Client\Dashboard\Membership\AddressController@updateBilling')->name('client.member.address.billing.update');

        // Shipping Address Routes
        Route::get('/shipping/add', 'Client\Dashboard\Membership\AddressController@addShipping')->name('client.member.address.shipping.add');
        Route::post('/shipping', 'Client\Dashboard\Membership\AddressController@storeShipping')->name('client.member.address.shipping.store');
        Route::get('/shipping/edit', 'Client\Dashboard\Membership\AddressController@editShipping')->name('client.member.address.shipping.edit');
        Route::patch('/shipping', 'Client\Dashboard\Membership\AddressController@updateShipping')->name('client.member.address.shipping.update');
    });
    // Membership Admin Panel Address Routes

    // Membership Admin Panel Account Routes
    Route::get('/account', 'Client\Dashboard\Membership\AccountController@index')->name('client.member.account.index');
    Route::patch('/account', 'Client\Dashboard\Membership\AccountController@update')->name('client.member.account.update');
    // Membership Admin Panel Account Routes


    Route::get('/payment-methods', 'Client\MemberDashboardController@paymentMethods')->name('client.member.payment-methods');
    Route::get('/cupons', 'Client\MemberDashboardController@cupons')->name('client.member.cupons');

    // Order Admin Panel Routes
    Route::get('/orders', 'Client\Dashboard\Membership\OrderController@index')->name('client.member.order.index');


    // Super Admin Panel Routes
    Route::prefix('admin')->group(function(){
        // Super Admin Dashboard
        Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');

        // Super Admin Package
        Route::get('/package', 'Admin\PackageController@index')->name('admin.package.index');
        Route::get('/package/add', 'Admin\PackageController@create')->name('admin.package.create');
        Route::post('/package', 'Admin\PackageController@store')->name('admin.package.store');

        // Super Admin User 
        Route::get('/user', 'Admin\UserController@index')->name('admin.user.index');
        Route::delete('/user/{id}', 'Admin\UserController@destroy')->name('admin.user.delete');

        // Super Admin User 
        Route::get('/order', 'Admin\OrderController@index')->name('admin.order.index');
        Route::get('/order/{id}', 'Admin\OrderController@show')->name('admin.order.show');
        Route::delete('/order/{id}', 'Admin\OrderController@destroy')->name('admin.order.delete');
        
    });
    // Super Admin Panel Routes
});
// Membership Admin Panel Routes

// Cart Routes
Route::get('/cart', 'Client\CartController@index')->name('client.cart.index');
Route::delete('/cart/{id}', 'Client\CartController@destroy')->name('client.cart.delete');

// Checkout Routes
Route::get('/checkout', 'Client\OrderController@index')->name('client.order.index');
Route::post('/checkout', 'Client\OrderController@checkout')->name('client.order.checkout');
Route::get('/checkout/pay', 'Client\OrderController@pay_paypal')->name('client.order.pay');
Route::get('/checkout/pay/confirm', 'Client\OrderController@confirm_pay_paypal')->name('client.order.confirm.pay');

// Package Store Routes
Route::get('/package', 'Client\PackageController@index')->name('client.package.index');
Route::post('/package/add', 'Client\CartController@add')->name('client.cart.add');

