<?php
/**
 * Description of RegistrationController
 *
 * @author jsa
 */
class RegistrationController {
    
    const PAGE_TITLE_PREFIX = "Course Registration: ";
    
    private $model;
    
    public function __construct(RegistrationModel $model) {
        $this->model = $model;
    }
    
    function step1() {
        // TODO validate
        // If the validation fails then mark errors and navigate 
        // to the first step view.
        
//        if (validationFails) {
//            return 'view/step1view.php';
//        }
        
        // At this stage the validationi succeeded. Process inputs
        $this->model->setName($_POST["username"]);
        $this->model->setLevel($_POST["level"]);
        
        $courseService = new CourseService();
        $courseDays = $courseService->findCourseDays($this->model->getLevel());
        
        $this->model->setTrainingDays($courseDays);
    
        
        // and navigate to the next step
        
        $this->model->setPageTitle(self::PAGE_TITLE_PREFIX."Step 2"); // set the title for the next step
        return 'view/step2view.php';
    }
    
    function step2() {
        // TODO validate
        $dayParam = $_POST["days"];
        // TODO process inputs
        
        $this->model->setPageTitle(self::PAGE_TITLE_PREFIX."Step 3"); // set the title for the next step
        // TODO navigate
    }
}
