<?php
/**
 * Description of CourseService
 *
 * @author jsa
 */
class CourseService {
    
    private $levelDaysMap;
    
    public function __construct() {
        $this->levelDaysMap = array(
        Level::BEGINNER => array("Pondelok", "Streda"),
        Level::INTERMEDIATE => array("Pondelok", "Štvrtok"),
        Level::PROFESSIONAL => array("Pondelok", "Utorok", "Streda", "Štvrtok"),
        );
    }
    
    /**
     * 
     * @param type $level
     */
    function findCourseDays($level) {
        return $this->levelDaysMap[$level];
    }
}
