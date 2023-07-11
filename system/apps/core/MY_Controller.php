<?php
class MY_Controller extends MX_Controller{
    public $method,$class,$activeURI;

    function __construct(){
        parent :: __construct();
        
        $this->class = $this->router->fetch_class();
        $this->method = $this->router->fetch_method();
        $this->activeURI = $this->uri->segment(3,0);
    }
    
    protected function activeMenu($menu = 'dashboard',$class = 'active',$uri = false){
        return $menu == ($uri ? $this->activeURI : $this->method) ? $class : '';
    }


    
}
?>