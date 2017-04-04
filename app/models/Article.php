<?php

class Article{
	public function getinfo(){
		$connection=mysql_connect("localhost","root","root");
	    if(!$connection){
	    	die('could not connect:'.mysql_error());
	    }
        mysql_set_charset("UTF8",$connection);
        mysql_select_db("pake",$connection);
        $result=mysql_query("SELECT * FROM articles limit 0,2");
	    // while($row=mysql_fetch_array($result)){
	    // 	$info[]=$row;
	    // }
	    //     echo"<h1>".$info[1]['title']."</h1>";
	    // 	echo "<p>".$info[1]['content']."</p>";
	    // var_dump($row);
	    if($row=mysql_fetch_array($result)){
	    	return $row;
	    }
	    
	    mysql_close($connection);
	}

}

// class Article extends Illuminate\Database\Eloquent\Model

// {

//   public $timestamps = false;

// }