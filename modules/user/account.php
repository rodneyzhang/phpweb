<?php
class account extends controller {

    public function register() {
    
    }
    
    public function login() {
        $conn = mysql_connect('localhost', 'root', 'root');
        $res = mysql_query('show databases;', $conn);
        $result = mysql_fetch_array($res);
        $title = 'Succefully';
        
        $this->assign(get_defined_vars());
        $this->display('login');
    }
    
    public function password() {
    	echo 'OK';
    }
    
    public function updateinfo() {
    
    }
    
    public function post_edit() {
    	echo 'edit user: post';
    }
    
    public function get_edit() {
    	//
    }
}