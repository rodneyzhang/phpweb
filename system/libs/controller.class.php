<?php
class controller {

    /**
     * 
     * @var view_engine_smarty
     */
    protected $view_engine;
    
    public function __construct() {
        $this->view_engine = view_engine_factory::get_engine();
    }
    
    public function display($tplname) {
        $this->view_engine->display($tplname);
    }
    
    public function assign($vars) {
        $this->view_engine->assign($vars);
    }
}
