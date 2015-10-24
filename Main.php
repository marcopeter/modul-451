<?php
/**
 * Controller
 *
 * @author marco
 */

class Main {
    private $queueObj;
    private $personObj;
    private $tpl;
    
    public function __construct() {
        $this->queueObj = new Queue();
        $this->tpl = new TinyTpl();
        $this->personObj = new Person();
    }
    
    public function main($post){
        
        switch ($post['action']) {
            case 'queuePerson':
                $this->queuePerson($post['person']);
                break;
            
            case 'callPerson':
                $this->callPerson($post);
                break;

            default:
                $this->queuePerson($post['person']);
                break;
        }
        
    }
    
    public function queuePerson($person){
        $error = array();
        
        if($person){
            $error[] = $this->personObj->setForename($person['forename']);
            $error[] = $this->personObj->setLastname($person['lastname']);
            $error[] = $this->personObj->setAge($person['age']);

            $error = array_filter($error);
            
            if(empty($error)){
                $this->queueObj->add($this->personObj);
                $result = true;
            } else {
                $this->tpl->error = $error;
            }
            
            
        }
        echo $this->tpl->render('view/queuePerson.php');     
        
    }
    
    public function callPerson($post){

        if($post['submit']){
            $this->personObj = $this->queueObj->remove();

            $this->tpl->queueLength = $this->queueObj->length();
            $this->tpl->person = $this->personObj;
        }
        echo $this->tpl->render('view/callPerson.php');
        
    }
        
}
?>