<?php
class View
{
    private $data = array();

    function __construct()
    {
    }
    
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
	
	public function __get($name) {
		return $this->data[$name];
	}
    
    private function build($name, $header, $footer, $css_PATH = 'css/', $js_PATH = 'js/')
    {
      $config	= Config::singleton();
      $folder	= $config->get('viewsFolder_Default');

      $this->data["header_path"] 	= $folder . $header;
      $this->data["body_path"] 		= $folder . $name;
      $this->data["footer_path"]	= $folder . $footer;

      //extra paths
      $this->data["base"]			= $config->get('baseURL');
      $this->data["css_path"]		= $folder . $css_PATH;
      $this->data["js_path"]		= $folder . $js_PATH;
      $this->data["img_path"]		= $config->get('imgFolder');
    }

    public function show($name, $vars = array(), $header = 'header.php', $footer = 'footer.php')
    {
        $this->build($name, $header, $footer);

        foreach ($this->data as $key => $value)
        {
            $$key = $value;
        }

        $css = (file_exists($css_path) == true) ? true : false;
        
        if (file_exists($body_path) == false)
        {
	        trigger_error ('Page `' . $body_path . '` does not exist.', E_USER_NOTICE);
	        return false;
        }

        if(is_array($vars))
        {
            foreach ($vars as $key => $value)
            {
	           $$key = $value;
            }
        }
			
        require_once($header_path);
        require_once($body_path);
        require_once($footer_path);
    }
}
?>