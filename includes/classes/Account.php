<?php 

class Account {

    private $con;
    private $errorArray = array();

    public function __construct($con){
        $this->con = $con;
    }

    public function register($fn, $ln, $un, $em, $em2, $pw, $pw2){
        $this->validateFirstName($fn);
        $this->validateLastName($fn);
    }

    private function validateFirstName($fn) {
        if(strlen($fn) > 25 || strlen($fn) < 2){
            array_push($this->errorArray, Constants::$firstNameCharacters);
        }
    }

    private function validateLastName($ln) {
        if(strlen($ln) > 25 || strlen($ln) < 2){
            array_push($this->errorArray, Constants::$lastNameCharacters);
        }
    }

    public function getError($error){
        if(in_array($error, $this->errorArray)){
            return "<span class='errorMessage'>$error</span>";
        }
    }
}

?>