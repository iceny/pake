<?php
/*
class Article{
	public function getinfo(){
		$connection=mysql_connect("localhost","root","");
	    if(!$connection){
	    	die('could not connect:'.mysql_error());
	    }
        mysql_set_charset("UTF8",$connection);
        mysql_select_db("pake",$connection);
        $result=mysql_query("SELECT * FROM article limit 0,2");
	   if(mysql_num_rows( $result)){
	    if($row=mysql_fetch_array($result)){
	    	
	    	 return $row;
	      }
	    }else{
	    	mysql_error(); 
	    }
	    mysql_close($connection);
	}

} 
    */
class Article extends Illuminate\Database\Eloquent\Model

{

  public $timestamps = false;
  public $table="article";

}