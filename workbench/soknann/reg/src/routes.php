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
});


Route::get('test',function(){
    return Hash::make('123456');

});