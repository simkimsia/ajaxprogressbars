<?php


class JsonObject {

	public $result = null;
	public $error = null;

	function __construct($success = true) {
       if ($success) {
       	  $this->result = array('data' => array());
       } else {
       		$this->error = "Error message";
       }
   }

	function getJsonData(){
        $var = get_object_vars($this);
        foreach($var as &$value){
           if(is_object($value) && method_exists($value,'getJsonData')){
              $value = $value->getJsonData();
           }
        }
        return $var;
     }

}