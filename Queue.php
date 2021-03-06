<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Model
 * - adds and removes persons from queue
 * - get length of quere
 * 
 * @author marco
 */
session_start();
class Queue {
    private $queueList = array();
    
    function __construct() {
        if(!$_SESSION) {
            $_SESSION['personArr'] = array();
        }
        $this->queueList = $_SESSION['personArr'];
        
    }
    
    public function add($personObj){
        
        $result = false;
        
        if(is_object($personObj)){
            $this->queueList[] = serialize($personObj);
            $_SESSION['personArr'] = $this->queueList;
            $result = true;
        }
        
        return $result;
    }
    
    public function remove(){
        
        $firstPersonObj = unserialize(array_shift($this->queueList));
        $_SESSION['personArr'] = $this->queueList;
        
        return $firstPersonObj;
    }
    
    public function length(){
        return count($this->queueList);
    }
    
}

?>
