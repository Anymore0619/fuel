<?php
/**
 * Created by PhpStorm.
 * User: liaosiqun
 * Date: 2018/4/2
 * Time: 15:41
 */

namespace web;


class Controller_Arr extends \Controller
{
    public function action_index(){
        $arr = ["one" => 1 ,"two" => 2];
        $data = [
            'arr' => $arr,
            'is_multi' => \Arr::is_multi($arr,false),
            'is_assoc' => \Arr::is_assoc($arr,false),
            'arr2' => \Arr::keyval_to_assoc($arr,'english','num')
        ];

        return \View::forge('web/arr',$data);
    }
}