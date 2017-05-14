<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
  echo "成功了！";
});
//匹配路由自定义规则了099999999866
Macaw::get('/home', 'HomeController@home');

Macaw::$error_callback = function() {
  throw new Exception("路由无匹配项 404 Not Found");
};

Macaw::get('/abc',function(){
	echo '哈哈1';
});
Macaw::get('/admin','AdminController@index');      //后台首页
Macaw::get('/article','ArticleController@index');
Macaw::dispatch();