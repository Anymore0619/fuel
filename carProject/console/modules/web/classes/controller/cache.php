<?php
/**
 * Created by PhpStorm.
 * User: 15874
 * Date: 2018/5/22
 * Time: 22:29
 */

namespace web;

/**
 * Class Controller_Cache
 * @package web
 * ways1:定义在static静态方法中
 */
class Controller_Cache extends \Controller{
    public static function get_index(){

        \Cache::set('test','aaa',3600*3);

        try{
            $content = \Cache::get('test');
        }
        catch (\CacheNotFoundException $e){
            $content = 'Not Found';
        }

        echo $content;
    }

    /**
     * ways2:通过\Cache::forge使用
     */
    public function get_obj(){
        $options = array('1','3');

        $cache=\Cache::forge('test2',$options);//初始值

//        $myData = '4';
//
//        $cache->set($myData, 604800);//覆盖

        try{
            $content = \Cache::get('test2');
        }
        catch (\CacheNotFoundException $e){
            $content = 'Not Found';
        }

        echo $content;

    }
}



