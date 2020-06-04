<?php
/**
 * https://liuhongwei3.github.io Inc.
 * Name: checkcode.php
 * Date: 2020/5/25 下午2:07
 * Author: Tadm
 * Copyright (c) 2020 All Rights Reserved.
 */

$count = 5;
$charsets = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$len = strlen($charsets);
$len = $len - 1;
$code = '';
for ($i = 0; $i < $count; $i++) {
    $code .= $charsets[mt_rand(0, $len)];
}
session_start();
$_SESSION['checkcode'] = $code;
//echo $code;
$img_w = 80;
$img_h = 40;
$font = 5;
$font_w = imagefontwidth($font);
$font_h = imagefontheight($font);
$code_width = $count * $font_w;
$code_x = ($img_w - $code_width) / 2;
$code_y = ($img_h - $font_h) / 2;
$img = imageCreateTrueColor($img_w, $img_h);
$bg_color = imageColorAllocate($img, 0xcc, 0xcc, 0xcc);
imageFill($img, 0, 0, $bg_color);
$code_color = imagecolorallocate($img, mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100));
imagestring($img, $font, $code_x, $code_y, $code, $code_color);
for ($i = 0; $i < 300; $i++) {
    $color = imagecolorallocate($img, mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100));
    imagesetpixel($img, mt_rand(0, $img_w), mt_rand(0, $img_h), $color);
}
header("content-type:image/png");
imagePng($img);