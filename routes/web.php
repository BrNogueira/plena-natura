<?php

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

Route::get('/', 'HomeController@index')->name('home');


Route::post('/promocoes/emails/cadastrar', 'HomeController@sendEmailToPromotions');
Route::get('/promocoes/emails', 'HomeController@showEmails');


Route::post('key', 'Auth\CodController@sendEmailCod');
Route::post('access/auth/cod','Auth\CodController@loginAccessKey');
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

// Produtos
Route::get('/produto/{slug}', 'ProductsController@productView');
Route::get('/categoria/{slug}', 'ProductsController@categoryView');
Route::get('/search', 'ProductsController@searchProducts');
Route::get('/carrinho', 'CartController@index');

Route::get('/identificacao', 'IdentificationController@index');


//checkout
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
// Route::get('/carrinho/checkout/pagamento', 'PayController@index')->name('payment.index');

Route::get('/recibo', 'ReciboController@index');

Route::post('/deleteCart/{id}', 'CartController@removeFromCart');
Route::post('/deleteCart', 'CartController@removeFromCart');
Route::post('cart', 'CartController@addToCart');
Route::post('/insertcoupon', 'CartController@insertCoupon');
Route::post('/deadline', 'CartController@getDeadline');
Route::post('selectDeadline', 'CartController@setDeadline');

//pedidos
Route::get('/meus-pedidos', 'MeusPedidosController@index');

//Painel de Controle - Endereços

Route::get('/meus-enderecos', 'AddressController@index');
Route::get('/meus-enderecos/novo', 'AddressController@newAddress');
Route::post('/meus-enderecos/novo', 'AddressController@new');
Route::get('/meus-enderecos/editar/{id}', 'AddressController@editAddress');
Route::post('/meus-enderecos/editar/{id}', 'AddressController@edit');
Route::get('/address/delete/{id}', 'AddressController@delete');
Route::post('/address/setmain/{id}', 'AddressController@setMain');

//Painel de controle - Dados cadastrais e usuário
Route::get('/dados-pessoais', 'UsersController@personalData');
Route::post('/dados-pessoais', 'UsersController@changePersonalData');
Route::get('/dados-cadastrais', 'UsersController@registrationData');
Route::post('/dados-cadastrais/email', 'UsersController@changeEmail');
Route::post('/dados-cadastrais/senha', 'UsersController@changePassword');



//CallCenter - Atendimento

Route::get('/atendimento', 'CallCenterController@atendimento');
Route::post('/atendimento', 'CallCenterController@enviarAtendimento');
Route::get('/duvidas', 'CallCenterController@duvidas');
Route::get('/aempresa', 'CallCenterController@empresa');
Route::get('/fretes-e-prazos', 'CallCenterController@fretes');
Route::get('/politica-de-troca', 'CallCenterController@troca');
Route::get('/politica-de-privacidade', 'CallCenterController@privacidade');

// Para testes

Route::get('insertall', 'ProductsController@insertAll');
Route::post('/alterarlink/{id}', 'HomeController@alterarLinks');



