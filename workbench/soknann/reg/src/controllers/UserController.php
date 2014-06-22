<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Asus
 * Date: 6/22/14
 * Time: 3:53 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Soknann\Reg;

use Soknann\Reg\BaseController;
use Chumper\Datatable\Datatable;
class UserController extends BaseController{
    public function index()
    {
        $item = array(
            'Action',
            'ID',
            'Username',
            'Group',
            'Expire Day',
            'Activated',
        );
//        $data['btnAction'] = array('Add New' => route('cpanel.user.create'));
        $tb = new Datatable();
        $data['table'] = $tb->table()
            ->addColumn($item) // these are the column headings to be shown
            ->setUrl(route('api.user')) // this is the route where data will be retrieved
            ->setOptions(
                'aLengthMenu',
                array(
                    array('10', '25', '50', '100', '-1'),
                    array('10', '25', '50', '100', 'All')
                )
            )
            ->setOptions("iDisplayLength", '10')// default show entries
            ->render('soknann/reg::template.dataTable');
        return $this->renderLayout(
            \View::make('soknann/reg::users.index', $data)
        );
    }

    public function getDatatable()
    {
        $item = array(
            'id',
            /*'first_name',
            'last_name',
            'email',*/
            'username',
            'cp_group_id_arr',
            'expire_day',
            'activated',
            /*'activated_at'*/
        );
            $arr = \DB::table('tbl_user')->orderBy('id');

        return \Datatable::query($arr)
            ->addColumn(
                'action',
                function ($model) {
                    return 'no';
                })
            ->showColumns($item)
            ->searchColumns(array('id', 'username'))
            ->orderColumns($item)
            ->make();
    }

}