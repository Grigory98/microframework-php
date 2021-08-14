<?php

namespace Project\Controllers;
use \Core\Controller;

class TestController extends Controller {
    public function __construct() {
        //echo "TestController_is_work";
    }
    
    public function all() {
        //echo "Method_all_is_work";
    }
    
    public function test() {
        $this->title = 'TEST_SUKA';
        return $this->render('test/ss',['var1'=>'dfsdf', 'var2'=>'gggg']);
    }
    
}
