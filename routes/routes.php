<?php
    require_once '../vendor/autoload.php';

    $klein = new \Klein\Klein();

       $klein->respond('GET', '/',  'HomeController@home');

       $klein->respond('GET', '/fcc', function () {
           return 'Hello World!';
         });

       $klein->respond('get','/lzh',function(){
       	   return "呵呵！";
       });

       $klein->dispatch();