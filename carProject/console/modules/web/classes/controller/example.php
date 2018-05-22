<?php
/**
 * Created by PhpStorm.
 * User: liaosiqun
 * Date: 2018/3/30
 * Time: 16:03
 */
namespace web;

class Controller_Example extends \Controller_Template
{
    public $template = 'tpl_default';
    public function action_index($id = 0){
        echo $id;
        $data = array();
        $this -> template -> title = 'example page';
        $this -> template ->content =\View::forge('web/example');
    }

    public function action_item($id = 0){
        echo $id;
        $this -> template -> title = 'example page';
        $this -> template ->content =\View::forge('web/example');
    }

    public function action_agent(){
        $data = [
            'is_accept' => 'false', //檢查目前的瀏覽器是否接受一個特定的字符集。
            'browser' => \Agent::browser(),
            'is_mobile' => \Agent::is_mobiledevice(),
        ];

        if(\Agent::accepts_charset('utf-8')){
            $data['is_accept'] = 'true';
        }

        \View::set_global([
            'data' => $data
        ]);
        $this -> template -> title = 'browser agent';
        $this -> template ->content =\View::forge('web/agent');
    }

}