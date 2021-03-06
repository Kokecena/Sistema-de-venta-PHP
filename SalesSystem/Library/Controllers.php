<?php
class Controllers 
{
    public function __construct() {
        $this->view = new Views();
        $this->loadClassmodels();
    }
    public function loadClassmodels()
    {
        $class = get_class($this);
        $array = explode("Controller",$class);
        $model = $array[0].'_model';
        $path = 'Models/'.$model.'.php';
        if(file_exists($path)){
            require $path;
            $this->model = new $model();
        }
    }
}

?>