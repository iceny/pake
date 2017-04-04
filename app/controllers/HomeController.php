<?php
// use Illuminate\Database\Eloquent\Model;
class HomeController extends BaseController{
	public function home(){
         $article = Article::getinfo();
         var_dump($article);
         require dirname(__FILE__).'/../views/home.php';
       
	}
}