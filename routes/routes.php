<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
  echo "成功了！";
});
//匹配路由自定义规则了01
Macaw::get('/home', 'HomeController@home');
// Macaw::get('(:all)', function($fu) {
//   echo '未匹配到路由<br>'.$fu;
// });
Macaw::get('/admin','AdminController@index');
Macaw::get('/article','ArticleController@index');
Macaw::dispatch();