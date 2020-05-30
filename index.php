<?php

class temprature{
	
	private $c=0;
	
	private $f=32;
	
	public function get_c(){
		return	$this->c;
	}
	
	public function set_c($c){
		if(!empty($c) && is_numeric($c)){
			$this->c = $c;
		}
	}
	public function get_f(){
		return	$this->f;
	}
	
	public function set_f($f){
		if(!empty($f) && is_numeric($f)){
			$this->f = $f;
		}
	}
	public function __construct($c=0){
		$this->set_c($c);
		$this->convert_c2f($this->get_c());		
	}
	
	public function convert_f2c($f){
		$this->set_f($f);
		$this->set_c(round(($this->get_f() - 32) * (5/9)),2);
		return $this->get_c();
	}
	
	public function convert_c2f($c){
		$this->set_c($c);
		$this->set_f(round(($this->get_c() * 1.8) + 32, 2));
		return $this->get_f();
	}
}
/* $c15= new temprature(15);
echo 'c=15 => f='.$c15->get_f();
echo '<br>';
$f78= new temprature();
echo 'f=78 => c='.$f78->convert_f2c(78);
echo '<br>';
$default = new temprature();
echo 'default f='.$default->get_f(); */

?>