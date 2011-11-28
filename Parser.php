<?php
	/**
	* This class represents HTML content of defined URL. 
	*/
	class HTMLContent {

		private $url;		
		public $variables[];
		
		/**
		* Initialises curl options
		*/
		public function init() {
			
			}
		
		/**
		* Constructs and initialises basic properties
		* @param url URL adress of the web page to deal with.
		* @param method Method to be used to send variables defined in variables[] array.
		*/
		public __constructor($url, $method) {
			$this->url = $url;
			$this->method = $method;
		}
	
	}
?>