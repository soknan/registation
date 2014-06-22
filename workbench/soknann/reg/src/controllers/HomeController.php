<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Asus
 * Date: 6/21/14
 * Time: 5:08 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Soknann\Reg;
use Soknann\Reg\BaseController;


class HomeController extends BaseController{
    public function getLogin(){
        return $this->renderLayout(
            \View::make('soknann/reg::dashboard.login')
        );
    }
}