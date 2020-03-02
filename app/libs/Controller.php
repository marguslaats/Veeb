<?php
/**
 *
 *Class Conrtoller
 *Loads views and models
 */

class Controller
{
 // Load view
  public function view($viewFile, $data = array()){
    if(file_exists('../app/views/'.$viewFile.'.php')){
      require_once '../app/views/'.$viewFile.'.php';
    } else {
      die($viewFile.'.php does not exist');
    }
}
 //Load model
  public function model($modelFile){
    require_once '../app/models/'.$modelFile.'.php';
    return new $modelFile();
  }
}