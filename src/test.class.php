<?php
/**
 * Test Class to configure jenkins and phpdox
 * @author Florian THIERRY
 * @copyright 2014 Florian THIERRY
 * @version 1.0.0
 * @property mixed $_value
 * @method void setValue(mixed $value)
 * @method mixed getValue()
 */
 
class Test{
	private $_value = "";
	
	/**
	 * Set the value in $_value
	 * @param mixed $value The value to set
	 */
	public function setValue($value){
		$this->_value = $value;
	}
	
	/**
	 * Get the value of $_value
	 * @return mixed The value you had set
	 */
	public function getValue(){
		return $this->_value;
	}
}