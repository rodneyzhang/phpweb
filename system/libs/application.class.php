<?php
class application {
    /**
     *
     * @var router
     */
    public $router;

    public function __construct() {
        $this->router = base::loadlib('router', true);
        $this->initialize();
    }
    
    public function initialize() {
        date_default_timezone_set(config::getconfig('system', 'timezone'));
    }

    public function start() {
        $this->router->route();
    }
}