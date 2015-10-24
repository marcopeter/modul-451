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
                
        preg_match("/^[a-zA-Z-]{1,255}$/", $forename, $output_array);
        if(!in_array($forename, $output_array)){
           return "Vorname muss mindestens 1 und höchstens 255 Zeichen haben.";
        } else {
            $this->forename = $forename;
        }
        
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        
        preg_match("/^[a-zA-Z-]{1,255}$/", $lastname, $output_array);
        if(!in_array($lastname, $output_array)){
           return "Nachname muss mindestens 1 und höchstens 255 Zeichen haben.";
        } else {
            $this->lastname = $lastname;
        }
        
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        
        if($age < 18 || $age > 99){
             return "Alter muss zwischen 18 und 99 liegen und Sie müssen mindestns 18 Jahre sein.";
        } else {
            $this->age = $age;
        }
        
    }

}

?>
