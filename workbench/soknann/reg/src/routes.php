<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Asus
 * Date: 6/21/14
 * Time: 12:45 PM
 * To change this template use File | Settings | File Templates.
 */

Route::get('/',function(){
    return Redirect::route('reg.home');
});
Route::group(array('prefix' => 'reg','before' => 'guest.reg'),function () {
    Route::get('login',array(
        'as'=>'reg.login',
        'uses'=>'Soknann\Reg\HomeController@getLogin'
    ));
    Route::post('login','Soknann\Reg\HomeController@postLogin');
});

Route::group(array('prefix' => 'reg','before' => 'auth.reg'),function () {
    Route::get('home', array(
        'as' => 'reg.home',
        'uses' => 'Soknann\Reg\HomeController@getHome',
    ));
    Route::get('logout', array(
        'as' => 'reg.logout',
        'uses' => 'Soknann\Reg\HomeController@getLogout',
    ));
    Route::get('user', array(
        'as' => 'reg.user.index',
        'uses' => 'Soknann\Reg\UserController@index',
    ));
    Route::post('user',array(
        'as'=>'reg.user.store',
        'uses'=>'Soknann\Reg\UserController@store',
    ));
    Route::get('user/add', array(
        'as' => 'reg.user.add',
        'uses' => 'Soknann\Reg\UserController@add',
    ));

    Route::get('user/edit/{id}', array(
        'as' => 'reg.user.edit',
        'uses' => 'Soknann\Reg\UserController@edit',
    ));

    Route::get('user/{id}/edit', array(
        'as' => 'reg.user.edit',
        'uses' => 'Soknann\Reg\UserController@edit',
    ));

    Route::put('user/update/{id}', array(
        'as' => 'reg.user.update',
        'uses' => 'Soknann\Reg\UserController@update',
    ));
    Route::delete('user/destroy/{id}',array(
        'as'=>'reg.user.destroy',
        'uses'=>'Soknann\Reg\UserController@destroy',
    ));
});

/*
 * DataTable Index
 */
Route::get('api/user',array(
    'as'=>'api.user',
    'uses'=>'Soknann\Reg\UserController@getDatatable'
));


Route::get('test',function(){
    return Hash::make('123456');

});