// Administrador
  Route::prefix('admin')->group(function() {
    Route::get('/', 'Admin\HomeController@index');
    Route::get('/sms', 'Admin\SMSController@index');
    Route::post('/sms', 'Admin\SMSController@save');
    Route::get('/login', 'Admin\LoginController@showLoginForm');
    Route::post('/login', 'Admin\LoginController@login')->name("admin.login");
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');


    Route::get('/categorias', 'Admin\CategoryController@index');
    Route::get('/categorias/novo', 'Admin\CategoryController@insertCategoryForm');
    Route::post('/categorias/novo', 'Admin\CategoryController@store');
    Route::get('/categorias/json', 'Admin\CategoryController@storeJson');
    Route::get('/categorias/editar/{id}', 'Admin\CategoryController@editCategoryForm');
    Route::post('/categorias/editar/{id}', 'Admin\CategoryController@edit');
    Route::post('/categorias/delete', 'Admin\CategoryController@delete');

    Route::get("/produtos", 'Admin\ProductsController@index');
    Route::get("/produtos/novo", 'Admin\ProductsController@insertProductForm');
    Route::post("/produtos/novo", 'Admin\ProductsController@store');
    Route::get("/produtos/editar/{id}", 'Admin\ProductsController@editProductForm');
    Route::post("/produtos/editar/{id}", 'Admin\ProductsController@edit');
    Route::post("/produtos/delete", 'Admin\ProductsController@delete');

    Route::get('/clientes', 'Admin\UsersController@index');
    Route::get('/clientes/novo', 'Admin\UsersController@insertUserForm');
    Route::post('/clientes/novo', 'Admin\UsersController@store');
    Route::get('/clientes/editar/{id}', 'Admin\UsersController@editUserForm');
    Route::post('/clientes/editar/{id}', 'Admin\UsersController@edit');
    Route::post('/clientes/delete', 'Admin\UsersController@delete');

    Route::get('/fornecedores', 'Admin\BrandsController@index');
    Route::get('/fornecedores/novo', 'Admin\BrandsController@insertProviderForm');
    Route::post('/fornecedores/novo', 'Admin\BrandsController@store');
    Route::get('/fornecedores/json', 'Admin\BrandsController@storeJson');
    Route::get('/fornecedores/editar/{id}', 'Admin\BrandsController@editBrandForm');
    Route::post('/fornecedores/editar/{id}', 'Admin\BrandsController@edit');
    
    Route::post('/fornecedores/editar', 'Admin\BrandsController@imageBrandsPost')->name('image.upload.post');

    Route::post('/fornecedores/delete', 'Admin\BrandsController@delete');

    Route::get('/atendimento/departamentos', 'Admin\DepartmensController@index');
    Route::get('/atendimento/departamentos/novo', 'Admin\DepartmensController@create');
    Route::post('/atendimento/departamentos/novo', 'Admin\DepartmensController@store');
    Route::get('/atendimento/departamentos/editar/{id}', 'Admin\DepartmensController@edit');
    Route::post('/atendimento/departamentos/editar/{id}', 'Admin\DepartmensController@update');
    Route::post('/atendimento/departamentos/delete', 'Admin\DepartmensController@destroy');

    Route::get('/ajuda/empresa', 'Admin\CallCenterController@company');
    Route::post('/ajuda/empresa', 'Admin\CallCenterController@updateCompany');
    Route::get('/ajuda/fretes-e-prazos', 'Admin\CallCenterController@deadlines');
    Route::post('/ajuda/fretes-e-prazos', 'Admin\CallCenterController@updateDeadlines');
    Route::get('/ajuda/politica-de-troca', 'Admin\CallCenterController@exchangePolicy');
    Route::post('/ajuda/politica-de-troca', 'Admin\CallCenterController@updateExchangePolicy');
    Route::get('/ajuda/politica-de-privacidade', 'Admin\CallCenterController@privacyPolicy');
    Route::post('/ajuda/politica-de-privacidade', 'Admin\CallCenterController@updatePrivacyPolicy');

    Route::get('/ajuda/duvidas', 'Admin\DoubtsController@index');
    Route::get('/ajuda/duvidas/novo', 'Admin\DoubtsController@create');
    Route::post('/ajuda/duvidas/novo', 'Admin\DoubtsController@store');
    Route::get('/ajuda/duvidas/editar/{id}', 'Admin\DoubtsController@edit');
    Route::post('/ajuda/duvidas/editar/{id}', 'Admin\DoubtsController@update');
    Route::post('/ajuda/duvidas/delete', 'Admin\DoubtsController@destroy');

    Route::get('/configuracoes', 'Admin\SettingsController@index');
    Route::post('/configuracoes', 'Admin\SettingsController@update');
  });
