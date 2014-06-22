<?php namespace Soknann\Reg;
/**
 * Created by JetBrains PhpStorm.
 * User: Asus
 * Date: 6/21/14
 * Time: 5:05 PM
 * To change this template use File | Settings | File Templates.
 */
use Controller;

class BaseController extends Controller {
    public function renderLayout($view){
        $this->layout = $view;
        $this->layout->title = 'Registration';
        $this->layout->logo = 'packages/soknann/reg/bs-admin/img/logo.png';
    }
}