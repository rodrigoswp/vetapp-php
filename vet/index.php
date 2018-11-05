<?php  
define("_APP", dirname(__FILE__) . 'vetapp');


//ob_end_clean();

# === slim
# ==================================================
require '../vendor/autoload.php';
$app = new \Slim\App([
    'settings' => [
        'determineRouteBeforeAppMiddleware' => true,
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false
    ]
]);

require_once  '../src/config/config.php';
require_once  '../src/models/appModels.php';  
require_once  '../src/helpers/appHelpers.php';
require_once  '../src/controllers/appControllers.php';

//require_once  '../src/handlers/exception.php';



# === run slim
$app->run();