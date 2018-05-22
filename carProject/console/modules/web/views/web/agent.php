
<?php
/**
 * Created by PhpStorm.
 * User: liaosiqun
 * Date: 2018/4/2
 * Time: 14:58
 */
?>

<p>浏览器基本信息：</p>
<p>当前浏览器：<?= $data['browser']?></p>
<p>是否接受utf-8编码：<?= $data['is_accept']?></p>
<p>是否在移动设备上：<?= var_dump($data['is_mobile'])?></p>
