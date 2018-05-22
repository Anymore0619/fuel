<?php
/**
 * Created by PhpStorm.
 * User: liaosiqun
 * Date: 2018/4/4
 * Time: 14:05
 */

namespace web;


class Controller_Dbase extends \Controller
{
    public function get_index(){
        //运行sql语句
        $query = \DB::query('SELECT * from users');
        //$result = $query->execute();
        //var_dump($result);

        echo '<br>';

        //查询
        //$result2 = \DB::query('SELECT * from users',\DB::SELECT) ->execute();
        //var_dump($result2);

        $columns = array('id','username');
        $result3 = \DB::select_array($columns) -> from ('users') -> execute();
        //print_r($result3 ->as_array());

        echo '<br>';

        //返回结果数据处理
        $result4 = \DB::select('id','username') ->from('users') ->as_assoc() -> execute();//以关联数组形式
        print_r($result4);

        echo '<br>';

        $result5 = \DB::select('username') ->from('users') ->as_object() -> execute();//以对象形式
        print_r($result5);

        echo '<br>';

        //计算返回条数
        $nums = count($result4);
        echo $nums;

        //遍历返回结果
        foreach ($result4 as $item){
            print_r($item['username'].'<br>');
        }

        echo '<br>';
        $key_value = $result3 -> as_array('id','username');
        foreach ($key_value as $id => $username){
            print_r($id.'---'.$username.'<br>');
        }

        echo '<br>';

        //筛选
        //Will execute SELECT * FROM `users` WHERE `id` = 1
        $result6 = \DB::select('username') ->from('users') -> where('username','xiaoming') ->execute();
        print_r($result6);
        echo '<br>';

        //Will execute SELECT * FROM `users` WHERE `id` IN (2,10)
        $id_arr = array(2,10);
        $result7 = \DB::select('username') ->from('users') -> where('id','in',$id_arr) ->execute();
        print_r($result7);
        echo '<br>';

        // Will execute SELECT * FROM `users` WHERE `id` BETWEEN 1 AND 2
        $result8 = \DB::select('username') -> from('users') ->where('id','between',$id_arr) ->execute();
        print_r($result8);
        echo '<br>';

        // SELECT * FROM `users` WHERE `id` != 1

        // Will execute SELECT * FROM `users` WHERE `name` LIKE "john%"
        $who = 'No%';
        $result9 = \DB::select('username') -> from('users') ->where('username','like',$who) -> execute();
        print_r($result9);

        echo '<br>';
        //排序
        $result10 = \DB::select('username') -> from('users') ->order_by('name','asc');//升序
        print_r($result10.'<br>');

        //deasc 降序

        print_r ('----<br>');
        //limit offset
        $result11 = \DB::select('id') -> from('users') ->limit(5) ->execute();
        print_r($result11);
        echo '<br>';

        $result12 = \DB::select('id') ->from ('users') ->limit(5) -> offset(10) ->execute();
        print_r($result12);
    }
}