<?php  
define("_APP", dirname(__FILE__) . 'vet');

# === slim
# ==================================================
require '../vendor/autoload.php';
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

require_once  '../src/config/config.php';
require_once  '../src/models/appModels.php';  
require_once  '../src/helpers/appHelpers.php';
require_once  '../src/controllers/appControllers.php';

//require_once  '../src/handlers/exception.php';



# === run slim
$app->run();