<?php 

namespace AppExceptions;  

use Illuminate\Contracts\Debug\ExceptionHandler;
use Exception;

class Handler implements ExceptionHandler {  
    
  public function report(Exception $e) {
    throw $e;
  }

  public function render($request, Exception $e) {
    throw $e;
  }

  public function renderForConsole($output, Exception $e) {
    throw $e;
  }
}