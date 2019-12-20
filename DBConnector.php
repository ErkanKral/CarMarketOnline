<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnector
 *
 * @author diar.khal
 */
class DBConnector extends mysqli{
    
    private $user="root";
    private $pass="";
    private $dbHost="localhost";
    
    private static $instance=null;
    
    
    public static function  getConnector(){        
        if (!self::$instance instanceof self) {
            self::$instance=new self;
        }
        return self::$instance;
    }
    
    private function __construct() {
        parent::__construct($this->dbHost,  
                            $this->user,  
                            $this->pass);
        if (mysqli_connect_error()) {
            exit('Verbindungsfehler('.mysqli_connect_errno().')'
                    .mysqli_connect_error());
        }
        parent::set_charset('utf-8');
    }
    
     public function __clone() {
       trigger_error('Clone is not allowed.', E_USER_ERROR);
     }
     
     public function __wakeup() {
       trigger_error('Deserializing is not allowed.', E_USER_ERROR);
     }    
}
