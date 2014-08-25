<?php
class Test{
	private $_value = "";
	
	public function setValue($value){
		$this->_value = $value;
	}
	
	public function getValue(){
		return $this->_value;
	}
}