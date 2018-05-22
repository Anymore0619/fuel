<?php
/**
 * Created by PhpStorm.
 * User: liaosiqun
 * Date: 2018/3/30
 * Time: 11:37
 */

namespace web;


class Controller_Demo extends \Controller
{
    public function before(){
        echo 'before';
    }

    public function get_index(){
        $data = array();
        $data["username"] = 'xiaoming';
        $data["psw"] = '123456';
        return \View::forge('web/index',$data);
    }

    public function get_index2(){
        $view = \View::forge('web/index');

//        $view -> username = 'xiaoming';
//        $view -> psw = '123456';

        $view->set('username','xiaoming');
        $view->set('psw','123456');

        return $view;
    }

    public function get_index3(){
        $view = \View::forge('web/layout');
        $params = [
            'username'  =>  'Joe14',
            'title'  =>  'title',
            'site_time'  =>  'Website',
            'logo_text'  =>  'Website',
        ];

        $view->set_global($params);

        $view->header = \View::forge('web/header');
        $view->content = \View::forge('web/content');
        $view->footer = \View::forge('web/footer');

        return $view;
    }

}