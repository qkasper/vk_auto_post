<?php
error_reporting(0);
//https://github.com/FaustVlll/vkAPI
require 'vk.php';
require 'post.php';
$token = '5f04c3b860603124faf72b71fd1fd8407b42d72833ef4f64ddcc47a161096c2d10e1db306b1f0609abc41';
$user_id = '213902309';
$group_id = null;
$text = 'Use this form to add/update discounts to the system. Clicking on the section title will open a help file explaining that section.';
$image = 'http://www.iluvfabrix.com/uploads/p61t2.jpg';
try {
    $vk = \vkApi\vk::create($token);
    $post = new \vkApi\post($vk, $user_id, $group_id);
    $post->post($text, $image);
    echo 'Success!';
} catch(Exception $e){
    echo 'Error: <b>' . $e->getMessage() . '</b><br />';
    echo 'in file "' . $e->getFile() . '" on line ' . $e->getLine();
}