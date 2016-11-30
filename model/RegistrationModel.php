<?php

/**
 * Description of RegistrationModel
 *
 * @author jsa
 */
class RegistrationModel {
    private $action = "";
    private $pageTitle = "";
    
    private $name;
    private $level;
    private $trainingDays;
        
    function __construct() {
        if (!isset($_SESSION["REGISTRATION"])) {
            $_SESSION["REGISTRATION"] = array();
        }
        
        $this->name = self::fromSession("name");
        $this->level = self::fromSession("level");
        $this->trainingDays = self::fromSession("days");

    }
    
    function getName() {
        return $this->name;
    }

    function getLevel() {
        return $this->level;
    }

    function getTrainingDays() {
        return $this->trainingDays;
    }

    public function setName($name) {
        $this->name = $name;
    }

    function setLevel($level) {
        $this->level = $level;
    }

    function setTrainingDays($trainingDays) {
        $this->trainingDays = $trainingDays;
    }
    
    function isLevelSelected($level) {
        return $this->level == $level;
    }
    
    function getAction() {
        return $this->action;
    }
    
    function setAction($action) {
        $this->action = $action;
    }

    function getPageTitle() {
        return $this->pageTitle;
    }
    
    function setPageTitle($pageTitle) {
        $this->pageTitle = $pageTitle;
    }
        
    public function saveToSession() {
        self::toSession($this->name, "name");
        self::toSession($this->level, "level");
        self::toSession($this->trainingDays, "days");
    }
    
    private static function fromSession($param) {
        if (isset($_SESSION["REGISTRATION"][$param])){
            return $_SESSION["REGISTRATION"][$param];
        } else {
            return null;
        }
    }
    
    private static function toSession($value, $param) {
        $_SESSION["REGISTRATION"][$param] = $value;
    }
}

?>