<?php
abstract class ControllerBase {
    protected $view;
    protected $data;
	
    function __construct()
    {
		$this->view = new View();
		//App common data
		$this->data	= array(
				"title"			=> "Your website",
				"description"	=> "Hello World",
				"keywords"		=> "", 
				"js"			=> array("jquery.min.js", "bootstrap.min.js"),
				"css"			=> array("bootstrap.min.css", "default.css")
				);
    }
}
?>