<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Asus
 * Date: 6/24/14
 * Time: 9:08 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Soknann\Reg\Libraries;


use Soknann\Reg\GroupModel;

class Lookup {
    public function getUserActiveList(){
        return array('1'=>'Yes','0'=>'No');
    }

    public function getGroupList(){
        return GroupModel::lists('name','id');
    }
}