<?php
// use Illuminate\Database\Eloquent\Model;
class HomeController extends BaseController{
	public function home(){
         $article = Article::first();
         var_dump($article);
         // require dirname(__FILE__).'/../views/home.php';
       
	}
}