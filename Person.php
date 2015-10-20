<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Bean
 * Properties of person
 *
 * @author marco
 */
class Person {
    //put your code here
    private $forename;
    private $lastname;
    private $age;
    
    
    public function getForename() {
        return $this->forename;
    }

    public function setForename($forename) {
        $this->forename = $forename;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

}

?>
