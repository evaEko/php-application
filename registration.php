<?php

    require_once 'model/Level.php';
    require_once 'services/CourseService.php';
    require_once 'model/RegistrationModel.php';
    require_once 'controller/RegistrationController.php';
    
    session_start();
    
    $model = new RegistrationModel();
    $controller = new RegistrationController($model);
    
    $navigation = 'view/step1view.php';
    
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        $navigation = $controller->{$_GET['action']}();
    } else {
        $model->setAction("step1");
        $model->setPageTitle(RegistrationController::PAGE_TITLE_PREFIX."Step 1");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $model->getPageTitle() ?></title>
    </head>
    <body>
    <?php
        require_once $navigation;
    ?>  
    </body>
</html>

<?php
    $model->saveToSession();
?>

