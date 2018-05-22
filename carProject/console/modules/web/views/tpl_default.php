<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2017/8/26
 * Time: 18:33
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>

    <?= Asset::css([
        'bootstrap.css'
    ]); ?>
</head>
<body>
<div id="wrapper">
    <h1><?= $title; ?></h1>

    <div id="content">
        <?= $content; ?>
    </div>
</div>
</body>
</html>
