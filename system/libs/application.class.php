<?php
class application {
    /**
     *
     * @var router
     */
    public $router;

    /**
     *
     * @var controller
     */
    public $controller;

    public function __construct() {
        $this->router = base::loadlib('router', true);
        $this->initialize();
    }

    public function initialize() {
        date_default_timezone_set(config::getconfig('system', 'timezone'));
    }

    public function start() {
        $this->router->route();
        $this->handle_request();
        $this->render();
    }

    public function handle_request() {
        call_user_func_array(array($this->controller, ROUTE_A), array());
    }

    public function authorize() {
        //
    }

    public function render() {
        $webpath = THEMEPATH . '/' . config::getconfig('system', 'theme') . '/';
        $path = ROUTE_M.'/'.ROUTE_C.'/'.ROUTE_A;
        $loader = new css_js_loader();
    }
}