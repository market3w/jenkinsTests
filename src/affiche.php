<?php
/**
 * Test Class to configure jenkins and phpdox
 * @author Florian THIERRY
 * @copyright 2014 Florian THIERRY
 * @version 1.0.0
 */
 
class Affiche{
    
    /**
     * @var mixed $_value   valeur par défaut : ""
     * @var mixed $_value2  valeur par défaut : "" 
     */
    
    private $_value = "";
    private $_value2 = "";

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

    /**
     * Set the value in $_value2
     * @param mixed $value The value to set
     */
    public function setValue2($value){
        $this->_value2 = $value;
    }

    /**
     * Get the value of $_value2
     * @return mixed The value you had set
     */
    public function getValue2(){
        return $this->_value2;
    }
}