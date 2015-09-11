<?php
class IndexController extends ControllerBase
{
      public function indexAction()
      {
          $config = Config::singleton();
          require $config->get('modelsFolder').'indexModel.php';		  
    		  $db = new indexModel();
    		  
    		  $this->data["hello"] = $db->example();
          $this->view->show("index.php", $this->data);
      }

      public function exampleAction()
      {
          $config = Config::singleton();
          
          $this->data["fruit"] = "oranges";
          $this->view->show("example.php", $this->data);
      }       
}
?>