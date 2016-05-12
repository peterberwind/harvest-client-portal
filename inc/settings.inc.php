<?php
//Your Harvest domain
$domain = 'https://antarctic.harvestapp.com';

//email:password of your Harvest account
$credentials = "peter@antarcticcreative.com.com:wonders01";

//key = username
//options array = password, client id, language
$clients = array(
    'user1' => array('password' => 'pwofuser', 'client' => 2555270, 'language' => 'en'),
    'user2' => array('password' => 'mypassword', 'client' => 987654, 'projects'=>array(456789), 'language' => 'nl'),
    'odd' => array('password' => 'odd123', 'client' => 1823505, 'language' => 'en'),
);
