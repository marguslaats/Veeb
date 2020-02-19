<?php


class Core
{
  protected $currentController = "Pages";
  protected $currentMethod = "index";
  protected $params = array();


  public function __construct()
  {
    $url = $this->getUrl();
    echo '<pre>';
    print_r($url);
    echo '</pre>';
    if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
      $this->currentController = ucwords($url[0]);
      unset($url[0]);


    }
    // create controller object
    require_once '../app/controllers/'.$this->currentController.'.php';
    $this->currentController = new $this->currentController();
    // check the method
    if(isset($url[1])){
      if(method_exists($this->currentController, $url[1])){
        $this->currentMethod = $url[1];
      }
    }
    echo '<pre>';
    print_r($url);
    echo '</pre>';


    echo '<pre>';
    print_r($this->currentController);
    echo '</pre>';
  }

  public function getUrl(){
    if(isset($_GET['url'])){
      $url = rtrim($_GET['url'],'/');
      $url = filter_var($url,FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    };
  }
}