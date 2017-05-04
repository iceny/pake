<?php
// use Illuminate\Database\Eloquent\Model;
class HomeController extends BaseController{
	public function home(){
         // $article = Article::first();
         // //$article = Article::getinfo();
         // //var_dump($article);
         // require dirname(__FILE__).'/../views/home.php';
       
       $this->view = View::make('home')->with('article',Article::first())
                                       ->witha('这是的')
                                       ->withAB('呵呵呵');
	    $this->mail = Mail::to('naivman@163.com')
	                        ->from('voocel@163.com')
	                        ->title("哈哈")
	                        ->content('这是内容');
	}                       

}