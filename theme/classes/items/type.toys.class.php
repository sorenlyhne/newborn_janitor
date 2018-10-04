<?php
/**
* @package janitor.itemtypes
* This file contains itemtype functionality
*/

class TypeToys extends Itemtype {

	/**
	* Init, set varnames, validation rules
	*/
	function __construct() {

		// construct ItemType before adding to model
		parent::__construct(get_class());


		// itemtype database
		$this->db = SITE_DB.".item_toys";


		$this->addToModel("name", array(
			"type" => "string",
			"label" => "What is the name of the toy?",
			"required" => true,
			"hint_message" => "I mean the product name. For instance 'Teddy bear'",
			"error_message" => "I need to know!"
		));

		$this->addToModel("nickname", array(
			"type" => "string",
			"label" => "What is your nickname for the toy?",
			"required" => false,
			"hint_message" => "For instance your teddy bear could be called Hans.",
		));

		$this->addToModel("gift", [
			"type" => "string",
			"label" => "Was this toy a gift?",
			"required" => "true",
			"hint_message" => "Yes or no?",
			"error_message" => "Either it is or it isn't!"
		]);

	}

}

?>