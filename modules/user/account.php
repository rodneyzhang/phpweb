<?php
class account extends controller {

    public function register() {
    
    }
    
    public function login() {
        $conn = mysql_connect('localhost', 'root', 'root');
        $res = mysql_query('show databases;', $conn);
        $result = mysql_fetch_array($res);
        $title = md5('abc');
        $this->assign(get_defined_vars());
        $this->display('login');
    }
    
    public function password() {
    
    }
    
    public function updateinfo() {
    
    }
}