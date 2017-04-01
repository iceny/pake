<?php
class HomeController extends BaseController{
	public function home(){
         $info=Article::getinfo();
         require dirname(__FILE__).'/../views/home.php';
       
	}
}